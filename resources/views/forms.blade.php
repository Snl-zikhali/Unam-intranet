@php $activePage = 'forms'; @endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Forms &amp; Templates – UNAM Intranet</title>
 @include('includes.head')
</head>
<body>

@include('includes.sidebar')

<main>
  <div class="page-header">
    <div class="breadcrumb">Home &rsaquo; <span>Forms &amp; Templates</span></div>
    <h1 class="page-title">Forms &amp; <em>Templates</em></h1>
  </div>

  <div class="card" style="margin-bottom:18px; background-color:white">
    <p style="font-size:14px;color:var(--text-muted);line-height:1.7;">
      Download official UNAM forms and templates organised by department. All documents are current for the 2026 academic year.
    </p>
  </div>

  <div class="fgrid" >

    <?php
    $categories = [
      [
        'icon' => '<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>',
        'title' => 'Core Dates 2026',
        'files' => ['Core Dates 2026 – All Campuses', 'Academic Calendar 2026 Summary'],
      ],
      [
        'icon' => '<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>',
        'title' => 'Finance',
        'files' => ['Petty Cash Claim Form', 'Travel &amp; Subsistence Claim', 'Purchase Requisition Form', 'Budget Request Template'],
      ],
      [
        'icon' => '<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>',
        'title' => 'Corporate Engagement &amp; IR',
        'files' => ['Event Request Form', 'Media &amp; Photography Request', 'MOU Template'],
      ],
      [
        'icon' => '<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>',
        'title' => 'Human Capital',
        'files' => ['Leave Application Form', 'Performance Appraisal Form', 'Training Nomination Form'],
      ],
      [
        'icon' => '<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>',
        'title' => 'Academic Affairs',
        'files' => ['Module Change Request', 'Programme Approval Form', 'Senate Report Template'],
      ],
      [
        'icon' => '<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>',
        'title' => 'Estate Services',
        'files' => ['Maintenance Request Form', 'Venue Booking Form', 'Vehicle Request Form'],
      ],
      [
        'icon' => '<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>',
        'title' => 'ICT Services',
        'files' => ['ICT Access Request Form', 'System Change Request', 'IT Equipment Request'],
      ],
      [
        'icon' => '<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>',
        'title' => 'UNAM Press',
        'files' => ['Manuscript Submission Guidelines', 'Printing Request Form'],
      ],
    ];

    $file_icon = '<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16h16V8z"/></svg>';
    $chev_icon = '<svg class="fcchev" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>';

    foreach ($categories as $cat):
    ?>
    <div class="fcat" style="background-color:white" onclick="tfc(this)">
      <div class="fch">
        <div class="fct">
          <div class="fci"><?= $cat['icon'] ?></div>
          <?= $cat['title'] ?>
        </div>
        <?= $chev_icon ?>
      </div>
      <div class="fcb" style="background-color:white"><div class="fcb-in">
        <?php foreach ($cat['files'] as $file): ?>
          <div class="ff"><?= $file_icon ?><?= $file ?></div>
        <?php endforeach; ?>
      </div></div>
    </div>
    <?php endforeach; ?>

  </div><!-- /.fgrid -->
</main>
''
@include('includes.scripts')
</body>
</html>
