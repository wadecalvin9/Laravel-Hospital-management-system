<x-main>
  <div class="container">
    <div class="sidebar">
      <div class="logo">Dashboard</div>

      <a class="sidelinks {{ request()->is('dash') ? 'active' : '' }}" href="/dash">
        <i class="fa-solid fa-chart-line"></i> Analytics
      </a>

      <a class="sidelinks {{ request()->is('patients') ? 'active' : '' }}" href="/patients">
        <i class="fa-solid fa-bed-pulse"></i> Patients
      </a>

      <a class="sidelinks {{ request()->is('doctors') ? 'active' : '' }}" href="/doctors">
        <i class="fa-solid fa-user-doctor"></i> Doctors
      </a>

      <a class="sidelinks {{ request()->is('appointments') ? 'active' : '' }}" href="/appointments">
        <i class="fa-solid fa-calendar-check"></i> Appointments
      </a>

      <a class="sidelinks {{ request()->is('revenue') ? 'active' : '' }}" href="/revenue">
        <i class="fa-solid fa-money-bill-trend-up"></i> Revenue
      </a>
    </div>

    <div class="main">{{ $slot }}</div>
  </div>
</x-main>
