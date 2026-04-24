@php $activePage = 'address-book'; @endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Address Book – UNAM Intranet</title>
@include('includes.head')
</head>
<style>
  .red-button {
            width: 100%;
            padding: px;
            background-color: #ee3124;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            font-size: 1rem;
        }

       .card {
    background: rgba(255, 255, 255, 0.6); /* Semi-transparent white */
    backdrop-filter: blur(15px);
    -webkit-backdrop-filter: blur(10px);
    
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
    <div class="breadcrumb">Home &rsaquo; <span>Address Book</span></div>
    <h1 class="page-title">Address <em>Book</em></h1>
  </div>

  <div class="card">
    <div class="sec-label"><div class="bar"></div><h2>Find a Colleague</h2></div>
    <p style="font-size:14px;color:var(--text-muted);line-height:1.65;margin-bottom:20px;">
      Search for staff contact details by name, surname, or department across all UNAM campuses.
    </p>

    <form action="{{ route('address-book.search') }}" method="POST">
      @csrf
    <div class="search-form sf">
    <div class="ig">
        <label>Search Colleague</label>
        <input type="text" id="search-input" name="search" placeholder="Enter name or department...">
    </div>
     
            
      <p class="stip">Tip: Search by <span>name</span> or <span>department</span> for best results.</p>
    </div>
    </form>
  </div>

  

@if(isset($results))
<div id="res-area" style="margin-top: 20px; display: none;">
    <div class="card">
        <div class="sec-label"><div class="bar"></div><h2>Results</h2></div>
        
        <table class="results-table" style="width: 100%; border-collapse: collapse; margin-top: 10px;">
            <thead>
                <tr style="background-color: #ee3124; color: white; text-align: left;">
                    <th style="padding: 10px;">Full Name</th>
                    <th style="padding: 10px;">Position</th>
                    <th style="padding: 10px;">Email Address</th>
                    <th style="padding: 10px;">Tel Nr</th>
                    <th style="padding: 10px;">Department</th>
                </tr>
            </thead>
            <tbody id="table-results-body">
                </tbody>
        </table>
    </div>
</div>
@endif

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
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search-input');
    const resArea = document.getElementById('res-area');
    const tableBody = document.getElementById('table-results-body');
    
    let debounceTimer;

    const handleSearch = () => {
        const query = searchInput.value.trim();
        
        if (query.length > 0) {
            resArea.style.display = 'block';
            clearTimeout(debounceTimer);
            
            debounceTimer = setTimeout(() => {
                fetchResults(query);
            }, 300);
        } else {
            resArea.style.display = 'none';
            tableBody.innerHTML = '';
        }
    };

    const fetchResults = (query) => {
        tableBody.innerHTML = '<tr><td colspan="5" style="padding:20px; text-align:center; color: #999;">Searching...</td></tr>';
        
        const requestData = { search: query };
        const routeUrl = "{{ route('address-book.search') }}";
        
        console.log('🔍 Search Query:', query);
        console.log('📤 Request Data:', requestData);
        console.log('🔗 Route URL:', routeUrl);
        console.log('🔐 CSRF Token:', '{{ csrf_token() }}');
        
        fetch(routeUrl, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json'
            },
            body: JSON.stringify(requestData)
        })
        .then(response => {
            console.log('📥 Response Status:', response.status);
            console.log('📥 Response OK:', response.ok);
            
            if (!response.ok) {
                throw new Error(`HTTP ${response.status}`);
            }
            return response.text();
        })
        .then(text => {
            console.log('📋 Raw Response (first 500 chars):', text.substring(0, 500));
            console.log('📋 Response Length:', text.length);
            console.log('📋 Response starts with:', text.substring(0, 100));
            
            // Check if response is HTML instead of JSON
            if (text.trim().startsWith('<')) {
                console.error('❌ ERROR: Server returned HTML instead of JSON!');
                console.error('HTML returned:', text.substring(0, 1000));
                throw new Error('Server is returning HTML. Controller may not be detecting AJAX request.');
            }
            
            try {
                const data = JSON.parse(text);
                console.log('✅ Parsed Data:', data);
                
                tableBody.innerHTML = '';
                const results = Array.isArray(data) ? data : (data.data || []);
                
                console.log('📊 Results Count:', results.length);
                
                if(results.length > 0) {
                    results.forEach((person) => {
                        const row = document.createElement('tr');
                        row.style.borderBottom = '1px solid #eee';
                        row.innerHTML = `
                            <td style="padding: 10px; font-weight: bold;">${escapeHtml(person.full_name || '')}</td>
                            <td style="padding: 10px; font-size: 13px;">${escapeHtml(person.position || '')}</td>
                            <td style="padding: 10px; font-size: 13px;">
                                <a href="mailto:${escapeHtml(person.email || '')}" style="color: #ee3124; text-decoration: none;">
                                    ${escapeHtml(person.email || '')}
                                </a>
                            </td>
                            <td style="padding: 10px; font-size: 13px;">${escapeHtml(person.tell || person.phone || '')}</td>
                            <td style="padding: 10px; font-size: 13px;">${escapeHtml(person.department || '')}</td>
                        `;
                        tableBody.appendChild(row);
                    });
                } else {
                    tableBody.innerHTML = '<tr><td colspan="5" style="padding:20px; text-align:center; color: #666;">No results found.</td></tr>';
                }
            } catch (parseError) {
                console.error('❌ JSON Parse Error:', parseError);
                console.error('Response text was:', text);
                tableBody.innerHTML = '<tr><td colspan="5" style="padding:20px; text-align:center; color: #d9534f;">Error parsing response.</td></tr>';
            }
        })
        .catch(error => {
            console.error('❌ Fetch Error:', error.message);
            console.error('Full Error:', error);
            tableBody.innerHTML = '<tr><td colspan="5" style="padding:20px; text-align:center; color: #d9534f;">Error fetching results: ' + error.message + '</td></tr>';
        });
    };

    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }

    if (searchInput) {
        searchInput.addEventListener('input', handleSearch);
        searchInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                e.preventDefault();
                clearTimeout(debounceTimer);
                const query = searchInput.value.trim();
                if (query.length > 0) {
                    fetchResults(query);
                }
            }
        });
    }
});
</script>
@include('includes.scripts')

</body>
</html>