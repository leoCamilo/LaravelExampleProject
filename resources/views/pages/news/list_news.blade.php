@extends('components.app', [ 'sidemenu' => ['side1' => 'true'], 'navbar' => [ 'new_url' => '\news\create' ] ])
@section('content')

<div class="container-fluid">
	<div class="row">
		@foreach($news as $n)

		<div class="col-md-4">
			<div class="card card-product" data-count="3">
				<div class="card-header card-header-image">
					<a href="#">
						<img class="img news-img" src="{{ $n->img_url }}">
					</a>
				</div>

				<div class="card-body">
					<h4 class="card-title">
						{{ $n->title }}
					</h4>
					<div class="card-description">
						{{ substr($n->content, 0, 144)."..." }}
					</div>
				</div>

				<div class="card-footer">
					<div class="stats">
						<p class="card-category"><i class="material-icons">watch_later</i> {{ $n->created_at }}</p>
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

		@endforeach
	</div>
</div>

@endsection