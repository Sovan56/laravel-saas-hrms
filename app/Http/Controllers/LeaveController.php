<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\LeaveRequestMail;
use Illuminate\Support\Facades\Mail;


class LeaveController extends Controller
{
    private function getEmployee()
    {
        return Employee::where('company_id', Auth::user()->company_id)
            ->where('email', Auth::user()->email)
            ->first();
    }

    public function index()
    {
        $employee = $this->getEmployee();

        if (!$employee) {
            return redirect()->route('employees.create')
                ->with('error', 'Please create an employee profile first.');
        }

        $leaves = Leave::where('employee_id', $employee->id)
            ->latest()
            ->get();

        return view('leaves.index', compact('leaves'));
    }

    public function create()
    {
        $employee = $this->getEmployee();

        if (!$employee) {
            return redirect()->route('employees.create')
                ->with('error', 'Please create an employee profile first.');
        }

        return view('leaves.create');
    }

    public function store(Request $request)
    {
        $employee = $this->getEmployee();

        if (!$employee) {
            return redirect()->route('employees.create')
                ->with('error', 'Please create an employee profile first.');
        }
        $request->validate(
            [
                'leave_type' => 'required|max:50',
                'start_date' => 'required|date|before_or_equal:end_date',
                'end_date'   => 'required|date|after_or_equal:start_date',
                'reason'     => 'nullable|string',
            ],
            [
                'start_date.before_or_equal' => 'Start date must be before or equal to end date.',
                'end_date.after_or_equal'    => 'End date must be after or equal to start date.',
            ]
        );

        $hasPendingLeave = Leave::where('employee_id', $employee->id)
            ->where('status', 'pending')
            ->exists();

        if ($hasPendingLeave) {
            return back()->with('error', 'You already have a pending leave request.');
        }

        $overlap = Leave::where('employee_id', $employee->id)
            ->where('status', '!=', 'rejected')
            ->where(function ($q) use ($request) {
                $q->whereBetween('start_date', [$request->start_date, $request->end_date])
                  ->orWhereBetween('end_date', [$request->start_date, $request->end_date])
                  ->orWhere(function ($q) use ($request) {
                      $q->where('start_date', '<=', $request->start_date)
                        ->where('end_date', '>=', $request->end_date);
                  });
            })
            ->exists();

        if ($overlap) {
            return back()->with('error', 'Leave dates overlap with an existing leave.');
        }

        $leave = Leave::create([
            'company_id'  => $employee->company_id,
            'employee_id' => $employee->id,
            'leave_type'  => $request->leave_type,
            'start_date'  => $request->start_date,
            'end_date'    => $request->end_date,
            'reason'      => $request->reason,
            'status'      => 'pending',
        ]);

        Mail::to(Auth::user()->email)->send(new LeaveRequestMail($leave));

        return redirect()->route('leaves.index')
            ->with('success', 'Leave request submitted successfully.');
    }
}
