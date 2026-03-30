@php $activePage = 'the-brand'; @endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Brand – UNAM Intranet</title>
  @include('includes.head')
</head>
<body>

@include('includes.sidebar')

<main>
  <div class="page-header">
    <div class="breadcrumb">Home &rsaquo; <span>The Brand</span></div>
    <h1 class="page-title">Brand <em>Guidance</em></h1>
  </div>

  <div class="card">
    <div class="sec-label"><div class="bar"></div><h2>Brand Guidance</h2></div>
    <ul style="list-style:none;display:flex;flex-direction:column;gap:12px;margin-bottom:22px;">
      <li style="display:flex;align-items:flex-start;gap:12px;font-size:14.5px;line-height:1.65;">
        <div class="chk-circle">
          <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
        </div>
        Kindly consult <a href="#" style="color:var(--red);font-weight:600;text-decoration:none;">the Style Guide</a> for detailed information on brand usage — coat of arms, logos, colours, typography, and photography.
      </li>
      <li style="display:flex;align-items:flex-start;gap:12px;font-size:14.5px;line-height:1.65;">
        <div class="chk-circle">
          <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
        </div>
        Logos and brand assets can be requested from the Design Section by calling the numbers below.
      </li>
    </ul>
    <div class="callout">
      <div class="dept-tag">CEIRD</div>
      <p>All design-related matters must be handled in consultation with <strong style="color:var(--red-dark);">Corporate Engagement &amp; International Relations (CEIRD)</strong>.</p>
      <div style="display:flex;gap:12px;margin-top:10px;">
        <div class="chip">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.58 3.38 2 2 0 0 1 3.55 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.54a16 16 0 0 0 6 6l.86-.86a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.45 16z"/></svg>
          206 4929
        </div>
        <div class="chip">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.58 3.38 2 2 0 0 1 3.55 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.54a16 16 0 0 0 6 6l.86-.86a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.45 16z"/></svg>
          206 3372
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="sec-label"><div class="bar"></div><h2>Staff &amp; Students</h2></div>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin-bottom:22px;">
      <div class="sc"><div class="snum">12</div><div class="slbl">Campuses</div></div>
      <div class="sc"><div class="snum">4</div><div class="slbl">Faculties</div></div>
      <div class="sc"><div class="snum">16</div><div class="slbl">Schools</div></div>
    </div>
    <p style="font-size:14.5px;line-height:1.8;color:#333;">
      This Style Guide provides staff, students, and external service providers — including print companies, sign companies, media houses, and third-party designers — with clear guidelines for correct application of UNAM's visual identity.
    </p>
    <div class="highlight">
      A brand is much more than its visual elements. It encompasses the perceptions and verbal communication that flow across the entire university community, spanning all platforms and every interaction with stakeholders.
    </div>
  </div>
</main>

@include('includes.scripts')
</body>
</html>
