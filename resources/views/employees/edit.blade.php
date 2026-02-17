<x-app-layout>
    <div class="max-w-xl mx-auto p-6 bg-white shadow rounded">

        <h2 class="text-lg font-semibold mb-4 text-center">
            Edit Employee
        </h2>

        <div class="flex justify-center mb-6">
            @if($employee->image)
                <img src="{{ asset('storage/'.$employee->image) }}"
                     class="w-24 h-24 rounded-full object-cover border">
            @else
                <div class="w-24 h-24 rounded-full bg-indigo-600
                            flex items-center justify-center text-white
                            text-3xl font-semibold">
                    {{ strtoupper(substr($employee->name, 0, 1)) }}
                </div>
            @endif
        </div>
        @if ($errors->any())
            <div class="mb-4 bg-red-100 text-red-700 p-3 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form method="POST"
              action="{{ route('employees.update', $employee) }}"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input class="w-full mb-3 border rounded p-2"
                   name="name"
                   value="{{ $employee->name }}"
                   required>

            <input class="w-full mb-3 border rounded p-2"
                   name="email"
                   type="email"
                   value="{{ $employee->email }}"
                   required>

            <div class="mb-3">
                <label class="block text-sm text-gray-600 mb-1">
                    Change Profile Image
                </label>
                <input type="file" name="image"
                       class="w-full border rounded p-2">
            </div>

            <input class="w-full mb-3 border rounded p-2"
                   name="department"
                   value="{{ $employee->department }}"
                   required>

            <input class="w-full mb-3 border rounded p-2"
                   name="date_of_joining"
                   type="date"
                   value="{{ $employee->date_of_joining }}"
                   required>

            <select name="status"
                    class="w-full mb-4 border rounded p-2">
                <option value="active"
                    {{ $employee->status === 'active' ? 'selected' : '' }}>
                    Active
                </option>
                <option value="inactive"
                    {{ $employee->status === 'inactive' ? 'selected' : '' }}>
                    Inactive
                </option>
            </select>

            <button
                class="w-full bg-indigo-600 text-white
                       px-4 py-2 rounded
                       hover:bg-indigo-700 transition">
                Update Employee
            </button>
        </form>
    </div>
</x-app-layout>
