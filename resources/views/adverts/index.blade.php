@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="card">
                <div class="card-header"><h6 style="background-color:white;">Adverts</h6></div>

                <div class="card-body">	
				 @for($x = 0; $x < count($vacancies); $x++)
				 
				 <div class="card" style="">
					  <div class="card-body">
					   @inject('clicks', 'App\Models\Click')
						  @php
							$click_ref = $clicks->getRef($vacancies[$x]->vacancy_ref );
					    @endphp
					    <h5 class="card-title">{{$vacancies[$x]->company_ref }}</h5>
					    <h6 class="card-title">Ref:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$vacancies[$x]->vacancy_ref }}</h6>
					    <h6 class="card-title">Title:&nbsp;&nbsp;&nbsp;&nbsp;
					    <a href="https://webapp.placementpartner.com/wi/application_form.php?id={{$vacancies[$x]->company_ref }}&vacancy_ref={{$vacancies[$x]->vacancy_ref }}&source=assessment"target="blank"data-id="{{ $click_ref }}"class="click-call">
					    {{$vacancies[$x]->job_title }}</a></h6>
					    <h6 class="card-title">Expiry:&nbsp;&nbsp;{{$vacancies[$x]->expiry_date }}</h6>
					    <p class="card-text">{!! html_entity_decode($vacancies[$x]->brief_description ) !!}</p>											 
						<a href="https://webapp.placementpartner.com/wi/application_form.php?id={{$vacancies[$x]->company_ref }}&vacancy_ref={{$vacancies[$x]->vacancy_ref }}&source=assessment"target="blank"data-id="{{ $click_ref }}"class="click-call btn btn-info btn-sm">
						   Apply 
						</a>
					  </div>
				</div>
				 @endfor
	   
		</div>
	
	
           </div>
        </div>
    </div>
</div>
@endsection