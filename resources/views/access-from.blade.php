@php $activePage = 'personnel-no'; @endphp
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Personnel Verification</title>

    <style>

        /* ── Page layout ── */
     body {
    margin: 0;
    padding: 0;
    font-family: 'Dm', sans-serif;
    background: #f0eeeb;
    /* removed display: flex — sidebar is fixed, not in flow */
}
body {
	font-family: 'Roboto', sans-serif;
	font-weight: 400;
	font-size: 14px;
	color: #545454;
	
}
        /* ── Main area (everything beside the sidebar) ── */
      .main-content {
    flex: 1;
    display: flex;
    flex-direction: column;
    height: 100vh;
    overflow: hidden;
    margin-left: 210px; /* ← pushes form out from behind the fixed sidebar */
    padding: 20px;
}

        /* ── Form card fills the open grey area ── */
        .form-card {
            flex: 1;
            display: content;
            flex-direction: column;
            background: #fff;
            overflow-y: auto;
        }

        /* ── Red header ── */
        .form-card h3 {
            background: #ee3124;
            color: #fff;
            font-size: 15px;
            font-weight: 500;
            margin: 10;
            padding: 8px 16px 6px;
        }

        .form-card > p {
            background: #ee3124;
            color: rgba(255, 255, 255, 0.75);
            font-size: 14px;
            margin: 0;
            padding: 4px 15px 5px;
        }

        /* ── Form body ── */
        form {
            padding: 24px 60px;
            flex: 0;
            display: flex;
            flex-direction: column;
        }

        /* ── Section titles with red rule ── */
        .section-title {
            font-size: 10px;
            font-weight: 500;
            color: #ee3124;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            margin: 10px 0 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .section-title::after {
            content: '';
            flex: 1;
            height: 0.5px;
            background: #f0e0e0;
        }

        /* ── Grid layouts ── */
        .row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; }
        .row3 { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 8px; }
        .row4 { display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; gap: 8px; }

        /* ── Labels ── */
        label {
            display: block;
            font-size: 15px !important;
            color: #666565 !important;
            margin-bottom: 3px !important;
            text-align: left;
        }

        /* ── All inputs and selects ── */
        .input-field {
            width: 100%;
            padding: 7px 10px;
            margin-bottom: 8px;
            font-size: 12px;
            border: 0.5px solid #e8e8e8;
            border-radius: 6px;
            background: #fafafa;
            color: #1a1a1a;
            outline: none;
            box-sizing: border-box;
            transition: border-color 0.15s;
            display: block;
        }

        .input-field:focus {
            border-color: #ee3124;
            background: #fff;
            box-shadow: 0 0 0 2px rgba(192, 57, 43, 0.08);
        }

        /* Read-only pre-filled fields */
        input.input-field[readonly] {
            background: #f5f5f5;
            color: #1b1b1b;
            border-color: #efefef;
        }

        /* Custom dropdown arrow */
        select.input-field {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 1em;
            padding-right: 30px;
        }

        input.input-field {
            background-image: none !important;
        }

        /* ── Sequential fields ── */
        .sequential-row {
            display: flex;
            gap: 8px;
            margin-bottom: 8px;
        }

        .seq-input {
            flex: 1;
            padding: 7px 10px;
            font-size: 12px;
            border: 0.5px solid #575757;
            border-radius: 6px;
            background: #fafafa;
            color: #1a1a1a;
            outline: none;
            transition: border-color 0.15s, opacity 0.4s, visibility 0.4s;
        }

        .seq-input:focus {
            border-color: #ee3124;
            background: #fff;
            box-shadow: 0 0 0 2px rgba(192, 57, 43, 0.08);
        }

        #field2, #field3 {
            opacity: 0;
            visibility: hidden;
            width: 0;
            padding: 0;
            border-color: #ee3124;
        }

        #field1:not(:placeholder-shown) ~ #field2 {
            opacity: 1;
            visibility: visible;
            width: auto;
            padding: 7px 10px;
            border: 0.5px solid #ee3124;
        }

        #field2:not(:placeholder-shown) ~ #field3 {
            opacity: 1;
            visibility: visible;
            width: auto;
            padding: 7px 10px;
            border: 0.5px solid #ee3124;
        }

        /* ── Submit button pinned to bottom ── */
        .spacer { flex: 1; }

        .red-button {
            width: 100%;
            padding: 10px;
            background: #ee3124;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            margin-top: 12px;
        }

        .red-button:hover {
            opacity: 0.88;
        }
  .form-card {
    background: rgba(255, 255, 255, 0.6); /* Semi-transparent white */
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    
    /* White border to help it stand out from the gray background */
    border: 1px solid rgba(255, 255, 255, 0.7); 
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
}
    </style>

    @include('includes.head')
