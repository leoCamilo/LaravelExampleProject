@extends('components.app', [ 'sidemenu' => ['side23' => 1], 'navbar' => [ 'new_url' => '\supportcontent\create' ] ])
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header card-header-icon card-header-warning">
					<div class="card-icon">
						<i class="material-icons">library_books</i>
					</div>
					
					<h4 class="card-title ">Material de apoio</h4>
				</div>

				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>Título</th>
									<th class="text-right">Premium</th>
									<th class="text-right"></th>
								</tr>
							</thead>

							<tbody>

								@foreach($support_content as $sc)
								<tr >
									<td> {{$sc->title}} </td>
									
									<td class="td-actions text-right">
										@if($sc->premium)
										<i class="material-icons">check</i>
										@endif
									</td>

									<td class="td-actions text-right">
										<a href="{{$sc->link}}" download>
											<button class="btn btn-just-icon btn-link btn-warning">
												<i class="material-icons">attach_file</i>
											</button>
										</a>

										<button class="btn btn-just-icon btn-link btn-danger" onclick="delete_info({{$sc->id}}, '/api/supportcontent/')">
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