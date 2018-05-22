@extends('components.app', [ 'sidemenu' => ['side52' => 'true'], 'navbar' => []])
@section('content')

<div class="container-fluid">
	<div class="row">
	<div class="col-md-10 offset-md-1">
			<div class="card">
				<div class="card-header card-header-warning card-header-icon">
					<div class="card-icon">
						<i class="material-icons">add</i>
					</div>
					<h4 class="card-title">Adicionar Consulta</h4>
				</div>

				<div class="card-body">
					<form action="/consultations" method="POST">
						@csrf

						<div class="row">
							<div class="col-md-12">
								<div class="form-group has-warning">
									<label class="bmd-label-floating">Titulo da consulta</label>
									<input id="title" name="title" type="text" class="form-control" required="true" aria-required="true">
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<div class="form-group has-warning">
									<label class="bmd-label-floating">Link da consulta</label>
									<input id="link" name="link" type="text" class="form-control" required="true" aria-required="true">
								</div>
							</div>
						</div>

						<button type="submit" onclick="show_save_loading()" class="btn btn-warning pull-right">Adicionar</button>
						<div class="clearfix"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection