@php $activePage = 'technology'; @endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Technology – UNAM Intranet</title>
  <link rel="stylesheet" type="text/css" media="screen" href="css/app.css" />
  @include('includes.head')
  <style>
    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.6);
      justify-content: center;
      align-items: center;
      z-index: 1000;
    }

    .modal.form-modal {
      overflow-y: auto;
      padding: 20px;
    }

    .modal-content {
      background: white;
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
      max-width: 600px;
      width: 100%;
      margin: auto;
    }

    .modal-content h3 {
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 30px;
      color: #333;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 8px;
      font-weight: 500;
      color: #333;
      font-size: 14px;
    }

    input[type="text"],
    input[type="email"],
    select {
      width: 100%;
      padding: 12px;
      border: 1px solid #ddd;
      border-radius: 4px;
      font-size: 14px;
      transition: border-color 0.3s ease;
    }

    input[type="text"]:hover,
    input[type="email"]:hover,
    select:hover {
      border-color: #E53935;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    select:focus {
      outline: none;
      border-color: #E53935;
      box-shadow: 0 0 0 3px rgba(229, 57, 53, 0.1);
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #E53935;
      color: white;
      border: none;
      border-radius: 4px;
      font-size: 14px;
      font-weight: 600;
      cursor: pointer;
      transition: background-color 0.3s ease;
      margin-top: 20px;
    }

    button:hover {
      background-color: #C62828;
    }

    #personnelModal .modal-content {
      max-width: 500px;
    }
  </style>
</head>
<body>

@include('includes.sidebar')

<main>
  <div class="page-header">
    <div class="breadcrumb">Home &rsaquo; <span>Technology</span></div>
    <h1 class="page-title">TECHNOLOGY<em></em></e> <em>Services</em></h1>
  </div>

  <div class="card">
    <div class="sec-label"><div class="bar"></div><h2>ICT Self-Service &amp; Contacts</h2></div>
    <div class="dlist">

     
      <div class="drow">
        <div class="drow-l">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14M4.93 4.93a10 10 0 0 0 0 14.14"/></svg>
          ITS Access
        </div>
        <span style="font-size:12px;color:var(--red-dark);">
        <a href="/its-access" target="_blank" class="target-danger">Get Access</a></span>
      </div>
     
     
     


 



      <div class="drow">
        <div class="drow-l">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.58 3.38 2 2 0 0 1 3.55 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.54a16 16 0 0 0 6 6l.86-.86a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.45 16z"/></svg>
          Direct Line
        </div>
        <span style="font-size:12px;color:var(--red-dark);font-weight:600;">206 3041</span>
      </div>

      <div class="drow">
        <div class="drow-l">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          Get an Email
        </div>
        <span style="font-size:12px;color:var(--text-muted);">ict.support@unam.edu.na</span>
      </div>

      <div class="drow" style="cursor:pointer;">
        <div class="drow-l">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 2H3v16h5l3 3 3-3h5V2z"/></svg>
          Staff Microsoft 365 Portal
        </div>
        <span style="font-size:12px;color:var(--red);font-weight:600;">Login &rarr;</span>
      </div>

      <div class="drow">
        <div class="drow-l">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14M4.93 4.93a10 10 0 0 0 0 14.14"/></svg>
          UNAM WiFi – Staff Network
        </div>
        <span style="font-size:12px;color:var(--text-muted);">SSID: UNAM-STAFF</span>
      </div>

    </div>
  </div>
</main>

@include('includes.scripts')

<!-- SCRIPT (MUST BE AT BOTTOM) -->


</body>
</html>