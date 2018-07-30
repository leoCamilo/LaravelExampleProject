@extends('components.app', [ 'sidemenu' => ['side32' => 'true'], 'navbar' => [ 'new_url' => '\team\create' ]])
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 offset-md-1">
			<div class="card">
				<div class="card-header card-header-icon card-header-warning">
					<div class="card-icon">
						<i class="material-icons">edit</i>
					</div>
					
					<h4 class="card-title ">Equipes</h4>
				</div>

				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								@foreach($teams as $t)
								
								<tr>
									<td>
										<a href="/team/{{$t->id}}">
											{{$t->title}}
										</a>
									</td>

									<td class="td-actions text-right">
										<button class="btn btn-just-icon btn-link btn-danger" onclick="delete_info({{$t->id}}, '/api/teams/')">
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