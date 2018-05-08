@extends('components.app')
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card card-plain">
				<div class="card-header card-header-primary">
					<h4 class="card-title mt-0"> Table on Plain Background</h4>
					<p class="card-category">Lista de publicações de novidades</p>
				</div>
				
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-hover">
							<thead class="">
								<th> Imagem </th>
								<th> Conteúdo </th>
								<th> Data </th>
								<th></th>	<!-- for options -->
							</thead>

							<tbody>
								<tr>
									<td> 1 </td>
									
									<td class="td-name">
										Spring Jacket
										<br><br>
										<small>by Dolce&amp;Gabbana</small>
									</td>

									<td><small>16:27 ás 30/05/2018</small></td>

									<td class="td-actions text-right">
                                      <button type="button" rel="tooltip" class="btn btn-warning btn-link" data-original-title="" title="">
                                          <i class="material-icons">visibility_off</i>
                                      </button>
                                      <button type="button" rel="tooltip" class="btn btn-danger btn-link" data-original-title="" title="">
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