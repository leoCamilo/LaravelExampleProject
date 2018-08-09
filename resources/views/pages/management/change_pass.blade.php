@extends('components.app', [ 'sidemenu' => ['side71' => 'true'], 'navbar' => []])
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header card-header-warning card-header-icon">
					<div class="card-icon">
						<i class="material-icons">lock</i>
					</div>
					<h4 class="card-title">Redefinir Senha</h4>
				</div>

				<form action="/change_pass" method="POST" enctype='multipart/form-data'>
					@csrf
					
					<div class="card-body">
						<div class="row"> 
							<div class="col-md-12">
								<div class="form-group has-warning">
									<label class="bmd-label-floating">Senha antiga</label>
									<input id="title" name="oldPass" type="password" class="form-control" required="true" aria-required="true">
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<div class="form-group has-warning">
									<label class="bmd-label-floating">Nova senha</label>
									<input id="title" name="newPass" type="password" class="form-control" required="true" aria-required="true">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group has-warning">
									<label class="bmd-label-floating">Repetir senha</label>
									<input id="title" name="newPass2" type="password" class="form-control" required="true" aria-required="true">
								</div>
							</div>
						</div>
					</div>
				
					<div class="card-footer">
						<div class="col-md-6">
							<button type="submit" onclick="show_save_loading()" class="btn btn-warning pull-right">Redefinir</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection