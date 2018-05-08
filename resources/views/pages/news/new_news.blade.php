@extends('components.app')
@section('content')

<div class="container-fluid">
	<div class="row">
	<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header card-header-primary">
					<h4 class="card-title">Novidade</h4>
					<p class="card-category">Complete os dados para adicionar uma novidade</p>
				</div>
				<div class="card-body">
					<form>
						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label class="bmd-label-floating">Título</label>
									<input type="text" class="form-control">
								</div>
							</div>
							
							<div class="col-md-4">
								<div class="form-group">
									<label class="bmd-label-floating">Imagem</label>
									<input type="text" class="form-control">
									<!-- <div class="card-image">
										<a href="#">
											<img class="img" src="https://images.pexels.com/photos/466685/pexels-photo-466685.jpeg?auto=compress&cs=tinysrgb&h=350">
										</a>
										<div class="ripple-container"></div>
									</div> -->
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Conteúdo</label>
									
									<div class="form-group">
										<textarea class="form-control" rows="5"></textarea>
									</div>
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-primary pull-right">Salvar</button>
						<div class="clearfix"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection