@extends('components.app', [ 'sidemenu' => ['side6' => 'true'], 'navbar' => [] ])
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header card-header-icon card-header-warning">
					<div class="card-icon">
						<i class="material-icons">supervisor_account</i>
					</div>
					
					<h4 class="card-title ">Lista de Usuários</h4>
				</div>

				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>Nome</th>
									<th>E-mail</th>
									<th class="text-right">Premium</th>
								</tr>
							</thead>
								
							<tbody>
								
								<tr >
									<td> Leonardo Camilo Ribeiro </td>
									<td> leo.camilo.ribeiro@gmail.com </td>
									
									<td class="td-actions text-right">
										<div class="form-check">
											<label class="form-check-label">
												<input class="form-check-input" type="checkbox" value="" checked="">
												<span class="form-check-sign">
													<span class="check"></span>
												</span>
											</label>
										</div>
									</td>
								</tr>

								<tr>
									<td> Leonardo Camilo Ribeiro </td>
									<td> leo.camilo.ribeiro@gmail.com </td>
									
									<td class="td-actions text-right">
										<div class="form-check">
											<label class="form-check-label">
												<input class="form-check-input" type="checkbox">
												<span class="form-check-sign">
													<span class="check"></span>
												</span>
											</label>
										</div>
									</td>
								</tr>

								<tr>
									<td> Leonardo Camilo Ribeiro </td>
									<td> leo.camilo.ribeiro@gmail.com </td>
									
									<td class="td-actions text-right">
										<div class="form-check">
											<label class="form-check-label">
												<input class="form-check-input" type="checkbox" value="" checked="">
												<span class="form-check-sign">
													<span class="check"></span>
												</span>
											</label>
										</div>
									</td>
								</tr>

								<tr>
									<td> Leonardo Camilo Ribeiro </td>
									<td> leo.camilo.ribeiro@gmail.com </td>
									
									<td class="td-actions text-right">
										<div class="form-check">
											<label class="form-check-label">
												<input class="form-check-input" type="checkbox">
												<span class="form-check-sign">
													<span class="check"></span>
												</span>
											</label>
										</div>
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