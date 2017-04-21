@extends('master')

@section('title', 'Social Matrix | Contact')

@section('content')

	<div class="contact">
		<div class="home-text">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12">
						<div class="home-text-container">
							<h1>GET IN TOUCH</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="contact1">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<p>TOUCH A BASE TODAY.<br>LET US GET YOUR BUSINESS SOCIAL SALES READY.</p>
					
					<div class="form">
				
					<hr>

					<label for="firstName">First Name</label>
					<input type="text" name="firstname" minlength="3" required>
					<span id="firstName-error"></span>
									
					<label for="lastName">Last Name</label>
					<input type="text" name="lastname" minlength="3" required>
					<span id="lastName-error"></span>
								
					<label for="email">Email</label>
					<input type="email" name="useremail" required>
					<span id="email-error"></span>
							
					<label for="phoneNumber">Phone Number</label>
					<input type="tel" name="phonenumber" required>
					<span id="phonenumber-error"></span>
									
					<label for="comment">Comment</label>
					<textarea name="usercomment" rows="4" cols="20"></textarea>
				
					<button type="submit" class="hollow button">Send</button>
					

			
		</div>

				</div>
			</div>
		</div>
	</div>
	
	<div class="contact2">	
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<button type="button" class="btn btn-default">SUBMIT</button>
				</div>
			</div>
		</div>		
	</div>

@endsection