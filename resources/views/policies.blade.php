@php $activePage = 'policies'; @endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Policies &amp; Training – UNAM Intranet</title>
  @include('includes.head')
</head>
<body>

@include('includes.sidebar')

<main>
  <div class="page-header">
    <div class="breadcrumb">Home &rsaquo; <span>Policies &amp; Training</span></div>
    <h1 class="page-title">Policies &amp; <em>Procedures</em></h1>
  </div>

  <div class="card" style="margin-bottom:18px;">
    <p style="font-size:14px;color:var(--text-muted);line-height:1.7;">
      All UNAM policies are reviewed regularly and approved by Council. Staff must familiarise themselves with policies relevant to their roles. Contact the relevant office for queries.
    </p>
  </div>

  <?php
  $doc_icon = '<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16h16V8z"/></svg>';
  $chev     = '<svg class="achev" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>';

  $sections = [
    [
      'icon'  => '<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>',
      'title' => 'Academic Policies',
      'sub'   => 'Teaching, learning &amp; assessment',
      'count' => 6,
      'docs'  => ['Assessment and Moderation Policy','Academic Integrity &amp; Plagiarism Policy','Recognition of Prior Learning Policy','Postgraduate Studies Policy','Teaching &amp; Learning Strategy 2022–2026','E-Learning Policy'],
    ],
    [
      'icon'  => '<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 3H8"/></svg>',
      'title' => 'Office of the Registrar – Assessment &amp; Certification',
      'sub'   => 'Training &amp; certification procedures',
      'count' => 4,
      'docs'  => ['Certification &amp; Transcript Policy','Examination Rules &amp; Procedures','Special Examination Policy','Student Appeals Procedure'],
    ],
    [
      'icon'  => '<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
      'title' => 'Audit &amp; Risk Policies',
      'sub'   => 'Internal controls &amp; risk management',
      'count' => 3,
      'docs'  => ['Internal Audit Policy','Enterprise Risk Management Framework','Fraud Prevention Policy'],
    ],
    [
      'icon'  => '<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>',
      'title' => 'Corporate Engagement &amp; International Relations',
      'sub'   => 'Partnerships, MoUs &amp; events',
      'count' => 4,
      'docs'  => ['Partnerships &amp; MoU Policy','Events Management Policy','Media &amp; Communications Policy','Social Media Policy'],
    ],
    [
      'icon'  => '<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>',
      'title' => 'Estates &amp; Infrastructure Planning',
      'sub'   => 'Facilities, space &amp; safety',
      'count' => 3,
      'docs'  => ['Space Management Policy','Green Campus &amp; Sustainability Policy','Fire Safety &amp; Emergency Procedures'],
    ],
    [
      'icon'  => '<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>',
      'title' => 'Finance Policies',
      'sub'   => 'Financial management &amp; procurement',
      'count' => 5,
      'docs'  => ['Financial Management Policy','Procurement &amp; Supply Chain Policy','Travel &amp; Subsistence Policy','Asset Management Policy','Investment Policy'],
    ],
    [
      'icon'  => '<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>',
      'title' => 'Human Capital Policies',
      'sub'   => 'Employment, conduct &amp; welfare',
      'count' => 7,
      'docs'  => ['Recruitment &amp; Selection Policy','Staff Conduct &amp; Discipline Policy','Leave Policy','Performance Management Policy','Occupational Health &amp; Safety Policy','Anti-Harassment &amp; Non-Discrimination Policy','Training &amp; Development Policy'],
    ],
    [
      'icon'  => '<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8h1a4 4 0 0 1 0 8h-1"/><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>',
      'title' => 'Legal, Governance &amp; Compliance',
      'sub'   => 'Statutes, governance &amp; ethics',
      'count' => 4,
      'docs'  => ['UNAM Act &amp; Statutes','Council Charter','Code of Ethics','Conflict of Interest Policy'],
    ],
  ];
  ?>

  <div class="acc">
    <?php foreach ($sections as $s): ?>
    <div class="ai" onclick="ta(this)">
      <div class="ah">
        <div class="ah-l">
          <div class="aic"><?= $s['icon'] ?></div>
          <div>
            <div class="at"><?= $s['title'] ?></div>
            <div class="asub"><?= $s['sub'] ?></div>
          </div>
        </div>
        <div style="display:flex;align-items:center;gap:10px;">
          <div class="pcnt"><?= $s['count'] ?></div>
          <?= $chev ?>
        </div>
      </div>
      <div class="ab"><div class="ab-in">
        <ul>
          <?php foreach ($s['docs'] as $doc): ?>
            <li><?= $doc_icon ?><?= $doc ?></li>
          <?php endforeach; ?>
        </ul>
      </div></div>
    </div>
    <?php endforeach; ?>
  </div>
</main>

@include('includes.scripts')
</body>
</html>
