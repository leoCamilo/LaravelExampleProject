@extends('components.app', [ 'sidemenu' => ['side1' => 'true'], 'navbar' => []])
@section('content')

<div class="container-fluid">
	<div class="row">
	<div class="col-md-10 offset-md-1">
			<div class="card">
				<div class="card-header card-header-warning card-header-icon">
					<div class="card-icon">
						<i class="material-icons">add</i>
					</div>
					<h4 class="card-title">Adicionar Novidade</h4>
				</div>

				<div class="card-body">
					<form action="/news" method="post" onsubmit="return add_img_to_form();">
						{!! csrf_field() !!}

						<div class="row">
							<div class="col-md-4" style="margin-top:20px">
								<div class="fileinput fileinput-new text-center" data-provides="fileinput">
									<div class="fileinput-new thumbnail">
										<img id="img_tag" src="{{ asset('img/placeholder-image.png') }}" alt="...">
									</div>
									<div class="fileinput-preview fileinput-exists thumbnail"></div>
									<div>
										<span class="btn btn-warning btn-round btn-file">
											<span class="fileinput-new">Select image</span>
											<span class="fileinput-exists">Change</span>
											<input type="file" name="news_img" accept="image/gif, image/jpeg, image/png">
											<input type="hidden" id="img_data" name="img_data">
										</span>
										<a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
									</div>
								</div>
							</div>
							
							<div class="col-md-8">
								<div class="form-group has-warning">
									<label class="bmd-label-floating">Título</label>
									<input id="title" name="title" type="text" class="form-control">
								</div>

								<div class="form-group has-warning">
									<label>Conteúdo</label>
									
									<div class="form-group">
										<textarea id="content" name="content" class="form-control" rows="7"></textarea>
									</div>
								</div>
							</div>
						</div>

						<button type="submit" class="btn btn-warning pull-right">Salvar</button>
						<div class="clearfix"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	function add_img_to_form() {
		// console.log($('#img_tag').attr("src"));
		return true;
	}
</script>

@endsection