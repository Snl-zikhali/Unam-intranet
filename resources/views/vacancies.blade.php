@php $activePage = 'vacancies'; @endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vacancies – UNAM Intranet</title>
  @include('includes.head')
</head>
<body>

@include('includes.sidebar')

<main>
  <div class="page-header">
    <div class="breadcrumb">Home &rsaquo; <span>Vacancies</span></div>
    <h1 class="page-title">Internal <em>Vacancies</em></h1>
  </div>

  <div class="card" style="margin-bottom:18px; background-color: white;">
    <p style="font-size:14px;color:var(--text-muted);line-height:1.7;">
      Internal vacancies are available exclusively to current UNAM staff. Expand a listing to view details and download job descriptions.
      For technical inquiries contact <strong style="color:var(--red-dark);">206 3041</strong>.
    </p>
  </div>

  <div class="acc">

    <!-- Vacancy 1 -->
    <div class="ai" style="background-color:white" onclick="ta(this)">
      <div class="ah">
        <div class="ah-l">
          <div class="aic">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
          </div>
          <div>
            <div class="at">Main Campus – Faculty of Commerce, Management &amp; Law <span class="vbadge">2 Posts</span></div>
            <div class="asub">Namibia Business School</div>
          </div>
        </div>
        <svg class="achev" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
      </div>
      <div class="ab"><div class="ab-in">
        <div class="vmeta">
          <div class="mtag"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>Closing: 28 Mar 2026</div>
          <div class="mtag">Main Campus, Windhoek</div>
          <div class="mtag">Permanent</div>
        </div>
        <ul style="margin-top:14px;">
          <li><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16h16V8z"/></svg>Lecturer – Business Management (NBS-BM-2026)</li>
          <li><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16h16V8z"/></svg>Senior Lecturer – Marketing &amp; Strategy (NBS-ML-2026)</li>
        </ul>
        <button class="abtn">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
          Download Job Descriptions
        </button>
      </div></div>
    </div>

    <!-- Vacancy 2 -->
    <div class="ai" style="background-color:white" onclick="ta(this)">
      <div class="ah">
        <div class="ah-l">
          <div class="aic">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
          </div>
          <div>
            <div class="at">Office of the PVC: RID Centre for Research Service <span class="vbadge">1 Post</span></div>
            <div class="asub">Office of the Director</div>
          </div>
        </div>
        <svg class="achev" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
      </div>
      <div class="ab"><div class="ab-in">
        <div class="vmeta">
          <div class="mtag">Closing: 04 Apr 2026</div>
          <div class="mtag">Main Campus</div>
          <div class="mtag">Fixed Term</div>
        </div>
        <ul style="margin-top:14px;">
          <li><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16h16V8z"/></svg>Research Support Officer – RID Centre (RID-RSO-2026)</li>
        </ul>
        <div class="tcon">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
          For technical enquiries: ICT Helpdesk <strong style="color:var(--red-dark);margin-left:4px;">206 3041</strong>
        </div>
        <button class="abtn">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
          Download Job Description
        </button>
      </div></div>
    </div>

    <!-- Vacancy 3 -->
    <div class="ai" style="background-color:white" onclick="ta(this)">
      <div class="ah">
        <div class="ah-l">
          <div class="aic">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <div>
            <div class="at">Human Capital Division <span class="vbadge">3 Posts</span></div>
            <div class="asub">HR &amp; Administration</div>
          </div>
        </div>
        <svg class="achev" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
      </div>
      <div class="ab"><div class="ab-in">
        <div class="vmeta">
          <div class="mtag">Closing: 31 Mar 2026</div>
          <div class="mtag">Multiple Campuses</div>
        </div>
        <ul style="margin-top:14px;">
          <li><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16h16V8z"/></svg>HR Officer – Recruitment &amp; Selection</li>
          <li><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16h16V8z"/></svg>HR Officer – Employee Relations</li>
          <li><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16h16V8z"/></svg>Administrative Assistant – HC Division</li>
        </ul>
        <button class="abtn">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
          Download Job Descriptions
        </button>
      </div></div>
    </div>

  </div>
</main>

@include('includes.scripts')
</body>
</html>
