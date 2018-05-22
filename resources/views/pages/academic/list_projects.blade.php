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
									<td>
										<a href="{{$p->link}}" target='_blank'>
											<div>
												{{$p->title}}
											</div>
										</a>
									</td>
									
									<td class="td-actions text-right">
										<button class="btn btn-just-icon btn-link btn-danger" onclick="delete_info({{$p->id}}, '/api/consultations/')">
											<i class="material-icons">close</i>
										</button>
									</td>
								</tr>

								@endforeach

								<tr>
									<td>
										Loren Ipsum dolor
									</td>
									
									<td class="td-actions text-right">
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