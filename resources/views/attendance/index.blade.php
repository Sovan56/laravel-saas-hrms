<x-app-layout>
    <div class="max-w-xl mx-auto p-6">
        <h2 class="text-xl font-semibold mb-4">Today's Attendance</h2>

        @if(session('success'))
            <div class="mb-3 text-green-700 bg-green-100 p-2 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="mb-3 text-red-700 bg-red-100 p-2 rounded">
                {{ session('error') }}
            </div>
        @endif

        <div class="bg-white shadow rounded p-6 space-y-4">
            <div>
                <strong>Clock In:</strong>
                {{ $attendance?->clock_in ?? '-' }}
            </div>

            <div>
                <strong>Clock Out:</strong>
                {{ $attendance?->clock_out ?? '-' }}
            </div>

            <div>
                <strong>Working Hours:</strong>

                {{ $attendance && $attendance->working_minutes !== null
                    ? gmdate('H:i', $attendance->working_minutes * 60)
                    : '-' }}
            </div>

            <div class="flex gap-3">
                <form method="POST" action="{{ route('attendance.clockIn') }}">
                    @csrf
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded">
                        Clock In
                    </button>
                </form>

                <form method="POST" action="{{ route('attendance.clockOut') }}">
                    @csrf
                    <button class="bg-gray-800 text-white px-4 py-2 rounded">
                        Clock Out
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
