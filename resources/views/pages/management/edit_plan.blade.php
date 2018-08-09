@extends('components.app', [ 'sidemenu' => ['side72' => 'true'], 'navbar' => []])
@section('content')

<div class="container-fluid">
	<div class="row">
	<div class="col-md-8 offset-md-2">
			<div class="card card-plain">
				<div class="card-header card-header-warning card-header-icon">
					<div class="card-icon">
						<i class="material-icons">edit</i>
					</div>
					<h4 class="card-title">Alterar dados dos Planos</h4>
				</div>

				<div class="card-body">
					<br><br>
					<form action="/plan/1" method="POST">
						@csrf
						@method('PUT')

						<div class="form-group has-warning">
							<label class="bmd-label-floating">Nome do plano Mensal</label>
							<input name="name1" type="text" class="form-control" required="true" aria-required="true" value="{{$plans[0]->title}}">
						</div>

						<div class="form-group has-warning">
							<label class="bmd-label-floating">Valor do plano Mensal</label>
							<input name="value1" type="text" class="form-control" required="true" aria-required="true" value="{{$plans[0]->value}}">
						</div>

						<div class="form-group has-warning">
							<label class="bmd-label-floating">Nome do plano Anual</label>
							<input name="name2" type="text" class="form-control" required="true" aria-required="true" value="{{$plans[1]->title}}">
						</div>

						<div class="form-group has-warning">
							<label class="bmd-label-floating">Valor do plano Anual</label>
							<input name="value2" type="text" class="form-control" required="true" aria-required="true" value="{{$plans[1]->value}}">
						</div>

						<button type="submit" onclick="show_save_loading()" class="btn btn-warning pull-right">Salvar</button>
						<div class="clearfix"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection