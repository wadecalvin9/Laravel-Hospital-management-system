<x-dash>
    <style>
    </style>
    <p class="h1">
        Patients
    </p>
    <a class="mainlinks" href=""><i class="fa-solid fa-plus"></i> Add New Patient</a>

    <p class="h2">Total patients</p>
    <table class="table">
        <tbody>
            @if (session('success'))
                <p class="alert-success">{{ session('success') }}</p>
            @endif

            <tr>
                <th>
                    Name
                </th>

                <th>
                    Email
                </th>
                <th>
                    Phone
                </th>
                <th>
                    Address

                </th>
                <th class="actions">
                    Actions
                </th>

            </tr>
            @foreach ($patients as $patient)
                <tr>
                    <td>
                        <p>{{ $patient->name }}</p>

                    </td>

                    <td>
                        <p>{{ $patient->email }}</p>

                    </td>
                    <td>
                        <p>{{ $patient->phone }}</p>

                    </td>
                    <td>
                        <p>{{ $patient->address }}</p>

                    </td>
                    <td style="justify-content:center">
                        <form action="{{ route('patients.destroy', $patient->id) }}" method="POST"
                            style="display:inline;"
                            onsubmit="return confirm('Are you sure you want to delete this patient?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete">Delete</button>
                        </form>

                        <a class="edit" href="">Edit</a>
                    </td>

                </tr>
            @endforeach


        </tbody>
    </table>



</x-dash>
