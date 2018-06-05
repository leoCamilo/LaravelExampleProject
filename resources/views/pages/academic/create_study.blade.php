@extends('components.app', [ 'sidemenu' => ['side22' => 'true'], 'navbar' => []])
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 offset-md-1">
			<form action="/study" method="POST">
				{!! csrf_field() !!}
				
				<div class="card">
					<div class="card-header card-header-warning card-header-icon">
						<div class="card-icon">
							<i class="material-icons">playlist_add_check</i>
						</div>
						
						<button id="add_question_btn" type="button" class="card-title btn btn-sm btn-link btn-warning">Adicionar pergunta</button>
					</div>

					<div class="card-body">
						<div id="questions_div" role="tablist">		<!-- HERE questions are added -->

							<div class="card-collapse">
								<div class="card-header" role="tab" id="headingOne">
									<h5 class="mb-0 text-center">
										<a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
											Questão #1
											<i class="material-icons">keyboard_arrow_down</i>
										</a>
									</h5>
								</div>

								<div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" style="">
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group has-warning">
													<div class="form-group">
														<textarea id="content" name="content" class="form-control" rows="5" required="true" aria-required="true">Digite a pergunta aqui!</textarea>
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
													<label class="bmd-label-floating">resposta</label>
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
													<label class="bmd-label-floating">resposta</label>
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
													<label class="bmd-label-floating">resposta</label>
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
													<label class="bmd-label-floating">resposta</label>
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
													<label class="bmd-label-floating">resposta</label>
													<input id="title" name="title" type="text" class="form-control" required="true" aria-required="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

					<div class="card-footer">
						<button type="button" class="btn btn-block btn-warning">Salvar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection