@extends('components.app', [ 'sidemenu' => ['side35' => 1], 'navbar' => [ 'new_url' => '\practical\create' ] ])
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header card-header-icon card-header-warning">
					<div class="card-icon">
						<i class="material-icons">library_books</i>
					</div>
					
					<h4 class="card-title ">Guias Práticos</h4>
				</div>

				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>Título</th>
									<th class="text-right"></th>
								</tr>
							</thead>

							<tbody>

								@foreach($practical_guides as $pg)
								<tr >
									<td> {{$pg->title}} </td>

									<td class="td-actions text-right">
										<a href="{{$pg->link}}" download>
											<button class="btn btn-just-icon btn-link btn-warning">
												<i class="material-icons">attach_file</i>
											</button>
										</a>

										<button class="btn btn-just-icon btn-link btn-danger" onclick="delete_info({{$pg->id}}, '/api/practical/')">
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