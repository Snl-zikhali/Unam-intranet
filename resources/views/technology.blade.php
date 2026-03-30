@php $activePage = 'technology'; @endphp
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Technology – UNAM Intranet</title>
   <link rel="stylesheet" type="text/css" media="screen" href="css/app.css" />
  @include('includes.head')
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
      <!-- i added a modal in order for the form to pop-up on the same page when i click the link-->
      <div class="drow" id="openModal" style="cursor:pointer;">
  <div class="drow-l">
    ITS Access
  </div>
  <span style="font-size:12px;color:red;font-weight:600;">
    Get Access →
  </span>
</div>

<!-- MODAL -->
<div id="modal" style="
    display:none;
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(78, 78, 78, 0.6);
    justify-content:center;
    align-items:center;
">

  <div style="
      background:white;
      padding:20px;
      width:400px;
      max-height:90vh;
      overflow-y:auto;
      border-radius:8px;
      position:relative;
  ">

    <!-- Close Button -->
    <span id="closeModal" style="
        position:absolute;
        top:10px;
        right:15px;
        cursor:pointer;
        font-size:20px;
    ">&times;</span>

    <h3>Request Access</h3>

    <form method="POST" action="#">
      @csrf

      <!-- Reasons -->
      <select name="reason" style="width:100%; padding:10px; margin-bottom:10px;">
        <option value="">Reason for access</option>
        <option>New Job Role</option>
        <option>Additional Job Duties</option>
        <option>Change Department</option>
        <option>Change In Job Function</option>
        <option>Other</option>
        <option>Remove Access</option>
      </select>

      <input type="text" name="reason_text" placeholder="Reason..." style="width:100%; padding:10px; margin-bottom:10px;">
      <input type="text" name="other_reason" placeholder="Other reason..." style="width:100%; padding:10px; margin-bottom:10px;">
      <input type="text" name="personnel" placeholder="Personnel Nr..." style="width:100%; padding:10px; margin-bottom:10px;">
      <input type="text" name="surname" placeholder="Surname..." style="width:100%; padding:10px; margin-bottom:10px;">
      <input type="text" name="fullname" placeholder="Full Names..." style="width:100%; padding:10px; margin-bottom:10px;">
      <input type="email" name="email" placeholder="Your email..." style="width:100%; padding:10px; margin-bottom:10px;">
      <input type="text" name="job" placeholder="Job Title..." style="width:100%; padding:10px; margin-bottom:10px;">
      <input type="text" name="faculty" placeholder="Faculty..." style="width:100%; padding:10px; margin-bottom:10px;">
      <input type="text" name="module_head" placeholder="Module Head..." style="width:100%; padding:10px; margin-bottom:10px;">
      <input type="text" name="access_details" placeholder="Access Details..." style="width:100%; padding:10px; margin-bottom:10px;">

      <label>Type of Access</label><br><br>

      <select name="type_access" style="width:100%; padding:10px; margin-bottom:10px;">
        <option value="">-- Type Of Access --</option>
        <option>Email Access</option>
        <option>System</option>
        <option>Network Access</option>
      </select>

      <button type="submit" style="
          width:100%;
          padding:10px;
          background:black;
          color:white;
          border:none;
          cursor:pointer;
      ">
        Submit
      </button>

    </form>

  </div>
</div>

<!-- Modal for the form -->
<script>
const modal = document.getElementById("modal");
const openBtn = document.getElementById("openModal");
const closeBtn = document.getElementById("closeModal");

// Open modal
openBtn.onclick = function() {
    modal.style.display = "flex";
}

// Close modal
closeBtn.onclick = function() {
    modal.style.display = "none";
}

// Close when clicking outside
window.onclick = function(event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
}
</script>
     
    

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
</body>
</html>







