<?php $activePage = 'links'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Links – UNAM Intranet</title>
  <?php include 'includes/head.php'; ?>
</head>
<body>

<?php include 'includes/sidebar.php'; ?>

<main>
  <div class="page-header">
    <div class="breadcrumb">Home &rsaquo; <span>Links</span></div>
    <h1 class="page-title">Useful <em>Links</em></h1>
  </div>

  <div class="card">
    <div class="sec-label"><div class="bar"></div><h2>External Resources</h2></div>
    <div class="dlist">

      <?php
      $link_icon = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>';

      $links = [
        ['UNAM Public Website',                    'www.unam.edu.na',      'https://www.unam.edu.na'],
        ['UNAM e-Learning Portal (Moodle)',         'elearning.unam.edu.na','https://elearning.unam.edu.na'],
        ['UNAM Library Services',                  'library.unam.edu.na',  'https://library.unam.edu.na'],
        ['Namibia Qualifications Authority (NQA)', 'nqa.org.na',           'https://www.nqa.org.na'],
        ['Ministry of Higher Education &amp; Innovation', 'mheti.gov.na',  'https://www.mheti.gov.na'],
      ];

      foreach ($links as $l): ?>
      <a href="<?= $l[2] ?>" target="_blank" rel="noopener noreferrer" style="text-decoration:none;">
        <div class="drow">
          <div class="drow-l"><?= $link_icon ?><?= $l[0] ?></div>
          <span style="font-size:12px;color:var(--text-muted);"><?= $l[1] ?></span>
        </div>
      </a>
      <?php endforeach; ?>

    </div>
  </div>
</main>

<?php include 'includes/scripts.php'; ?>
</body>
</html>
