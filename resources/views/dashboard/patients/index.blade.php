<x-dash>
    <p class="h1">Patients</p>

    <!-- Add New Button -->
    <a class="mainlinks" href="/patientsadd"><i class="fa-solid fa-plus"></i> Add New Patient</a>

    <!-- Success Alert -->
    @if (session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    <p class="h2">Total Patients ({{ $patients->count() }})</p>

    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th class="actions">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($patients as $patient)
                <tr>
                    <td>{{ $patient->name }}</td>
                    <td>{{ $patient->email }}</td>
                    <td>{{ $patient->phone }}</td>
                    <td>{{ $patient->address }}</td>
                    <td>
                        <div class="actions">
                            <!-- Edit Button -->
                            <a class="edit" href="{{ route('patients.edit', $patient->id) }}">Edit</a>

                            <!-- Delete Form -->
                            <form action="{{ route('patients.destroy', $patient->id) }}" method="POST"
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
