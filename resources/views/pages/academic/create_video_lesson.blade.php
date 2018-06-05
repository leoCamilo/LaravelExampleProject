@extends('components.app', [ 'sidemenu' => ['side2' => 'true'], 'navbar' => []])
@section('content')

<div class="container-fluid">
	<div class="row">
	<div class="col-md-10 offset-md-1">
			<div class="card">
				<div class="card-header card-header-warning card-header-icon">
					<div class="card-icon">
						<i class="material-icons">add</i>
					</div>
					<h4 class="card-title">Adicionar Vídeo Aula</h4>
				</div>

				<div class="card-body">
					<form action="/videolessons" method="post">
						{!! csrf_field() !!}

						<div class="row">
							<div class="col-md-12">
								<div class="form-group has-warning">
									<label class="bmd-label-floating">Título</label>
									<input id="title" name="title" type="text" class="form-control" required="true" aria-required="true">
								</div>

								<div class="form-group has-warning">
									<label class="bmd-label-floating">Vídeo link (ex: https://vimeo.com/33219961)</label>
									<input id="link" name="link" type="text" class="form-control" required="true" aria-required="true">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-2">
								<div class="form-check">
									<label class="form-check-label">
										Premium
										<input name="premium" class="form-check-input" type="checkbox" value="1">
										<span class="form-check-sign">
											<span class="check"></span>
										</span>
									</label>
								</div>
							</div>
							
							<div class="col-md-10">
								<button type="submit" onclick="show_save_loading()" class="btn btn-warning pull-right">Adicionar</button>
							</div>
						</div>
						
						<div class="clearfix"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection