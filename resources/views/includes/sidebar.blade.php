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
<aside>
  <div class="logo-area">
 <img src="{{ asset('images/top_logo.jpg') }}" alt="UNAM Logo" class="logo-img">
</div>  
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
