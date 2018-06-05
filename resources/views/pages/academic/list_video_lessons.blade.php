@extends('components.app', [ 'sidemenu' => ['side21' => 1], 'navbar' => [ 'new_url' => '\videolessons\create' ] ])
@section('content')

<div class="container-fluid">
	<div class="row">
		@foreach($videos as $v)

		<div class="col-md-4">
			<div class="card card-product" data-count="3">
				<div class="card-header card-header-image">
					<iframe class="card-video" src="https://player.vimeo.com/video/{{$v->link}}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>

				<div class="card-body">
					<h4 class="card-title">
						@if ($v->premium) <span class="badge badge-warning">premium</span><br><br> @endif
						{{$v->title}}
					</h4>
				</div>

				<div class="card-footer">
					<div class="stats">
						<p class="card-category"><i class="material-icons">watch_later</i> {{$v->created_at}}</p>
					</div>
					
					<div>
						<button class="btn btn-just-icon btn-link btn-warning" onclick="set_visibility({{$v->id}}, '/api/videolessons/change_visibility/')">
						@if ($v->visible)
							<i class="material-icons">visibility_off</i>
						@else
							<i class="material-icons">visibility</i>
						@endif
						</button>

						<button class="btn btn-just-icon btn-link btn-danger" onclick="delete_info({{$v->id}}, '/api/videolessons/')">
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