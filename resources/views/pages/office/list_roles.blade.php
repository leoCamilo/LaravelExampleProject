@extends('components.app', [ 'sidemenu' => ['side33' => 'true'], 'navbar' => [ 'new_url' => '\roles\create' ] ])
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 offset-md-1">
			<div class="card">
				<div class="card-header card-header-icon card-header-warning">
					<div class="card-icon">
						<i class="material-icons">assignment</i>
					</div>
					
					<h4 class="card-title ">Lista de Atuações</h4>
				</div>

				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								@foreach($roles as $r)
								
								<tr>
									<td>
										<a href="/roles/{{$r->id}}">
											{{$r->name}}
										</a>
									</td>
									
									<td class="td-actions text-right">
										<button class="btn btn-just-icon btn-link btn-danger" onclick="delete_info({{$r->id}}, '/api/roles/')">
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