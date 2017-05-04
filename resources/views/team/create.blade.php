@extends('master')

@section('title', 'Social Matrix | Create')

@section('content')



	<form>
		<div class="contact1">
			<div class="container-fluid">
				<div class="row">

					<div class="col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3 text-center">
							<p>TOUCH A BASE TODAY.<br>LET US GET YOUR BUSINESS SOCIAL SALES READY.</p>
							
							
							<div class="form-group row">
							  <label for="first_name" class="col-2 col-form-label">FIRST NAME</label><br>
							  
							    <input class="form-control" type="text" id="first_name">
							 
							</div>

							<div class="form-group row">
							  <label for="last_name" class="col-2 col-form-label">LAST NAME</label><br>
							  
							    <input class="form-control" type="text" id="last_name">
							  
							</div>

							<div class="form-group row">
							  <label for="position" class="col-2 col-form-label">POSITION</label><br>
							  
							    <input class="form-control" type="text" id="position">
							  
							</div>

							<div class="form-group row">
							  <label for="description" class="col-2 col-form-label">DESCRIPTION</label><br>
							  
							     <textarea class="form-control" rows="10" id="description"></textarea>
							 
							</div>

							<div class="form-group row">
							  <label for="image" class="col-2 col-form-label">IMAGE</label><br>
							  
							    <input class="form-control" type="file" id="image">
							 
							</div>

							<input type="submit" value="SUBMIT">
					</div>
						

				
						
				</div>
			</div>
		</div>
	</form>

<ul>
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
</ul>

@endsection