<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Employee;
use App\Models\Leave;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $companyId = Auth::user()->company_id;
        $today = Carbon::today();

        $totalEmployees = Employee::where('company_id', $companyId)->count();

        $todayAttendance = Attendance::where('company_id', $companyId)
            ->where('attendance_date', $today)
            ->count();

        $pendingLeaves = Leave::where('company_id', $companyId)
            ->where('status', 'pending')
            ->count();

        return view('dashboard.index', compact(
            'totalEmployees',
            'todayAttendance',
            'pendingLeaves'
        ));
    }
}
