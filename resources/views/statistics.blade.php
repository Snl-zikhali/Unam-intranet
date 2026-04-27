@php $activePage = 'statistics';@endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Statistics – UNAM Intranet</title>
@include('includes.head')
</head>
<style>.card {
    background: rgba(255, 255, 255, 0.6); /* Semi-transparent white */
    backdrop-filter: blur(15px);
    -webkit-backdrop-filter: blur(12px);
    
    /* White border to help it stand out from the gray background */
    border: 1px solid rgba(255, 255, 255, 0.7); 
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
}

.ai {
    background: rgba(255, 255, 255, 0.6); /* Semi-transparent white */
    backdrop-filter: blur(15px);
    -webkit-backdrop-filter: blur(12px);
    
    /* White border to help it stand out from the gray background */
    border: 1px solid rgba(255, 255, 255, 0.7); 
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
}
</style>
<body>

@include('includes.sidebar')

<main>
  <div class="page-header">
    <div class="breadcrumb">Home &rsaquo; <span>Statistics</span></div>
    <h1 class="page-title">Institutional <em>Statistics</em></h1>
  </div>

  <div class="card" >
    <div class="sec-label"><div class="bar"></div><h2>At a Glance – 2025</h2></div>
    <div class="sgrid">
      <div class="sc"><div class="snum">27,400+</div><div class="slbl">Enrolled Students</div></div>
      <div class="sc"><div class="snum">2,100+</div><div class="slbl">Academic Staff</div></div>
      <div class="sc"><div class="snum">12</div><div class="slbl">Campuses</div></div>
      <div class="sc"><div class="snum">4</div><div class="slbl">Faculties</div></div>
    </div>
  </div>

  <div class="acc">

    <!-- Enrolment -->
    <div class="ai" onclick="ta(this)">
      <div class="ah">
        <div class="ah-l">
          <div class="aic"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 20V10M12 20V4M6 20v-6"/></svg></div>
          <div><div class="at">Statistics</div><div class="asub">Enrolment, graduation &amp; student data</div></div>
        </div>
        <svg class="achev" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
      </div>
      <div class="ab"><div class="ab-in"><div class="dlist">
        <div class="drow"><div class="drow-l"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16h16V8z"/></svg>Data and Statistics Requests</div><span class="dtag">PDF</span></div>
        <div class="drow"><div class="drow-l"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16h16V8z"/></svg>Five Year Enrolment Statistics 2019-2023</div><span class="dtag">PDF</span></div>
        <div class="drow"><div class="drow-l"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16h16V8z"/></svg>Five Year Graduation Statistics 2018-2022</div><span class="dtag">PDF</span></div>
        <div class="drow"><div class="drow-l"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16h16V8z"/></svg>Unam Statistics summary 1992-2023</div><span class="dtag">PDF</span></div>
      

      </div></div></div>
    </div>

    <!-- IR -->
    <div class="ai" onclick="ta(this)">
      <div class="ah">
        <div class="ah-l">
          <div class="aic"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg></div>
          <div><div class="at">Institutional Research (IR)</div><div class="asub">Research output &amp; planning</div></div>
        </div>
        <svg class="achev" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
      </div>
      <div class="ab"><div class="ab-in">
        <p style="margin-bottom:12px;">IR supports evidence-based planning and decision-making across all UNAM campuses.</p>
        <div class="dlist">
          <div class="drow"><div class="drow-l"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16h16V8z"/></svg>UNAM RREGISTRATION 2023</div><span class="dtag">PDF</span></div>
          <div class="drow"><div class="drow-l"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16h16V8z"/></svg>EXAMINATION STUDY REPORT 2022</div><span class="dtag">PDF</span></div>
          <div class="drow"><div class="drow-l"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16h16V8z"/></svg>GRADUATE EMPLOYABILITY REPORT</div><span class="dtag">PDF</span></div>
          <div class="drow"><div class="drow-l"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16h16V8z"/></svg>UNAM TRACER STUDY 2014-2018 </div><span class="dtag">PDF</span></div>
          <div class="drow"><div class="drow-l"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16h16V8z"/></svg>2023 STAKEHOLDER SATISFACTION REPORT</div><span class="dtag">PDF</span></div>
          <div class="drow"><div class="drow-l"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16h16V8z"/></svg>2024 GRADUATE EFFICIENCY STUDY</div><span class="dtag">PDF</span></div>
          <div class="drow"><div class="drow-l"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16h16V8z"/></svg>2025 GRADUATION EFFIENCY SURVEY REPORT</div><span class="dtag">PDF</span></div>
          <div class="drow"><div class="drow-l"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16h16V8z"/></svg>2025 UNAM REGISTATION STUDY</div><span class="dtag">PDF</span></div>
          <div class="drow"><div class="drow-l"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16h16V8z"/></svg>2024 EXAMINATION STUDY REPORT</div><span class="dtag">PDF</span></div>
          <div class="drow"><div class="drow-l"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16h16V8z"/></svg>UNAM TRACER STUDY</div><span class="dtag">PDF</span></div>

        </div>
      </div></div>
    </div>

    <!-- Performance -->
    <div class="ai"  onclick="ta(this)">
      <div class="ah">
        <div class="ah-l">
          <div class="aic"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
          <div><div class="at">Performance Reports</div><div class="asub">Annual reports &amp; strategic plan progress</div></div>
        </div>
        <svg class="achev" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
      </div>
      <div class="ab"><div class="ab-in"><div class="dlist">
        <div class="drow"><div class="drow-l"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16h16V8z"/></svg>
        <a href="#"
       target="#">ATTRITIONS 1992-2020</div><span class="dtag">PDF</span></div>

        <div class="drow"><div class="drow-l"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16h16V8z"/></svg>
        <a href="#"
       target="_blank" style="color:var(--red);font-weight:600;text-decoration:none;">COMPLETIONS 1992-2020</div><span class="dtag">PDF</span></div>

        <div class="drow"><div class="drow-l"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16h16V8z"/></svg>
        <a href="#"
       target="_blank" style="color:var(--red);font-weight:600;text-decoration:none;">GRADUATIONS 1992-2024</div><span class="dtag">PDF</span></div>

        <div class="drow"><div class="drow-l"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16h16V8z"/></svg>
        <a href="#"
       target="_blank" style="color:var(--red);font-weight:600;text-decoration:none;">PROGRESSIONS 1992-2024</div><span class="dtag">PDF</span></div>

        <div class="drow"><div class="drow-l"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16h16V8z"/></svg>
        <a href="#"
       target="_blank" style="color:var(--red);font-weight:600;text-decoration:none;">REPETITIONS 1992-2024</div><span class="dtag">PDF</span></div>
      </div></div></div>
    </div>
    
  </div><!-- /.acc -->
</main>

@include('includes.scripts')
</body>
</html>
