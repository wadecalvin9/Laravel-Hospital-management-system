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
                        <button
                            style="padding:5px; margin:2px; background-color: rgba(227, 9, 9, 0.729); border-radius: 10px;cursor:pointer; color: white;" class="delete">Delete</button>
                        <button
                            style="padding:7px; background-color: rgba(20, 20, 217, 0.814); border-radius: 10px;cursor:pointer; color: white;" class="edit">Edit</button>
                    </td>

                </tr>
            @endforeach


        </tbody>
    </table>



</x-dash>
