@extends('components.app', [ 'sidemenu' => ['side26' => 'true'], 'navbar' => [ 'new_url' => '\category\create' ] ])
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 offset-md-1">
			<div class="card">
				<div class="card-header card-header-icon card-header-warning">
					<div class="card-icon">
						<i class="material-icons">assignment</i>
					</div>
					
					<h4 class="card-title ">Lista de Categorias</h4>
				</div>

				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								@foreach($categories as $c)
								
								<tr>
									<td width="150px" class="text-center">
										<img class="img-rect-on-table" src="{{$c->img_url}}">
									</td>
									
									<td> {{$c->title}} </td>
									
									<td class="td-actions text-right">
										<button class="btn btn-just-icon btn-link btn-danger" onclick="delete_info({{$c->id}}, '/api/category/')">
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