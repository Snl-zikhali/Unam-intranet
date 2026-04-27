<?php
// $activePage should be set in each page file before including this
// e.g. $activePage = 'address-book';?>
@php
function navLink($page, $label, $icon, $activePage) {
    $class = ($activePage === $page) ? ' class="active"' : '';
    $url   = url($page);
    echo "<a href=\"{$url}\"{$class}>{$icon}{$label}</a>";
}
@endphp
?>

<!-- Mobile Navbar (shown on small screens) -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top d-lg-none">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
      <strong>UNAM</strong>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMobile" aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMobile">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ $activePage === 'address-book' ? 'active' : '' }}" href="{{ url('address-book') }}">Address Book</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $activePage === 'the-brand' ? 'active' : '' }}" href="{{ url('the-brand') }}">The Brand</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $activePage === 'vacancies' ? 'active' : '' }}" href="{{ url('vacancies') }}">Vacancies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $activePage === 'statistics' ? 'active' : '' }}" href="{{ url('statistics') }}">Statistics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $activePage === 'forms' ? 'active' : '' }}" href="{{ url('forms') }}">Forms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $activePage === 'policies' ? 'active' : '' }}" href="{{ url('policies') }}">Policies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $activePage === 'calendar' ? 'active' : '' }}" href="{{ url('calendar') }}">Calendar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $activePage === 'links' ? 'active' : '' }}" href="{{ url('links') }}">Links</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $activePage === 'technology' ? 'active' : '' }}" href="{{ url('technology') }}">Technology</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Desktop Sidebar (hidden on small screens) -->
<aside class="d-none d-lg-block">
  <div class="logo-area">
    <img src="{{ asset('images/top_logo.jpg') }}" alt="UNAM Logo" class="logo-img">
  </div>  
  <nav>
    @php
    $icon_address_book = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="18" rx="2"/><path d="M4 6h16M4 10h16M4 14h8"/></svg>';
    $icon_brand        = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>';
    $icon_vacancies    = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 3H8l-2 4h12z"/></svg>';
    $icon_statistics   = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 20V10M12 20V4M6 20v-6"/></svg>';
    $icon_forms        = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16h16V8z"/><polyline points="14 2 14 8 20 8"/><line x1="9" y1="13" x2="15" y2="13"/><line x1="9" y1="17" x2="15" y2="17"/></svg>';
    $icon_policies     = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>';
    $icon_calendar     = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>';
    $icon_links        = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>';
    $icon_technology   = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>';

    navLink('address-book', 'Address Book', $icon_address_book, $activePage);
    navLink('the-brand',    'The Brand',    $icon_brand,        $activePage);
    echo '<div class="nav-div"></div>';
    navLink('vacancies',    'Vacancies',       $icon_vacancies,  $activePage);
    navLink('statistics',   'Statistics',      $icon_statistics, $activePage);
    navLink('forms',        'Forms &amp; Templates', $icon_forms, $activePage);
    echo '<div class="nav-div"></div>';
    navLink('policies',     'Policies &amp; Training', $icon_policies, $activePage);
    navLink('calendar',     'Calendar',        $icon_calendar,   $activePage);
    navLink('links',        'Links',           $icon_links,      $activePage);
    navLink('technology',   'Technology',      $icon_technology, $activePage);
    @endphp
  </nav>
  <div class="sidebar-footer"><div class="tagline">Open Your Mind</div></div>
</aside>

<style>
/* Mobile Navbar Styling */
.navbar {
  background-color: #222 !important;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.navbar-brand {
  font-size: 1.3rem;
  font-weight: 700;
  color: #ee3124 !important;
}

.nav-link {
  color: #ccc !important;
  font-size: 0.95rem;
  transition: color 0.3s ease;
  padding: 0.5rem 0 !important;
  border-bottom: 1px solid rgba(238, 49, 36, 0.2);
}

.nav-link:hover,
.nav-link.active {
  color: #ee3124 !important;
  font-weight: 600;
}

.navbar-toggler {
  border-color: #ee3124;
}

.navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='%23ee3124' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

/* Ensure sidebar stays on desktop */
@media (min-width: 992px) {
  aside {
    display: block !important;
  }
}
</style>