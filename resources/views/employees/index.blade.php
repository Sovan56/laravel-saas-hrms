<x-app-layout>
    <div class="p-6">
        <div class="flex justify-between mb-4">
            <h2 class="text-xl font-semibold">Employees</h2>
            <a href="{{ route('employees.create') }}"
               class="bg-indigo-600 text-white px-4 py-2 rounded">
                + Add Employee
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
                        <th class="p-3">Image</th>
                        <th class="p-3 text-left">Code</th>
                        <th class="p-3 text-left">Name</th>
                        <th class="p-3 text-left">Email</th>
                        <th class="p-3 text-left">Department</th>
                        <th class="p-3 text-left">Status</th>
                        <th class="p-3 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $emp)
                        <tr class="border-t">
                            <td class="p-3">
                                @if($emp->image)
                                    <img src="{{ asset('storage/'.$emp->image) }}"
                                         class="w-10 h-10 rounded-full object-cover">
                                @else
                                    <div class="w-10 h-10 rounded-full bg-indigo-600
                                                flex items-center justify-center text-white
                                                text-1xl font-semibold">
                                        {{ strtoupper(substr($emp->name, 0, 1)) }}
                                    </div>
                                @endif
                            </td>
                            <td class="p-3">{{ $emp->employee_code }}</td>
                            <td class="p-3">{{ $emp->name }}</td>
                            <td class="p-3">{{ $emp->email }}</td>
                            <td class="p-3">{{ $emp->department }}</td>
                            <td class="p-3">
                                <span class="px-2 py-1 text-sm rounded
                                    {{ $emp->status === 'active'
                                        ? 'bg-green-100 text-green-700'
                                        : 'bg-red-100 text-red-700' }}">
                                    {{ ucfirst($emp->status) }}
                                </span>
                            </td>
                            <td class="p-3">
                                <div x-data="{ open: false }" class="flex items-center gap-2">

                                    <!-- Edit -->
                                    <a href="{{ route('employees.edit', $emp) }}"
                                    class="inline-flex items-center px-3 py-1.5 text-sm
                                            bg-indigo-600 text-white rounded
                                            hover:bg-indigo-700 transition">
                                        Edit
                                    </a>

                                    <!-- Delete Button -->
                                    <button
                                        @click="open = true"
                                        class="inline-flex items-center px-3 py-1.5 text-sm
                                            bg-red-600 text-white rounded
                                            hover:bg-red-700 transition">
                                        Delete
                                    </button>

                                    <!-- Modal -->
                                    <div
                                        x-show="open"
                                        x-cloak
                                        x-transition
                                        class="fixed inset-0 flex items-center justify-center
                                            bg-black bg-opacity-50 z-50">
                                        <div
                                            @click.away="open = false"
                                            class="bg-white rounded-lg shadow-lg
                                                w-full max-w-md p-6">

                                            <h3 class="text-lg font-semibold text-gray-800 mb-2">
                                                Delete Employee
                                            </h3>

                                            <p class="text-gray-600 mb-6">
                                                Are you sure you want to delete
                                                <strong>{{ $emp->name }}</strong>?
                                                This action cannot be undone.
                                            </p>

                                            <div class="flex justify-end gap-3">
                                                <button
                                                    @click="open = false"
                                                    class="px-4 py-2 text-sm rounded
                                                        bg-gray-200 hover:bg-gray-300">
                                                    Cancel
                                                </button>

                                                <form method="POST"
                                                    action="{{ route('employees.destroy', $emp) }}">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button
                                                        class="px-4 py-2 text-sm rounded
                                                            bg-red-600 text-white
                                                            hover:bg-red-700">
                                                        Yes, Delete
                                                    </button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
