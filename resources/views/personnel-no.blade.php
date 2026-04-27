 @php $activePage = 'personnel-no'; @endphp
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Personnel Verification</title>
    
    <style>


        /* The container for everything that ISN'T the sidebar */
        .main-content {
            flex-grow: 1; /* Takes up all remaining space */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-card {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            width: 350px;
            text-align: center;
            border-top: 5px solid #ee3124;
            background: rgba(255, 255, 255, 0.6); /* Semi-transparent white */
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(12px);
    
        }

        .form-card h3 {
            margin-bottom: 10px;
            color: #333;
        }

        .input-field {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            outline: none;
        }

        .red-button {
            width: 100%;
            padding: 12px;
            background-color: #ee3124;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            font-size: 1rem;
        }
    </style>

    @include('includes.head')
</head>
<body>   
  
    @include('includes.sidebar') 

    <div class="main-content">
        <div class="form-card">
            <h3>Personnel Verification</h3>
            <p style="font-size: 0.9rem; color: #666; margin-bottom: 25px;">Please enter your ID to continue</p>
             
            <form action="{{ route('verify.info') }}" method="POST">
            @csrf
                <input type="text" name="personnel_no" class="input-field" placeholder="Enter Personnel Number">
                
                <button type="submit" class="red-button"><a target="_blank" class="target-danger" style="text-decoration:none";>
                    Continue</a>
                </button>
            </form>
        </div>
    </div>

    @include('includes.scripts')
</body>
</html>

