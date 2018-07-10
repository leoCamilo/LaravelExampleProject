@extends('components.app', [ 'sidemenu' => ['side22' => 'true'], 'navbar' => [ 'new_url' => '\study\create' ] ])
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header card-header-warning card-header-icon">
					<div class="card-icon">
						<i class="material-icons">assignment</i>
					</div>

					<h4 class="card-title">Questionários</h4>
				</div>

				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>Nome</th>
									<th class="text-right">Quantidade de perguntas</th>
									{{--  <th class="text-right">Porcentagem de Acerto</th>  --}}
									<th class="text-right"></th>
								</tr>
							</thead>
							
							<tbody>
								@foreach($quizzes as $q)
									<tr>
										<td>{{$q->title}}</td>
										<td class="text-right">{{count($q->questions)}}</td>
										{{--  <td class="text-right">{{$q->hits}}%</td>  --}}

										<td class="td-actions text-right">
											<!-- <button class="btn btn-just-icon btn-link btn-warning">
												<i class="material-icons">edit</i>
											</button> -->

											<button class="btn btn-just-icon btn-link btn-danger" onclick="delete_info({{$q->id}}, '/api/study/')">
												<i class="material-icons">close</i>
											</button>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>  
	</div>
</div>

@endsection