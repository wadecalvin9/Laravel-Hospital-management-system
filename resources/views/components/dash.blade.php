<x-main>
    <div class="container">
        <div class="sidebar">
            <div class="logo"><i class="fa-solid fa-gauge"></i><span> Dashboard</span> </div>

            <a class="sidelinks {{ request()->is('dash') ? 'active' : '' }}" href="/dash">
                <i class="fa-solid fa-chart-line"></i> <span>Analytics</span>
            </a>

            <a class="sidelinks {{ request()->is('patients') ? 'active' : '' }}" href="/patients">
                <i class="fa-solid fa-bed-pulse"></i> <span>Patients</span>
            </a>

            <a class="sidelinks {{ request()->is('doctors') ? 'active' : '' }}" href="/doctors">
                <i class="fa-solid fa-user-doctor"></i><span>Doctors</span>
            </a>

            <a class="sidelinks {{ request()->is('appointments') ? 'active' : '' }}" href="/appointments">
                <i class="fa-solid fa-calendar-check"></i> <span>Appointments</span>
            </a>

            <a class="sidelinks {{ request()->is('revenue') ? 'active' : '' }}" href="/revenue">
                <i class="fa-solid fa-money-bill-trend-up"></i> <span>Revenue</span>
            </a>
        </div>


        <div class="main">

            {{ $slot }}
        </div>
    </div>
</x-main>
