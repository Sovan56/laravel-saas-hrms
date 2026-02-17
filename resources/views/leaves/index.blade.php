<x-app-layout>
    <div class="p-6">
        <div class="flex justify-between mb-4">
            <h2 class="text-xl font-semibold">My Leaves</h2>
            <a href="{{ route('leaves.create') }}"
               class="bg-indigo-600 text-white px-4 py-2 rounded">
                Apply Leave
            </a>
        </div>

        @if(session('success'))
            <div class="mb-3 bg-green-100 text-green-700 p-2 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="mb-3 bg-red-100 text-red-700 p-2 rounded">
                {{ session('error') }}
            </div>
        @endif

        <div class="bg-white shadow rounded">
            <table class="w-full">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-3 text-left">Type</th>
                        <th class="p-3 text-left">From</th>
                        <th class="p-3 text-left">To</th>
                        <th class="p-3 text-left">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($leaves as $leave)
                        <tr class="border-t">
                            <td class="p-3">{{ $leave->leave_type }}</td>
                            <td class="p-3">{{ $leave->start_date }}</td>
                            <td class="p-3">{{ $leave->end_date }}</td>
                            <td class="p-3">
                                <span class="px-2 py-1 text-sm rounded
                                    {{ $leave->status === 'approved' ? 'bg-green-100 text-green-700' :
                                       ($leave->status === 'rejected' ? 'bg-red-100 text-red-700' :
                                        'bg-yellow-100 text-yellow-700') }}">
                                    {{ ucfirst($leave->status) }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
