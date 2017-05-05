@extends('master')

@section('title', 'Social Matrix | Team')

@section('content')

	<div class="team">
		<div class="home-text">
			<div class="container-fluid">
				<div class="row">
					<div class="text-center">
						<div class="home-text-container">
							<h1>MEET OUR TEAM</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="home1">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3 text-center">
					<h3>We exist to help New Zealand and Australian businesses embrace social media as the mission-critical channel to market.</h3>
					<p>We ultimately are, even where we are engaged as an outsourced partner, here to share our knowledge and help businesses be self-sufficient. This is the new marketplace – Social Media.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="team2">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
					<p>Having led sales organisations for much of his career, Josh Borgia-Frost became interested in social media as a tool to engage customers when Hassan Dia was hired into one of his sales teams. In his first month Hassan smashed his targets and on investigation, Josh learnt that as Hassan was a digital native and a social media expert, the go to marketplace to hunt and qualify leads is social media.</p>
					<p>We have watched the phenomena that is social media and the onset of platforms like Instagram and Snapchat and how as humans we learn, celebrate, buy and socialise.</p>
					<p>What does this all mean for businesses and how can a business turn this new marketplace into a platform for better engagement, effective communication, education, improved service and ultimately increase leads and sales?</p>
					<p>We have mapped, proven and optimised our social selling and social marketing process and we have taken this knowledge to market</p>
				</div>
			</div>
		</div>
	</div>
  
	<div class="team1">
	<div class="container-fluid">
	<div class="row">
		<div class="text-center">
		       <div class="wrapper_bu">
            <div class="createteam">
              @if(Auth::check())
              <a href="/team/create">ADD MEMBER</a>
              <a href="/team/edit">EDIT MEMBER</a>
              @endif
            </div>
              @foreach($allTeam as $member)
		           <div class="image">
                        <a class="panel-heading accordion-toggle collapsed left" data-toggle="collapse"
                           data-parent="#accordion1,#accordion2,#accordion3,#accordion4,#accordion5,#accordion6" data-target="#{{$member->id}}">
                            <div id="bu1">
                                  <img src="/images/team/{{$member->image}}">
                                  <h4>{{$member->first_name}} {{$member->last_name}}</h4><br>
                                  <h5>{{$member->position}}</h5>

                            </div>
                        </a>
                 </div>
                 @endforeach
                 {{-- <div class="image">
                    <a class="panel-heading accordion-toggle collapsed left" data-toggle="collapse"
                       data-parent="#accordion1,#accordion2,#accordion3,#accordion4,#accordion5,#accordion6" data-target="#collapseTwo">
                        <div id="bu2">
                            <img src="images/hassan.jpg" height="200px">
                                  <h4>HASSAN DIA</h4>
                                  <h5>POSITION</h5>
                        </div>
                    </a>
                 </div>
                <div class="image">
                    <a class="panel-heading accordion-toggle collapsed left " data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3,#accordion4,#accordion5,#accordion6"
                       data-target="#collapseThree">
                          <div id="bu3">
                              <img src="images/josh.jpg" height="200px">
                                  <h4>JOSH BORGIA</h4>
                                  <h5>POSITION</h5>
                          </div>
                    </a>
                </div>
                <div class="image">
                        <a class="panel-heading accordion-toggle collapsed left" data-toggle="collapse"
                           data-parent="#accordion1,#accordion2,#accordion3,#accordion4,#accordion5,#accordion6" data-target="#collapseFour">
                            <div id="bu4">
                                  <img src="images/josh.jpg" height="200px">
                                  <h4>JOSH BORGIA</h4>
                                  <h5>POSITION</h5>
                            </div>
                        </a>
                 </div>
                 <div class="image">
                        <a class="panel-heading accordion-toggle collapsed left" data-toggle="collapse"
                           data-parent="#accordion1,#accordion2,#accordion3,#accordion4,#accordion5,#accordion6" data-target="#collapseFive">
                            <div id="bu5">
                                  <img src="images/josh.jpg" height="200px">
                                  <h4>JOSH BORGIA</h4>
                                  <h5>POSITION</h5>
                            </div>
                        </a>
                 </div>
                 <div class="image">
                        <a class="panel-heading accordion-toggle collapsed left" data-toggle="collapse"
                           data-parent="#accordion1,#accordion2,#accordion3,#accordion4,#accordion5,#accordion6" data-target="#collapseSix">
                            <div id="bu5">
                                  <img src="images/josh.jpg" height="200px">
                                  <h4>JOSH BORGIA</h4>
                                  <h5>POSITION</h5>
                            </div>
                        </a>
                 </div> --}}
            </div>

            <div class="panel-group col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3" id="accordion1">
             
                    <div class="panel panel-default">
                        @foreach($allTeam as $member)
                        <div id="{{$member->id}}" class="panel-collapse collapse">
                                <div class="center-down-arrow">
                                    <img src="https://s6.postimg.org/50w2vzj01/slider_down_Arrow.png">
                                </div>
                            <div class="panel-body">
                                
                                <div>
                                  <h2>{{$member->first_name}} {{$member->last_name}}</h2>
                                  <p>{{$member->description}}</p>
                                </div>
                                
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                  </div>

            

          
		</div>
	</div>
</div>
</div>

@endsection