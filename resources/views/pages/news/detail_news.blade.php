@extends('components.app', [ 'sidemenu' => ['side1' => 'true'], 'navbar' => [] ])
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<div class="card card-product" data-count="3">
				<div class="card-header card-header-image">
					<img class="img news-img" src="{{ $news->img_url }}">
				</div>

				<div class="card-body">
					<h4 class="card-title">
						{{ $news->title }}
					</h4>
					<div class="card-description">
						{{ $news->content }}
					</div>
				</div>

				<div class="card-footer">
					<div class="stats">
						<p class="card-category"><i class="material-icons">watch_later</i> {{ $news->created_at }}</p>
					</div>
					
					<div class="">
						<button class="btn btn-just-icon btn-link btn-warning">
							<i class="material-icons">visibility_off</i>
						</button>

						<button class="btn btn-just-icon btn-link btn-danger" onclick="delete_news({{$news->id}})">
							<i class="material-icons">close</i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection