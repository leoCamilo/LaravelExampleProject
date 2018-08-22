@extends('components.app', [ 'sidemenu' => ['side22' => 'true'], 'navbar' => [ 'new_url' => '\study\create' ] ])
@section('content')

@php
	$quantities = array_fill (0, count($categories), 0);

	$colors = ['info', 'warning', 'success', 'warning', 'danger', 'info', 'rose', 'primary'];
	$icon = ['account_balance', 'work', 'accessibility_new', 'lock', 'shopping_cart', 'business', 'how_to_vote', 'computer'];
	
	foreach ($questions_count as $q)
		$quantities[$q->type - 1] = $q->type_count;
@endphp

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				@foreach ($categories as $c)
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="card card-stats">
						<div class="card-header card-header-@if($c->id < 9){{$colors[$c->id - 1]}} @endif card-header-icon">
							<div class="card-icon">
								<i class="material-icons">
									@if ($c->id < 9) {{$icon[$c->id - 1]}} @else help @endif
								</i>
							</div>
							<p class="card-category">Perguntas</p>
							<h3 class="card-title"> {{$quantities[$c->id - 1]}} </h3>
						</div>
						
						<div class="card-footer">
							<div class="stats">
								<a href="/study/{{$c->id}}">{{$c->title}}</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach				
			</div>
		</div>  
	</div>
</div>

@endsection