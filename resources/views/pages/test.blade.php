@extends('components.app', [ 'sidemenu' => ['side0' => 'true'] ])
@section('content')

<div class="container-fluid">
	<div class="header text-center">
        <h3 class="title">Timeline</h3>
    </div>
    
	<div class="row">
		<div class="col-md-4">
			<div class="card card-product" data-count="3">
				<div class="card-header card-header-image">
					<a href="#pablo">
						<img class="img" src="https://www.telegraph.co.uk/content/dam/Travel/2018/January/sydney-best-GETTY.jpg?imwidth=450">
					</a>
				</div>

				<div class="card-body">
					<h4 class="card-title">
						<a href="#pablo">Beautiful Castle</a>
					</h4>
					
					<div class="card-description">
						The place is close to Metro Station and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Milan.
					</div>
				</div>

				<div class="card-footer">
					<div class="stats">
						<p class="card-category"><i class="material-icons">watch_later</i> 30/06/2018 14:30</p>
					</div>
					
					<div class="">
						<button class="btn btn-just-icon btn-link btn-warning">
							<i class="material-icons">visibility_off</i>
						</button>

						<button class="btn btn-just-icon btn-link btn-danger">
							<i class="material-icons">close</i>
						</button>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>

@endsection