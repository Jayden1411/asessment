@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="card">
           
		<div class="card-body">
                   <table class="table table-sm">
		  <thead>
		  <tr>
		      <th scope="col"></th>					
			<th scope="col"></th>					
			<th scope="col"></th>
			<th scope="col"></th>
			<th scope="col"style="text-align:center">  
			<a href="create_pdf" target="_blank"  class="btn btn-sm btn-link me-1">Advert Clicks</a>
			<a href="export-csv" target="_blank" class="btn btn-sm btn-link me-1">Export CSV</a>
			</th>
		    </tr>
		    <tr>
		      <th scope="col">Vacancy Ref</th>					
			<th scope="col">Job Title</th>					
			<th scope="col">Salary Max</th>
			<th scope="col">ExpiryDate</th>
			<th scope="col"style="text-align:center">Views</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		    @inject('clicks', 'App\Models\Click')
		     @for($x = 0; $x < count($vacancies); $x++)
		      <td>{{$vacancies[$x]->vacancy_ref }}</td>
		      <td>{{$vacancies[$x]->job_title }}</td>
		      <td>{{$vacancies[$x]->salary_max }}</td>
		      <td>{{$vacancies[$x]->expiry_date }}</td>
		      <td style="text-align:center">
			  @php
				$count = $clicks->getClicks($vacancies[$x]->vacancy_ref );
			     @endphp
			     {{ $count }}
		      </td>
		    </tr>
		   @endfor  
		  </tbody>
		</table>
	
           </div>
           </div>
        </div>
    </div>
</div>
@endsection
