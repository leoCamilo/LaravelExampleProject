@extends('components.app', [ 'sidemenu' => ['side22' => 'true'], 'navbar' => []])
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 offset-md-1">
			<form action="/study/{{$question->id}}" method="POST">
				@csrf
				@method('PUT')
				
				<div class="card">
					<div class="card-header card-header-warning card-header-icon">
						<div class="card-icon">
							<i class="material-icons">playlist_add_check</i>
						</div>
					</div>

					<div class="card-body">
						<div id="questions_div" role="tablist">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group has-warning">
										<div class="form-group">
											<textarea name="question" class="form-control" rows="5" required="true" aria-required="true" placeholder="Digite a pergunta aqui!">{{$question->question}}</textarea>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-1 checkbox-radios text-center">
									<div class="form-check">
										<label class="form-check-label">
											<input class="form-check-input" type="radio" name="correct" value="1" @if($question->correct == 1) checked @endif>
											<span class="circle">
												<span class="check"></span>
											</span>
										</label>
									</div>
								</div>

								<div class="col-md-11">
									<div class="form-group has-warning">
										<label class="bmd-label-floating">resposta</label>
										<input name="answer_1" type="text" class="form-control" required="true" aria-required="true" value="{{$question->answer_1}}">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-1 checkbox-radios text-center">
									<div class="form-check">
										<label class="form-check-label">
											<input class="form-check-input" type="radio" name="correct" value="2" @if($question->correct == 2) checked @endif>
											<span class="circle">
												<span class="check"></span>
											</span>
										</label>
									</div>
								</div>

								<div class="col-md-11">
									<div class="form-group has-warning">
										<label class="bmd-label-floating">resposta</label>
										<input name="answer_2" type="text" class="form-control" required="true" aria-required="true" value="{{$question->answer_2}}">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-1 checkbox-radios text-center">
									<div class="form-check">
										<label class="form-check-label">
											<input class="form-check-input" type="radio" name="correct" value="3" @if($question->correct == 3) checked @endif>
											<span class="circle">
												<span class="check"></span>
											</span>
										</label>
									</div>
								</div>

								<div class="col-md-11">
									<div class="form-group has-warning">
										<label class="bmd-label-floating">resposta</label>
										<input name="answer_3" type="text" class="form-control" required="true" aria-required="true" value="{{$question->answer_3}}">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-1 checkbox-radios text-center">
									<div class="form-check">
										<label class="form-check-label">
											<input class="form-check-input" type="radio" name="correct" value="4" @if($question->correct == 4) checked @endif>
											<span class="circle">
												<span class="check"></span>
											</span>
										</label>
									</div>
								</div>

								<div class="col-md-11">
									<div class="form-group has-warning">
										<label class="bmd-label-floating">resposta</label>
										<input name="answer_4" type="text" class="form-control" required="true" aria-required="true" value="{{$question->answer_4}}">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-1 checkbox-radios text-center">
									<div class="form-check">
										<label class="form-check-label">
											<input class="form-check-input" type="radio" name="correct" value="5" @if($question->correct == 5) checked @endif>
											<span class="circle">
												<span class="check"></span>
											</span>
										</label>
									</div>
								</div>

								<div class="col-md-11">
									<div class="form-group has-warning">
										<label class="bmd-label-floating">resposta</label>
										<input name="answer_5" type="text" class="form-control" required="true" aria-required="true" value="{{$question->answer_5}}">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="card-footer">
						<div class="col-md-6">
							<div class="btn-group bootstrap-select">
								<select name="type" class="selectpicker" data-size="10" data-style="btn btn-warning btn-round" title="Direito" tabindex="-98">
									<option value="1" selected>Direito Constitucional</option>
									<option value="2">Direito do Trabalho</option>
									<option value="3">Direito Civil</option>
									<option value="4">Direito Penal</option>
									<option value="5">Direito do Consumidor</option>
									<option value="6">Direito Empresarial</option>
									<option value="7">Direito Eleitoral</option>
									<option value="8">Direito Administrativo</option>
								</select>
							</div>	
						</div>

						<div class="col-md-6">
							<button type="submit" onclick="show_save_loading()" class="btn btn-round btn-block btn-warning">Salvar</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection