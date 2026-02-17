<aside class="w-64 bg-gray-900 text-white min-h-screen p-4">
    <h2 class="text-xl font-semibold mb-6">HRMS</h2>

    <nav class="space-y-1 text-sm">
        <a href="{{ route('dashboard') }}"
           class="block px-3 py-2 rounded hover:bg-gray-800 text-gray-200 hover:text-white">
            Dashboard
        </a>

        <a href="{{ route('employees.index') }}"
           class="block px-3 py-2 rounded hover:bg-gray-800 text-gray-200 hover:text-white">
            Employees
        </a>

        <a href="{{ route('profile.edit') }}"
           class="block px-3 py-2 rounded hover:bg-gray-800 text-gray-200 hover:text-white">
            Profile
        </a>

        <a href="{{ route('attendance.index') }}"
           class="block px-3 py-2 rounded hover:bg-gray-800 text-gray-200 hover:text-white">
            Attendance
        </a>

        <a href="{{ route('leaves.index') }}"
           class="block px-3 py-2 rounded hover:bg-gray-800 text-gray-200 hover:text-white">
            Leaves
        </a>
    </nav>
</aside>
