@extends('master')

@section('title', 'Social Matrix | Create')

@section('content')

	
	<div class="prices">
		<div class="home-text">
			<div class="container-fluid">
				<div class="row">
					<div class="text-center">
						<div class="home-text-container">
							<h1>ADD SMB SOCIAL SOLUTIONS</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<form method="post" enctype="multipart/form-data" action="/prices/store">
		{{ csrf_field() }}
		<div class="contact1">
			<div class="container-fluid">
				<div class="row">

					<div class="col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3 text-center">
							
							
							
							<div class="form-group row">
							  <label for="header" class="col-2 col-form-label">HEADER</label><br>
							  
							    <input class="form-control" type="text" id="header" name="header" value="{{ old('header') }}">
						    		@if ($errors->has('header'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('header') }}</strong>
                                        </span>
                                    @endif
							 
							</div>

							<div class="form-group row">
							  <label for="cost" class="col-2 col-form-label">COST</label><br>
							  
							    <input class="form-control" type="text" id="cost" name="cost" value="{{ old('cost') }}">
							    @if ($errors->has('cost'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('cost') }}</strong>
                                        </span>
                                    @endif
							  
							</div>

						

							<div class="form-group row">
							  <label for="description" class="col-2 col-form-label">DESCRIPTION</label><br>
							  
							     <textarea class="form-control" rows="10" id="description" name="description">{{ old('description') }}</textarea>
							     @if ($errors->has('description'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
							 
							</div>


							<input type="submit" value="SUBMIT" class="btn btn-default">
					</div>
						

				
						
				</div>
			</div>
		</div>
	</form>

@endsection