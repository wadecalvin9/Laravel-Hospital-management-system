<x-dash>
    <p class="h1">Doctors</p>

    <!-- Add New Button -->
    <a class="mainlinks" href="/patientsadd"><i class="fa-solid fa-plus"></i> Add New Doctor</a>

    <!-- Success Alert -->
    @if (session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    <p class="h2">Total Doctors ({{ $doctors->count() }})</p>

    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Specialization</th>
                <th>Gender</th>
                <th class="actions">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($doctors as $doctor)
                <tr>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->email }}</td>
                    <td>{{ $doctor->phone }}</td>
                    <td>{{ $doctor->address }}</td>
                    <td>{{ $doctor->specialization }}</td>
                    <td>{{ $doctor->gender }}</td>
                    <td>
                        <div class="actions">
                            <!-- Edit Button -->
                            <a class="edit" href="{{ route('patients.edit', $doctor->id) }}">Edit</a>

                            <!-- Delete Form -->
                            <form action="{{ route('patients.destroy', $doctor->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this patient?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align: center; color: gray;">
                        No patients found.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</x-dash>
