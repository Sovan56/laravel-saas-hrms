<x-app-layout>
    <div class="max-w-xl mx-auto p-6 bg-white shadow rounded">
        <h2 class="text-lg font-semibold mb-4">Apply Leave</h2>

        @if (session('error'))
            <div class="mb-4 bg-red-100 text-red-700 px-4 py-3 rounded">
                {{ session('error') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-4 bg-red-100 text-red-700 px-4 py-3 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form method="POST" action="{{ route('leaves.store') }}">
            @csrf

            <select name="leave_type" class="w-full mb-3 border p-2 rounded">
                <option value="">Select Leave Type</option>
                <option>Casual</option>
                <option>Sick</option>
                <option>Paid</option>
            </select>

            <input type="date" name="start_date"
                   class="w-full mb-3 border p-2 rounded" required>

            <input type="date" name="end_date"
                   class="w-full mb-3 border p-2 rounded" required>

            <textarea name="reason"
                      class="w-full mb-3 border p-2 rounded"
                      placeholder="Reason (optional)"></textarea>

            <button class="bg-indigo-600 text-white px-4 py-2 rounded">
                Submit Leave
            </button>
        </form>
    </div>
</x-app-layout>
