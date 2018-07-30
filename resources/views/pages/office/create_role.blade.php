@extends('components.app', [ 'sidemenu' => ['side33' => 'true'], 'navbar' => []])
@section('content')

<div class="container-fluid">
	<div class="row">
	<div class="col-md-10 offset-md-1">
			<div class="card">
				<div class="card-header card-header-warning card-header-icon">
					<div class="card-icon">
						<i class="material-icons">add</i>
					</div>
					<h4 class="card-title">Adicionar Atuação</h4>
				</div>

				<div class="card-body">
					<form action="/roles" method="POST">
						@csrf

						<div class="row">
							<div class="col-md-12">
								<div class="form-group has-warning">
									<label class="bmd-label-floating">Nome da Atuação</label>
									<input name="name" type="text" class="form-control" required="true" aria-required="true">
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group has-warning">
									<label>Conteúdo</label>
									
									<div class="form-group">
										<textarea name="content" class="form-control" rows="7" required aria-required="true"></textarea>
									</div>
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