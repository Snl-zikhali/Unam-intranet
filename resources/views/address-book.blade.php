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
      <div class="srow">
        <div class="ig"><label>First Name</label><input type="text" name="sfn" placeholder="e.g. John"></div>
        <div class="ig"><label>Surname</label><input type="text" name="ssn" placeholder="e.g. Shilongo"></div>
      </div>
      <div class="ig">
        <label>Department / Faculty</label>
        <input type="text" name="sdept" placeholder="e.g. Faculty of Science, Human Capital…">
      </div>
     <button type="submit" class="red-button">Search</button>
            
      <p class="stip">Tip: Search by <span>surname</span> or <span>department name</span> for best results.</p>
    </div>
    </form>
  </div>

  

@if(isset($results))
<div id="res-area" style="margin-top: 20px;">
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
            <tbody>
                @forelse($results as $person)
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 10px; font-weight: bold;">{{ $person->full_name }}</td>
                        <td style="padding: 10px; font-size: 13px;">{{ $person->position }}</td>
                        <td style="padding: 10px; font-size: 13px;">{{ $person->email }}</td>
                        <td style="padding: 10px; font-size: 13px;">{{ $person->tell }}</td>
                        <td style="padding: 10px; font-size: 13px;">{{ $person->department }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="padding: 20px; text-align: center; color: #666;">
                            No colleagues found matching your search.
                        </td>
                    </tr>
                @endforelse
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

@include('includes.scripts')

</body>
</html>
