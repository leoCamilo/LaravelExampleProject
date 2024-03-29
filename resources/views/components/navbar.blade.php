@php

use Illuminate\Support\Facades\DB;

$unread = DB::table('message_centers')
    ->select('message_centers.unreaded_msgs')
	->sum('message_centers.unreaded_msgs');

@endphp

<nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
	<div class="container-fluid">
		<div class="navbar-wrapper">
			<a class="navbar-brand" href="#">{{ $name }}</a>

			@isset($new_url)
			<a href="{{$new_url}}">
				<button class="btn btn-warning btn-round btn-fab">
					<i class="material-icons">add</i>
				</button>
			</a>
			@endisset
		</div>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
			<span class="sr-only">Toggle navigation</span>
			<span class="navbar-toggler-icon icon-bar"></span>
			<span class="navbar-toggler-icon icon-bar"></span>
			<span class="navbar-toggler-icon icon-bar"></span>
		</button>

		
		
		<div class="collapse navbar-collapse justify-content-end" id="navigation">
			<!-- <form class="navbar-form">
				<div class="input-group no-border">
					<input type="text" value="" class="form-control" placeholder="Search...">
					<button type="submit" class="btn btn-white btn-round btn-just-icon">
						<i class="material-icons">search</i>
						<div class="ripple-container"></div>
					</button>
				</div>
			</form> -->
			
			<ul class="navbar-nav">
				<!-- <li class="nav-item">
					<a class="nav-link" href="#pablo">
						<i class="material-icons">dashboard</i>
						<p>
							<span class="d-lg-none d-md-block">Stats</span>
						</p>
					</a>
				</li> -->
				
				@if($unread != 0)
					<li class="nav-item dropdown">
						<a class="nav-link" href="/chat">
							<i class="material-icons">chat</i>
							<span class="notification">{{$unread}}</span>
						</a>
					</li>	
				@endif
				
				<!-- <li class="nav-item">
					<a class="nav-link" href="#pablo">
						<i class="material-icons">person</i>
						<p>
							<span class="d-lg-none d-md-block">Account</span>
						</p>
					</a>
				</li> -->
			</ul> 
		</div>
	</div>
</nav>