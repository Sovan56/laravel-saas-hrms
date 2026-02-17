<x-app-layout>
    <div class="max-w-xl mx-auto p-6 bg-white shadow rounded">
        <h2 class="text-lg font-semibold mb-4">Add Employee</h2>
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
              action="{{ route('employees.store') }}"
              enctype="multipart/form-data">
            @csrf

            <input class="w-full mb-3 border rounded p-2" name="name" placeholder="Name" required>
            <input class="w-full mb-3 border rounded p-2" name="email" type="email" placeholder="Email" required>

            <input type="file" name="image" class="w-full mb-3">

            <input class="w-full mb-3 border rounded p-2" name="department" placeholder="Department" required>
            <input class="w-full mb-3 border rounded p-2" name="date_of_joining" type="date" required>

            <button class="bg-indigo-600 text-white px-4 py-2 rounded">
                Save Employee
            </button>
        </form>
    </div>
</x-app-layout>
