@extends('components.app', [ 'sidemenu' => ['side22' => 'true'], 'navbar' => [] ])
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 offset-md-1">
			@foreach($questions as $q)
			<div class="row">
				<div class="card">
					<div class="card-header card-header-warning">
						<h4 class="card-title">
							{{$q->question}}
						</h4>
					</div>

					<div class="card-body">
						<ul>
							<li>{{$q->answer_1}}</li>
							<li>{{$q->answer_2}}</li>
							<li>{{$q->answer_3}}</li>
							<li>{{$q->answer_4}}</li>
							<li>{{$q->answer_5}}</li>
						</ul>
					</div>

					<div class="card-footer ml-auto">
						<a href="/question/{{$q->id}}">
							<button class="btn btn-link btn-warning">Editar</button>
						</a>

						<button class="btn btn-link btn-danger" onclick="delete_info({{$q->id}}, '/api/study/')">Remover</button>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>

@endsection