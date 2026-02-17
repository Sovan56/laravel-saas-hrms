<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
private function getEmployee()
{
    $user = Auth::user();

    $employee = Employee::where('company_id', $user->company_id)
        ->where('email', $user->email)
        ->first();

    if (!$employee) {
        $employee = Employee::create([
            'company_id' => $user->company_id,
            'employee_code' => 'EMP-' . str_pad(
                Employee::where('company_id', $user->company_id)->count() + 1,
                4,
                '0',
                STR_PAD_LEFT
            ),
            'name' => $user->name,
            'email' => $user->email,
            'department' => 'General',
            'date_of_joining' => now()->toDateString(),
            'status' => 'active',
        ]);
    }

    return $employee;
}


    public function index()
    {
        $employee = $this->getEmployee();

        if (!$employee) {
            return redirect()->route('employees.create')
                ->with('error', 'Please create an employee profile first.');
        }

        $today = Carbon::today();

        $attendance = Attendance::where('employee_id', $employee->id)
            ->where('attendance_date', $today)
            ->first();

        return view('attendance.index', compact('attendance'));
    }

    public function clockIn()
    {
        $employee = $this->getEmployee();

        if (!$employee) {
            return redirect()->route('employees.create')
                ->with('error', 'Please create an employee profile first.');
        }

        $today = Carbon::today();

        $exists = Attendance::where('employee_id', $employee->id)
            ->where('attendance_date', $today)
            ->first();

        if ($exists) {
            return back()->with('error', 'You have already clocked in today.');
        }

        Attendance::create([
            'company_id' => $employee->company_id,
            'employee_id' => $employee->id,
            'attendance_date' => $today,
            'clock_in' => Carbon::now()->format('H:i:s'),
        ]);

        return back()->with('success', 'Clock-in successful.');
    }

    public function clockOut()
    {
        $employee = $this->getEmployee();

        if (!$employee) {
            return redirect()->route('employees.create')
                ->with('error', 'Please create an employee profile first.');
        }

        // Use Asia/Kolkata timezone
        $today = Carbon::today('Asia/Kolkata');

        $attendance = Attendance::where('employee_id', $employee->id)
            ->where('attendance_date', $today)
            ->first();

        if (!$attendance || !$attendance->clock_in) {
            return back()->with('error', 'Please clock in first.');
        }

        if ($attendance->clock_out) {
            return back()->with('error', 'You have already clocked out.');
        }

        $clockIn = Carbon::createFromFormat(
            'Y-m-d H:i:s',
            $attendance->attendance_date . ' ' . $attendance->clock_in,
            'Asia/Kolkata'
        );

        $clockOut = Carbon::now('Asia/Kolkata');

        $minutes = $clockOut->diffInMinutes($clockIn);

        $attendance->update([
            'clock_out' => $clockOut->format('H:i:s'),
            'working_minutes' => $minutes,
        ]);

        return back()->with('success', 'Clock-out successful.');
    }

}