</head>
<body>

    @include('includes.sidebar')

    <div class="main-content">
        <div class="form-card">
            <h3>Personnel Info</h3>
            <p>Verify your details</p>

            <form action="{{ route('its.access.store') }}" method="POST">
                @csrf

                <div class="section-title">Request details</div>
                <div class="row2">
                    <div>
                        <label for="service_type">Reason for Access</label>
                        <select name="service_type" id="service_type" class="input-field" required>
                            <option value="" disabled selected>Reason For Access...</option>
                            <option value="new_job_role">New Job Role</option>
                            <option value="additional_job_duties">Additional Job Duties</option>
                            <option value="change_in_job_function">Network Support</option>
                            <option value="network_support">Change in Job Function</option>
                            <option value="other">Other</option>
                            <option value="remove_access">Remove Access</option>
                        </select>
                    </div>
                    <div>
                        <label for="access_type">Type of Access</label>
                        <select name="access_type" id="access_type" class="input-field" required>
                            <option value="" disabled selected>--Type of Access--</option>
                            <option value="temporary-access">Temporary Access</option>
                            <option value="permanent-access">Permanent Access</option>
                        </select>
                    </div>
                </div>

                <div class="section-title">Applicant info</div>
                <div class="row4">
                    <div>
                        <label>First Name</label>
                        <input type="text" name="fname" class="input-field" value="{{ $user->fullname }}" readonly>
                    </div>
                    <div>
                        <label>Surname</label>
                        <input type="text" name="surname" class="input-field" value="{{ $user->surname }}" readonly>
                    </div>
                    <div>
                        <label>Job Title</label>
                        <input type="text" name="job-title" class="input-field" value="{{ $user->job_title }}" readonly>
                    </div>
                    <div>
                        <label>Faculty</label>
                        <input type="text" name="faculty" class="input-field" value="{{ $user->faculty }}" readonly>
                    </div>
                </div>
                <div class="row2">
                    <div>
                        <label>Email</label>
                        <input type="text" name="email" class="input-field" value="{{ $user->email }}" readonly>
                    </div>
                    <div>
                        <label>Department</label>
                        <input type="text" name="department" class="input-field" value="{{ $user->department }}" readonly>
                    </div>
                </div>

                <div class="section-title">Service &amp; access</div>
                <div>
                    <label for="service_select">Select Service</label>
                    <select name="service_type" id="service_select" class="input-field" required>
                        <option value="" disabled selected>Module head</option>
                        <option value="oswin_nangula">Oswin Nangula (Student records)</option>
                        <option value="oswin_nangula_faculty">Oswin Nangula (Faculty office)</option>
                        <option value="dr_maggy_beukes">Dr. Maggy Beukes (Moodle)</option>
                        <option value="anna_marrie_biwa">Anna Marie Biwa (Exams)</option>
                        <option value="ebben_mutjavikua">Ebben Mutjavikua (Finance)</option>
                        <option value="rodney_cloete">Rodney Cloete (Human Resource)</option>
                        <option value="lazarus_shatipamba">Lazarus Shatipamba (Hostel)</option>
                    </select>
                </div>

                <div class="sequential-row">
                    <input type="text" id="field1" class="seq-input" placeholder="Menu Option" required>
                    <input type="text" id="field2" class="seq-input" placeholder="Access Level" required>
                    <input type="text" id="field3" class="seq-input" placeholder="Update/View" required>
                </div>

            

                <button type="submit" class="red-button">Continue</button>
            </form>
        </div>
    </div>

    @include('includes.scripts')
</body>
</html>