@extends('components.app', [ 'sidemenu' => ['side35' => 'true'], 'navbar' => []])
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
					<form action="/practical" method="POST" enctype='multipart/form-data'>
						@csrf

						<br>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group has-warning">
									<label class="bmd-label-floating">Titulo do guia</label>
									<input name="title" type="text" class="form-control" required="true" aria-required="true">
								</div>
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-md-2">
								<span class="btn btn-warning btn-file btn-link">
                                    <span>Adicionar Anexo</span>
									<input type="file" name="attachment" accept="application/pdf" data-max-size="1374575">
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

<script>
	$(function(){
		$('form').submit(function(){
			var isOk = true;
			
			$('input[type=file][data-max-size]').each(function(){
				if(typeof this.files[0] !== 'undefined'){
					var maxSize = parseInt($(this).attr('max-size'), 10),
					size = this.files[0].size;
					isOk = maxSize > size;

					if (!isOk)
						alert('arquivo muito grande');

					return isOk;
				}
			});
			
			return isOk;
		});
	});
</script>

@endsection