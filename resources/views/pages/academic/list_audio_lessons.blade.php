@extends('components.app', [ 'sidemenu' => ['side24' => 1], 'navbar' => [ 'new_url' => '\audiolessons\create' ] ])
@section('content')

<div class="container-fluid">
	<div class="row">
		@foreach($audios as $a)

		<div class="col-md-4">
			<div class="card card-product" data-count="3">
				<div class="card-header card-header-image">
					{!! $a->link !!}
				</div>

				<div class="card-body">
					<h4 class="card-title">
						@if ($a->premium) <span class="badge badge-warning">premium</span><br><br> @endif
						{{$a->title}}
					</h4>
				</div>

				<div class="card-footer">
					<div class="stats">
						<p class="card-category"><i class="material-icons">watch_later</i> {{$a->created_at}}</p>
					</div>
					
					<div>
						<button class="btn btn-just-icon btn-link btn-danger" onclick="delete_info({{$a->id}}, '/api/audiolessons/')">
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