<?php $activePage = 'address-book'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Address Book – UNAM Intranet</title>
  <?php include 'includes/head.php'; ?>
</head>
<body>

<?php include 'includes/sidebar.php'; ?>

<main>
  <div class="page-header">
    <div class="breadcrumb">Home &rsaquo; <span>Address Book</span></div>
    <h1 class="page-title">Address <em>Book</em></h1>
  </div>

  <div class="card">
    <div class="sec-label"><div class="bar"></div><h2>Find a Colleague</h2></div>
    <p style="font-size:14px;color:var(--text-muted);line-height:1.65;margin-bottom:20px;">
      Search for staff contact details by name, surname, or department across all UNAM campuses.
    </p>
    <div class="search-form sf">
      <div class="srow">
        <div class="ig"><label>First Name</label><input type="text" id="sfn" placeholder="e.g. John"></div>
        <div class="ig"><label>Surname</label><input type="text" id="ssn" placeholder="e.g. Shilongo"></div>
      </div>
      <div class="ig">
        <label>Department / Faculty</label>
        <input type="text" id="sdept" placeholder="e.g. Faculty of Science, Human Capital…">
      </div>
      <button class="btn-p" onclick="doSearch()">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
        Search
      </button>
      <p class="stip">Tip: Search by <span>surname</span> or <span>department name</span> for best results.</p>
    </div>
  </div>

  <div id="res-area" style="display:none;">
    <div class="card">
      <div class="sec-label"><div class="bar"></div><h2>Results</h2></div>
      <div id="res-content"></div>
    </div>
  </div>

  <div class="card">
    <div class="sec-label"><div class="bar"></div><h2>Quick Contacts</h2></div>
    <div class="dlist">
      <div class="drow">
        <div class="drow-l">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.58 3.38 2 2 0 0 1 3.55 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.54a16 16 0 0 0 6 6l.86-.86a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.45 16z"/></svg>
          CEIRD – Corporate Engagement &amp; International Relations
        </div>
        <span style="font-size:13px;font-weight:600;color:var(--red-dark);">206 4929 / 206 3372</span>
      </div>
      <div class="drow">
        <div class="drow-l">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.58 3.38 2 2 0 0 1 3.55 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.54a16 16 0 0 0 6 6l.86-.86a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.45 16z"/></svg>
          ICT Helpdesk – Technical Support
        </div>
        <span style="font-size:13px;font-weight:600;color:var(--red-dark);">206 3041</span>
      </div>
      <div class="drow">
        <div class="drow-l">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.58 3.38 2 2 0 0 1 3.55 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.54a16 16 0 0 0 6 6l.86-.86a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.45 16z"/></svg>
          Human Capital – HR Enquiries
        </div>
        <span style="font-size:13px;font-weight:600;color:var(--red-dark);">206 3100</span>
      </div>
    </div>
  </div>
</main>

<?php include 'includes/scripts.php'; ?>
<script>
function doSearch() {
  const fn   = document.getElementById('sfn').value.trim();
  const sn   = document.getElementById('ssn').value.trim();
  const dept = document.getElementById('sdept').value.trim();
  const area = document.getElementById('res-area');
  const content = document.getElementById('res-content');
  area.style.display = 'block';
  if (!fn && !sn && !dept) {
    content.innerHTML = '<div class="empty-state"><svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg><p>Please enter a name or department to search.</p></div>';
  } else {
    const q = [fn, sn, dept].filter(Boolean).join(' / ');
    content.innerHTML = '<div class="empty-state"><svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg><p>Searching for <strong>"' + q + '"</strong>&hellip;<br><span style="font-size:12px;color:#aaa;margin-top:4px;display:block;">Connect to the staff directory API to display live results.</span></p></div>';
  }
}
</script>
</body>
</html>
