@extends('components.app', [ 'sidemenu' => ['side22' => 'true'], 'navbar' => [ 'new_url' => '\study\create' ] ])
@section('content')

@php
	$quantities = array(0, 0, 0, 0, 0, 0, 0, 0);
	
	foreach ($questions_count as $q)
		$quantities[$q->type - 1] = $q->type_count;
@endphp

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="card card-stats">
						<div class="card-header card-header-info card-header-icon">
							<div class="card-icon">
								<i class="material-icons">account_balance</i>
							</div>
							<p class="card-category">Perguntas</p>
							<h3 class="card-title"> {{$quantities[0]}} </h3>
						</div>
						
						<div class="card-footer">
							<div class="stats">
								<a href="/study/1">Direito Constitucional</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="card card-stats">
						<div class="card-header card-header-success card-header-icon">
							<div class="card-icon">
								<i class="material-icons">work</i>
							</div>
							<p class="card-category">Perguntas</p>
							<h3 class="card-title"> {{$quantities[1]}} </h3>
						</div>
						
						<div class="card-footer">
							<div class="stats">
								<a href="/study/2">Direito do Trabalho</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="card card-stats">
						<div class="card-header card-header-warning card-header-icon">
							<div class="card-icon">
								<i class="material-icons">accessibility_new</i>
							</div>
							<p class="card-category">Perguntas</p>
							<h3 class="card-title"> {{$quantities[2]}} </h3>
						</div>
						
						<div class="card-footer">
							<div class="stats">
								<a href="/study/3">Direito Civil</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="card card-stats">
						<div class="card-header card-header-danger card-header-icon">
							<div class="card-icon">
								<i class="material-icons">lock</i>
							</div>
							<p class="card-category">Perguntas</p>
							<h3 class="card-title"> {{$quantities[3]}} </h3>
						</div>
						
						<div class="card-footer">
							<div class="stats">
								<a href="/study/4">Direito Penal</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="card card-stats">
						<div class="card-header card-header-warning card-header-icon">
							<div class="card-icon">
								<i class="material-icons">shopping_cart</i>
							</div>
							<p class="card-category">Perguntas</p>
							<h3 class="card-title"> {{$quantities[4]}} </h3>
						</div>
						
						<div class="card-footer">
							<div class="stats">
								<a href="/study/5">Direito do Consumidor</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="card card-stats">
						<div class="card-header card-header-info card-header-icon">
							<div class="card-icon">
								<i class="material-icons">business</i>
							</div>
							<p class="card-category">Perguntas</p>
							<h3 class="card-title"> {{$quantities[5]}} </h3>
						</div>
						
						<div class="card-footer">
							<div class="stats">
								<a href="/study/6">Direito Empresarial</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="card card-stats">
						<div class="card-header card-header-rose card-header-icon">
							<div class="card-icon">
								<i class="material-icons">how_to_vote</i>
							</div>
							<p class="card-category">Perguntas</p>
							<h3 class="card-title"> {{$quantities[6]}} </h3>
						</div>
						
						<div class="card-footer">
							<div class="stats">
								<a href="/study/7">Direito Eleitoral</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="card card-stats">
						<div class="card-header card-header-primary card-header-icon">
							<div class="card-icon">
								<i class="material-icons">computer</i>
							</div>
							<p class="card-category">Perguntas</p>
							<h3 class="card-title"> {{$quantities[7]}} </h3>
						</div>
						
						<div class="card-footer">
							<div class="stats">
								<a href="/study/8">Direito Administrativo</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>  
	</div>
</div>

@endsection