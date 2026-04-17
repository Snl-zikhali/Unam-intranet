@php $activePage = 'staff-details'; @endphp
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Staff Info</title>

    <style>

        /* ── Page layout ── */
     body {
    margin: 0;
    padding: 0;
    font-family: 'Dm', sans-serif;
    background: #f0eeeb;
    /* removed display: flex — sidebar is fixed, not in flow */
}
        /* ── Main area (everything beside the sidebar) ── */
.main-content {
    flex: 1;
    margin-left: 210px;
    padding: 20px;
    height: 100vh;
    box-sizing: border-box; /* Ensures padding doesn't add to width */
}

        /* ── Form card fills the open grey area ── */
        .form-card {
    display: flex; /* Changed from content */
    flex-direction: column;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    height: 100%; /* Fill the main area */
    overflow: hidden; 
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
            padding: 0 12px 5px;
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

    </style>

    @include('includes.head')
</head>
<body>

    @include('includes.sidebar')

    <div class="main-content">
        <div class="form-card">
            <h3>Personnel Info</h3>
            <p>Verify your details</p>

            <form action="{{ route('staff.detail.store') }}" method="POST">
                @csrf

              

                <div class="section-title">Staff Info</div>
                <div class="row4">
                    <div>
                        <label>First Name</label>
                        <input type="text" name="fname" class="input-field" value="{{ $user->full_name }}" readonly>
                    </div>
                    <div>
                        <label>Department</label>
                        <input type="text" name="department" class="input-field" value="{{ $user->department }}" readonly>
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="text" name="email" class="input-field" value="{{ $user->email }}" readonly>
                    </div>
                    <div>
                        <label>Position</label>
                        <input type="text" name="position" class="input-field" value="{{ $user->position}}" readonly>
                    </div>

                    <div>
                        <label>Tell</label>
                        <input type="text" name="tell" class="input-field" value="{{ $user->tell}}" readonly>
                    </div>
                </div>
              

               <button type="submit" class="red-button">Continue</button>
            </form>
        </div>
    </div>

    @include('includes.scripts')
</body>
</html>