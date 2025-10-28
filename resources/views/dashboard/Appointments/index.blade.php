<x-dash>
    <p class="h1">Appointments</p>

    <a class="mainlinks" href="{{ route('appointments.add') }}">
        <i class="fa-solid fa-plus"></i> Add New Appointment
    </a>

    <p class="h2">All Appointments ({{$appointments->count() }})</p>

    @if (session('success'))
        <p class="alert-success">{{ session('success') }}</p>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Patient</th>
                <th>Doctor</th>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>
                <th>Notes</th>
                <th class="actions">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->user->name ?? 'Unknown' }}</td>
                    <td>{{ $appointment->doctor->name ?? 'Unknown' }}</td>
                    <td>{{ $appointment->appointment_date }}</td>
                    <td>{{ $appointment->appointment_time ?? '-' }}</td>
                    <td>
                        <span
                            style="
                                padding: 4px 8px;
                                border-radius: 6px;
                                background-color:
                                    {{ $appointment->status === 'confirmed' ? '#16a34a' :
                                       ($appointment->status === 'pending' ? '#f59e0b' :
                                       ($appointment->status === 'cancelled' ? '#dc2626' : '#3b82f6')) }};
                                color: white;
                                font-size: 0.85rem;
                            ">
                            {{ ucfirst($appointment->status) }}
                        </span>
                    </td>
                    <td>{{ Str::limit($appointment->notes, 30) ?? '-' }}</td>

                    <td class="actions">
                        <form
                            action="{{ route('appointments.destroy', $appointment->id) }}"
                            method="POST"
                            style="display:inline;"
                            onsubmit="return confirm('Are you sure you want to delete this appointment?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete">Delete</button>
                        </form>

                        <a class="edit" href="{{ route('appointments.edit', $appointment->id) }}">Edit</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" style="text-align:center;">No appointments found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</x-dash>
