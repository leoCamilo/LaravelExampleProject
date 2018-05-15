@extends('components.app', [ 'sidemenu' => ['side3' => 'true'], 'navbar' => [ 'new_url' => '\awards\create' ] ])
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 offset-md-1">
			<div class="card">
				<div class="card-header card-header-icon card-header-warning">
					<div class="card-icon">
						<i class="material-icons">assignment</i>
					</div>
					
					<h4 class="card-title ">Lista de Prêmios</h4>
				</div>

				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								@foreach($awards as $a)
								
								<tr>
									<td width="150px" class="text-center">
										<img class="img-circle-on-table" src="{{$a->img_url}}">
									</td>
									
									<td> {{$a->title}} </td>
									
									<td class="td-actions text-right">
										<button class="btn btn-just-icon btn-link btn-danger" onclick="delete_info({{$a->id}}, '/api/awards/')">
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