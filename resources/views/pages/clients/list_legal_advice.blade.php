@extends('components.app', [ 'sidemenu' => ['side51' => 1], 'navbar' => [ 'new_url' => '\legaladvice\create' ] ])
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header card-header-icon card-header-warning">
					<div class="card-icon">
						<i class="material-icons">book</i>
					</div>
					
					<h4 class="card-title ">Assessoria Jurídica</h4>
				</div>

				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>Título</th>
									<th class="text-right">Cliente</th>
									<th class="text-right"></th>
								</tr>
							</thead>

							<tbody>

								@foreach($legaladvice as $la)
								<tr>
									<td> {{$la->title}} </td>

									<td class="td-actions text-right">
										{{$la->name}}
									</td>

									<td class="td-actions text-right">
										<a href="{{$la->link}}" download>
											<button class="btn btn-just-icon btn-link btn-warning">
												<i class="material-icons">attach_file</i>
											</button>
										</a>

										<button class="btn btn-just-icon btn-link btn-danger" onclick="delete_info({{$la->id}}, '/api/legaladvice/')">
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