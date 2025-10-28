<x-dash>
    <div class="main-content">
        <h1 class="page-title">Analytics Dashboard</h1>

        <!-- Summary Cards -->
        <div class="stats-grid">
            <div class="stat-card">
                <h3>Total Patients</h3>
                <p class="stat-number">{{ $patientsCount }}</p>
            </div>

            <div class="stat-card">
                <h3>Total Doctors</h3>
                <p class="stat-number">{{ $doctorsCount }}</p>
            </div>

            <div class="stat-card">
                <h3>Total Appointments</h3>
                <p class="stat-number">{{ $appointmentsCount }}</p>
            </div>
        </div>

        <!-- Appointment Status Chart -->
        <div class="chart-box" style="max-width: 400px; margin: 30px auto;">
            <h3 class="section-title" style="text-align: center;">Appointments by Status</h3>
            <div style="position: relative; width: 100%; height: 300px;">
                <canvas id="statusChart"></canvas>
            </div>
        </div>

        <!-- Recent Appointments Table -->
        <div class="table-box">
            <h3 class="section-title">Recent Appointments</h3>
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Patient</th>
                        <th>Doctor</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recentAppointments as $appt)
                        <tr>
                            <td>{{ $appt->user->name }}</td>
                            <td>{{ $appt->Doctor->name }}</td>
                            <td>{{ $appt->appointment_date }}</td>
                            <td class="status {{ strtolower($appt->status) }}">
                                {{ ucfirst($appt->status) }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('statusChart').getContext('2d');
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Pending', 'Confirmed', 'Completed', 'Cancelled'],
                datasets: [{
                    data: [
                        {{ $statusCounts['pending'] ?? 0 }},
                        {{ $statusCounts['confirmed'] ?? 0 }},
                        {{ $statusCounts['completed'] ?? 0 }},
                        {{ $statusCounts['cancelled'] ?? 0 }}
                    ],
                    backgroundColor: ['#F59E0B', '#10B981', '#3B82F6', '#EF4444'],
                }]
            },
            options: {
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });
    </script>
</x-dash>
