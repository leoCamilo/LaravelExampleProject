@extends('components.app', [ 'sidemenu' => ['side3' => 'true'], 'navbar' => []])
@section('content')

<div class="container-fluid">
	<div class="row">
	<div class="col-md-10 offset-md-1">
			<div class="card">
				<div class="card-header card-header-warning card-header-icon">
					<div class="card-icon">
						<i class="material-icons">add</i>
					</div>
					<h4 class="card-title">Adicionar Estudo</h4>
				</div>

				<div class="card-body">
					<form action="/roles" method="POST">
						@csrf

						<div class="row">
							<div class="col-md-12">
								<div class="form-group has-warning">
									<label>Questão</label>
									
									<div class="form-group">
										<textarea id="content" name="content" class="form-control" rows="5" required="true" aria-required="true"></textarea>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-1 checkbox-radios text-center">
								<div class="form-check">
									<label class="form-check-label">
										<input class="form-check-input" type="radio" name="correctOpt" value="1" checked="">
										<span class="circle">
											<span class="check"></span>
										</span>
									</label>
								</div>
							</div>

							<div class="col-md-11">
								<div class="form-group has-warning">
									<label class="bmd-label-floating">resposta 1</label>
									<input id="title" name="title" type="text" class="form-control" required="true" aria-required="true">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-1 checkbox-radios text-center">
								<div class="form-check">
									<label class="form-check-label">
										<input class="form-check-input" type="radio" name="correctOpt" value="2">
										<span class="circle">
											<span class="check"></span>
										</span>
									</label>
								</div>
							</div>

							<div class="col-md-11">
								<div class="form-group has-warning">
									<label class="bmd-label-floating">resposta 2</label>
									<input id="title" name="title" type="text" class="form-control" required="true" aria-required="true">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-1 checkbox-radios text-center">
								<div class="form-check">
									<label class="form-check-label">
										<input class="form-check-input" type="radio" name="correctOpt" value="3">
										<span class="circle">
											<span class="check"></span>
										</span>
									</label>
								</div>
							</div>

							<div class="col-md-11">
								<div class="form-group has-warning">
									<label class="bmd-label-floating">resposta 3</label>
									<input id="title" name="title" type="text" class="form-control" required="true" aria-required="true">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-1 checkbox-radios text-center">
								<div class="form-check">
									<label class="form-check-label">
										<input class="form-check-input" type="radio" name="correctOpt" value="4">
										<span class="circle">
											<span class="check"></span>
										</span>
									</label>
								</div>
							</div>

							<div class="col-md-11">
								<div class="form-group has-warning">
									<label class="bmd-label-floating">resposta 4</label>
									<input id="title" name="title" type="text" class="form-control" required="true" aria-required="true">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-1 checkbox-radios text-center">
								<div class="form-check">
									<label class="form-check-label">
										<input class="form-check-input" type="radio" name="correctOpt" value="5">
										<span class="circle">
											<span class="check"></span>
										</span>
									</label>
								</div>
							</div>

							<div class="col-md-11">
								<div class="form-group has-warning">
									<label class="bmd-label-floating">resposta 5</label>
									<input id="title" name="title" type="text" class="form-control" required="true" aria-required="true">
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