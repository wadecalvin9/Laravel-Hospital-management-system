<x-dash>
    <p class="h1">Edit Appointment</p>

    <form action="{{ route('appointments.update', $appointment->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Patient -->
        <label class="frmlabel" for="user_id">Patient</label>
        <div>
            <select name="user_id" class="frminput" required>
                @foreach ($patients as $patient)
                    <option value="{{ $patient->id }}" {{ $appointment->user_id == $patient->id ? 'selected' : '' }}>
                        {{ $patient->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Doctor -->
        <label class="frmlabel" for="doctor_id">Doctor</label>
        <div>
            <select name="doctor_id" class="frminput" required>
                @foreach ($doctors as $doctor)
                    <option value="{{ $doctor->id }}" {{ $appointment->doctor_id == $doctor->id ? 'selected' : '' }}>
                        {{ $doctor->name }} - {{ $doctor->specialization }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Date -->
        <label class="frmlabel" for="appointment_date">Appointment Date</label>
        <div>
            <input type="date" class="frminput" name="appointment_date" value="{{ $appointment->appointment_date }}" required>
        </div>

        <!-- Time -->
        <label class="frmlabel" for="appointment_time">Appointment Time</label>
        <div>
            <input type="time" class="frminput" name="appointment_time" value="{{ $appointment->appointment_time }}">
        </div>

        <!-- Status -->
        <label class="frmlabel" for="status">Status</label>
        <div>
            <select name="status" class="frminput">
                <option value="pending" {{ $appointment->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="confirmed" {{ $appointment->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                <option value="completed" {{ $appointment->status == 'completed' ? 'selected' : '' }}>Completed</option>
                <option value="cancelled" {{ $appointment->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
            </select>
        </div>

        <!-- Notes -->
        <label class="frmlabel" for="notes">Notes</label>
        <div>
            <textarea class="frminput" name="notes" rows="3" placeholder="Notes about the appointment...">{{ $appointment->notes }}</textarea>
        </div>

        <button class="frmbtn">Update Appointment</button>
    </form>
</x-dash>
