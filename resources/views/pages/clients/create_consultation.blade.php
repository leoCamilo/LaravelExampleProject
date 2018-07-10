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
							<div class="col-md-8">
								<div class="form-group has-warning">
									<label class="bmd-label-floating">Titulo da consulta</label>
									<input id="title" name="title" type="text" class="form-control" required="true" aria-required="true">
								</div>
							</div>

							<div class="col-md-4">
								<div class="btn-group bootstrap-select">
									<select name="type" class="selectpicker" data-size="5" data-style="btn btn-warning btn-round" title="Projetos de extensão" tabindex="-98">
										<option value="1" selected>Justiça comum</option>
										<option value="2">Justiça Federal</option>
										<option value="3">Justiça do Trabalho</option>
										<option value="4">Justiça Eleitoral</option>
										<option value="5">Tribunais Superiores</option>
									</select>
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