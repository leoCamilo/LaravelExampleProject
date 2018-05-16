@extends('components.app', [ 'sidemenu' => ['side2' => 'true'], 'navbar' => [ 'new_url' => '\study\create' ] ])
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
									<th class="text-right">Quatidade de perguntas</th>
									<th class="text-right">Porcentagem de Acerto</th>
									<th class="text-right"></th>
								</tr>
							</thead>
							
							<tbody>
								<tr>
									<td>Direito Penal</td>
									<td class="text-right">20</td>
									<td class="text-right">70%</td>

									<td class="td-actions text-right">
										<button class="btn btn-just-icon btn-link btn-warning">
											<i class="material-icons">edit</i>
										</button>

										<button class="btn btn-just-icon btn-link btn-danger">
											<i class="material-icons">close</i>
										</button>
									</td>
								</tr>

								<tr>
									<td>Direito Civil</td>
									<td class="text-right">20</td>
									<td class="text-right">70%</td>

									<td class="td-actions text-right">
										<button class="btn btn-just-icon btn-link btn-warning">
											<i class="material-icons">edit</i>
										</button>

										<button class="btn btn-just-icon btn-link btn-danger">
											<i class="material-icons">close</i>
										</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>  
	</div>
</div>

@endsection