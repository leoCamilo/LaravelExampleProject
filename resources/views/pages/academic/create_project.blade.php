@extends('components.app', [ 'sidemenu' => ['side25' => 'true'], 'navbar' => []])
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 offset-md-1">
			<div class="card">
				<div class="card-header card-header-warning card-header-icon">
					<div class="card-icon">
						<i class="material-icons">add</i>
					</div>
					<h4 class="card-title">Adicionar Projeto</h4>
				</div>

				<div class="card-body">
					<form action="/projects" method="POST" enctype='multipart/form-data'>
						@csrf

						<div class="row"> 
							<div class="col-md-8">
								<div class="form-group has-warning">
									<label class="bmd-label-floating">Titulo do projeto</label>
									<input id="title" name="title" type="text" class="form-control" required="true" aria-required="true">
								</div>
							</div>
							
							<div class="col-md-4">
								<div class="btn-group bootstrap-select">
									<select name="type" class="selectpicker" data-size="5" data-style="btn btn-warning btn-round" title="Projetos de extensão" tabindex="-98">
										<option value="1" selected>Projetos de extensão</option>
										<option value="2">Projetos de pesquisa</option>
										<option value="3">Ligas Acadêmicas</option>
									</select>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<label>Sobre o projeto</label>
									
								<div class="form-group">
									<textarea name="about" class="form-control" rows="8" required="true" aria-required="true"></textarea>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-2">
								<span class="btn btn-warning btn-file">
                                    <span>Anexo 1</span>
									<input type="file" name="attachment1" accept="application/pdf" data-max-size="1374575">
                                </span>
							</div>

							<div class="col-md-2">
								<span class="btn btn-warning btn-file">
                                    <span>Anexo 2</span>
									<input type="file" name="attachment2" accept="application/pdf" data-max-size="1374575">
                                </span>
							</div>

							<div class="col-md-2">
								<span class="btn btn-warning btn-file">
                                    <span>Anexo 3</span>
									<input type="file" name="attachment3" accept="application/pdf" data-max-size="1374575">
                                </span>
							</div>
							
							<div class="col-md-6">
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