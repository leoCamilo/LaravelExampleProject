@extends('components.app', [ 'sidemenu' => ['side1' => 'true'], 'navbar' => [ 'new_url' => '\news\create' ] ])
@section('content')

<div class="container-fluid">
	<div class="row">
		@foreach($news as $n)

		<div class="col-md-4">
			<div class="card card-product" data-count="3">
				<div class="card-header card-header-image">
					<a href="/news/{{ $n->id }}">
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
						<button class="btn btn-just-icon btn-link btn-warning" onclick="set_visibility({{$n->id}}, '/api/news/change_visibility/')">
						@if ($n->visible)
							<i class="material-icons">visibility_off</i>
						@else
							<i class="material-icons">visibility</i>
						@endif
						</button>

						<button class="btn btn-just-icon btn-link btn-danger" onclick="delete_info({{$n->id}}, '/api/news/')">
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