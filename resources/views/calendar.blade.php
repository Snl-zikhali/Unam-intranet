@php $activePage = 'calendar'; @endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Calendar – UNAM Intranet</title>
  @include('includes.head')
</head>
<body>

@include('includes.sidebar')

<main>
  <div class="page-header">
    <div class="breadcrumb">Home &rsaquo; <span>Calendar</span></div>
    <h1 class="page-title">Academic <em>Calendar</em> 2026</h1>
  </div>

  <button class="cal-cta">
    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
    Download 2026 Full Calendar (PDF)
  </button>

  <div class="card">
    <div class="sec-label"><div class="bar"></div><h2>Core Dates 2026</h2></div>

    <div class="sem-title">Semester 1</div>
    <div class="cal-entries">
      <?php
      $sem1 = [
        ['08 January',      'University opens',                                    'inf', 'All Campuses'],
        ['20 January',      'Academic staff resume office duties',                 '',    ''],
        ['26 January',      'Semester 1 lectures commence',                        '',    ''],
        ['04 March',        '"We Care for UNAM" Day',                              'imp', 'Mandatory'],
        ['21 March',        'Namibia Independence Day',                            'brk', 'Public Holiday'],
        ['03 – 06 April',   'First Semester Break',                                'brk', 'Break'],
        ['07 April',        'Lectures resume after First Semester Break',           '',    ''],
        ['18 April',        'Good Friday',                                          'brk', 'Public Holiday'],
        ['10 July',         'End of First Semester',                               'imp', 'Semester End'],
        ['13 – 31 July',    'Mid-Year Vacation',                                   'brk', 'Break'],
      ];
      foreach ($sem1 as $row):
        $tag = $row[2] ? "<span class=\"ctag {$row[2]}\">{$row[3]}</span>" : '';
      ?>
      <div class="cal-row">
        <div class="cal-date"><?= $row[0] ?></div>
        <div class="cal-event"><?= $row[1] ?><?= $tag ?></div>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="sem-title">Semester 2</div>
    <div class="cal-entries">
      <?php
      $sem2 = [
        ['03 August',           'Semester 2 lectures commence',                     '',    ''],
        ['26 August',           'Heroes\' Day',                                     'brk', 'Public Holiday'],
        ['10 September',        '"We Care for UNAM" Day',                           'imp', 'Mandatory'],
        ['19 – 23 September',   'Second Semester Break',                            'brk', 'Break'],
        ['24 September',        'Lectures resume after Second Semester Break',       '',    ''],
        ['28 November',         'End of Academic Year',                             'imp', 'Semester End'],
        ['December',            'Annual Graduation Ceremonies',                     'inf', 'TBC'],
      ];
      foreach ($sem2 as $row):
        $tag = $row[2] ? "<span class=\"ctag {$row[2]}\">{$row[3]}</span>" : '';
      ?>
      <div class="cal-row">
        <div class="cal-date"><?= $row[0] ?></div>
        <div class="cal-event"><?= $row[1] ?><?= $tag ?></div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</main>

@include('includes.scripts')
</body>
</html>
