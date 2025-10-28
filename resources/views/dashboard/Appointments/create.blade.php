<x-dash>
    <p class="h1">Create Appointment</p>

    <form action="{{ route('appointments.store') }}" method="POST">
        @csrf

        <label class="frmlabel" for="patient">Select Patient</label>
        <div>
            <select class="frminput" name="user_id" required>
                <option value="">-- Select Patient --</option>
                @foreach ($patients as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                @endforeach
            </select>
        </div>

        <label class="frmlabel" for="doctor">Select Doctor</label>
        <div>
            <select class="frminput" name="doctor_id" required>
                <option value="">-- Select Doctor --</option>
                @foreach ($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->name }} ({{ $doctor->specialization }})</option>
                @endforeach
            </select>
        </div>

        <label class="frmlabel" for="appointment_date">Appointment Date</label>
        <div>
            <input class="frminput" type="date" name="appointment_date" required>
        </div>

        <label class="frmlabel" for="appointment_time">Appointment Time</label>
        <div>
            <input class="frminput" type="time" name="appointment_time">
        </div>

        <label class="frmlabel" for="status">Status</label>
        <div>
            <select class="frminput" name="status">
                <option value="pending">Pending</option>
                <option value="confirmed">Confirmed</option>
                <option value="completed">Completed</option>
                <option value="cancelled">Cancelled</option>
            </select>
        </div>

        <label class="frmlabel" for="notes">Notes</label>
        <div>
            <textarea class="frminput" name="notes" rows="3" placeholder="Additional notes (optional)"></textarea>
        </div>

        <button type="submit" class="frmbtn">Submit</button>
    </form>
</x-dash>
