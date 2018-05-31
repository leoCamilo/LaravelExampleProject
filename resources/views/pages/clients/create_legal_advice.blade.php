@extends('components.app', [ 'sidemenu' => ['side51' => 'true'], 'navbar' => []])
@section('content')

<div class="container-fluid">
	<div class="row">
	<div class="col-md-10 offset-md-1">
			<div class="card">
				<div class="card-header card-header-warning card-header-icon">
					<div class="card-icon">
						<i class="material-icons">add</i>
					</div>
					<h4 class="card-title">Adicionar</h4>
				</div>

				<div class="card-body">
					<form action="/legaladvice" method="POST" enctype='multipart/form-data'>
						@csrf

						<br>
						<div class="row">
							<div class="col-md-8">
								<div class="form-group has-warning">
									<label class="bmd-label-floating">Titulo do documento</label>
									<input id="title" name="title" type="text" class="form-control" required="true" aria-required="true">
								</div>
							</div>
							
							<div class="col-md-4">
								<div class="btn-group bootstrap-select">
									<select name="user_id" class="selectpicker" data-size="10" data-style="btn btn-warning btn-link" title="Selecione o Usuário" tabindex="-98">
									@foreach($users as $u)
										<option value="{{$u->id}}">{{$u->name}}</option>
									@endforeach
									</select>
								</div>
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-md-2">
								<span class="btn btn-warning btn-file">
                                    <span>Adcionar Anexo</span>
									<input type="file" name="attachment">
                                </span>
							</div>

							<div class="col-md-10">
								<button type="submit" onclick="show_save_loading()" class="btn btn-warning pull-right">Adicionar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection