@extends('components.app', [ 'sidemenu' => ['side1' => 'true'] ])
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card card-plain">
				<div class="card-header card-header-primary">
					<h4 class="card-title mt-0">Lista de publicações de novidades</h4>
					<!-- <p class="card-category">Lista de publicações de novidades</p> -->
				</div>
				
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-hover">
							<thead class="">
								<th class="text-center" style="width:20%"> Imagem </th>
								<th style="width:50%"> Conteúdo </th>
								<th class="text-center" style="width:20%"> Data </th>
								<th style="width:10%"></th>	<!-- for options -->
							</thead>

							<tbody>
								@foreach($news as $n)

								<tr>
									<td>
										<div class="img-container">
											<img class="news-img" src="{{ $n->img_url }}">
                                      </div>
									</td>
									
									<td class="td-name">
										{{ $n->title }}
										<br><br>
										<small>{{ $n->content }}</small>
									</td>

									<td class="text-center"><small>{{ $n->created_at }}</small></td>	<!-- 16:27 ás 30/05/2018 -->
									
									<td class="td-actions text-right">
										<button type="button" rel="tooltip" class="btn btn-warning btn-link" data-original-title="" title="">
											<i class="material-icons">visibility_off</i>
										</button>
										
										<button type="button" rel="tooltip" class="btn btn-danger btn-link" data-original-title="" title="">
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