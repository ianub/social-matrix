@extends('master')

@section('title', 'Social Matrix | Prices')

@section('content')

	<div class="prices">
		<div class="home-text">
			<div class="container-fluid">
				<div class="row">
					<div class="text-center">
						<div class="home-text-container">
							<h1>SMB SOCIAL SOLUTIONS</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@foreach($allPrices as $prices)
		<div class="pricesbox">
			<div class="prices1">
				<div class="container-fluid">
					<div class="row">
						<div class="text-center">
							<h2>{{$prices->header}}</h2>
							<hr>
							<h1>${{$prices->cost}}</h1>
							<p>PER MONTH</p>
							<hr>
							<ul>
								<li>{{$prices->description}}</li>
							</ul>
							<div id="bu1">
						     @if(Auth::check())
									<hr>

						          <a href="/team/edit/{{$prices->id}}"><button type="button" class="btn btn-primary"><strong>EDIT</strong></button></a><br>
						          
						          <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-sm"><strong>DELETE</strong></button>

							
						          @endif


						    </div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	  @endforeach

<div class="container-fluid">
			<div class="row">
				<div class="text-center">
					@if(Auth::check())
				      	<a href="/prices/create"><button type="button" class="btn btn-default">ADD</button></a>
				  	@endif
				  </div>
				</div>
			</div>
	
	<div class="prices3">	
		<div class="container-fluid">
			<div class="row">
				<div class="text-center">

					<a href="{{ url('/contact') }}"><button type="button" class="btn btn-default">CONTACT US</button></a>
				</div>
			</div>
		</div>		
	</div>

@endsection