@extends('components.app', [ 'sidemenu' => ['side26' => 'true'], 'navbar' => []])
@section('content')

<div class="container-fluid">
	<div class="row">
	<div class="col-md-10 offset-md-1">
			<div class="card">
				<div class="card-header card-header-warning card-header-icon">
					<div class="card-icon">
						<i class="material-icons">add</i>
					</div>
					<h4 class="card-title">Adicionar Categoria</h4>
				</div>

				<div class="card-body">
					<form action="/category" method="POST" enctype='multipart/form-data'>
						@csrf

						<div class="row">
							<div class="col-md-4" style="margin-top:20px">
								<div class="fileinput fileinput-new text-center" data-provides="fileinput">
									<div class="fileinput-new thumbnail">
										<img id="img_tag" src="{{ asset('img/placeholder-image.png') }}" alt="...">
									</div>
									<div class="fileinput-preview fileinput-exists thumbnail"></div>
									<div>
										<span class="btn btn-warning btn-round btn-file">
											<span class="fileinput-new">Nova Foto</span>
											<span class="fileinput-exists">Trocar</span>
											<input type="file" name="img_url" accept="image/gif, image/jpeg, image/png" required>
										</span>
										<a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
									</div>
								</div>
							</div>
							
							<div class="col-md-8">
								<div class="form-group has-warning">
									<label class="bmd-label-floating">Título</label>
									<input id="title" name="title" type="text" class="form-control" required="true" aria-required="true">
								</div>
							</div>
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