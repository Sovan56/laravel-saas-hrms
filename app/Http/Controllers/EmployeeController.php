<?php
namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::where('company_id', Auth::user()->company_id)
            ->latest()
            ->get();

        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:150',
            'email' => 'required|email|max:150|unique:employees,email,NULL,id,company_id,' . Auth::user()->company_id,
            'department' => 'required|max:100',
            'date_of_joining' => 'required|date',
            'image' => 'nullable|image|max:2048',
        ]);

        $companyId = Auth::user()->company_id;

        $employeeCode = 'EMP-' . str_pad(
            Employee::where('company_id', $companyId)->count() + 1,
            4,
            '0',
            STR_PAD_LEFT
        );

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')
                ->store('employees', 'public');
        }

        Employee::create([
            'company_id' => $companyId,
            'employee_code' => $employeeCode,
            'name' => $request->name,
            'email' => $request->email,
            'image' => $imagePath,
            'department' => $request->department,
            'date_of_joining' => $request->date_of_joining,
            'status' => 'active',
        ]);

        return redirect()->route('employees.index')
            ->with('success', 'Employee created successfully.');
    }

    public function edit(Employee $employee)
    {
        $this->authorizeEmployee($employee);

        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $this->authorizeEmployee($employee);

        $request->validate([
            'name' => 'required|max:150',
            'email' => 'required|email|max:150|unique:employees,email,' . $employee->id . ',id,company_id,' . Auth::user()->company_id,
            'department' => 'required|max:100',
            'date_of_joining' => 'required|date',
            'status' => 'required|in:active,inactive',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($employee->image) {
                Storage::disk('public')->delete($employee->image);
            }

            $employee->image = $request->file('image')
                ->store('employees', 'public');
        }

        $employee->update([
            'name' => $request->name,
            'email' => $request->email,
            'department' => $request->department,
            'date_of_joining' => $request->date_of_joining,
            'status' => $request->status,
        ]);

        return redirect()->route('employees.index')
            ->with('success', 'Employee updated successfully.');
    }

    public function destroy(Employee $employee)
    {
        $this->authorizeEmployee($employee);

        if ($employee->image) {
            Storage::disk('public')->delete($employee->image);
        }

        $employee->delete();

        return back()->with('success', 'Employee deleted successfully.');
    }

    private function authorizeEmployee(Employee $employee)
    {
        if ($employee->company_id !== Auth::user()->company_id) {
            abort(403);
        }
    }
}
