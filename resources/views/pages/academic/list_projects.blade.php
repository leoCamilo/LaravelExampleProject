@extends('components.app', [ 'sidemenu' => ['side25' => 'true'], 'navbar' => [ 'new_url' => '\projects\create' ] ])
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 offset-md-1">
			<div class="card">
				<div class="card-header card-header-icon card-header-warning">
					<div class="card-icon">
						<i class="material-icons">assignment</i>
					</div>
					
					<h4 class="card-title ">Lista de Projetos</h4>
				</div>

				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								@foreach($projects as $p)
								
								<tr>
									<td> {{$p->title}} </td>

									<td>
										@switch($p->type)
											@case(1) Projeto de extensão @break
											@case(2) Projeto de pesquisa @break
											@case(3) Liga Acadêmica @break
										@endswitch
									</td>
									
									<td class="td-actions text-right">
										@if($p->attachment1 != '')
											<a href="{{$p->attachment1}}" download>
												<button class="btn btn-just-icon btn-link btn-warning">
													<i class="material-icons">attach_file</i>
												</button>
											</a>
										@endif

										@if($p->attachment2 != '')
											<a href="{{$p->attachment2}}" download>
												<button class="btn btn-just-icon btn-link btn-warning">
													<i class="material-icons">attach_file</i>
												</button>
											</a>
										@endif

										@if($p->attachment3 != '')
											<a href="{{$p->attachment3}}" download>
												<button class="btn btn-just-icon btn-link btn-warning">
													<i class="material-icons">attach_file</i>
												</button>
											</a>
										@endif

										<button class="btn btn-just-icon btn-link btn-danger" onclick="delete_info({{$p->id}}, '/api/projects/')">
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