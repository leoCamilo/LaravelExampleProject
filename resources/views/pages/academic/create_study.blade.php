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
					</div>

					<div class="card-body">
						<div id="questions_div" role="tablist">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group has-warning">
										<div class="form-group">
											<textarea name="question" class="form-control" rows="5" required="true" aria-required="true" placeholder="Digite a pergunta aqui!"></textarea>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-1 checkbox-radios text-center">
									<div class="form-check">
										<label class="form-check-label">
											<input class="form-check-input" type="radio" name="correct" value="1" checked="">
											<span class="circle">
												<span class="check"></span>
											</span>
										</label>
									</div>
								</div>

								<div class="col-md-11">
									<div class="form-group has-warning">
										<label class="bmd-label-floating">resposta</label>
										<input name="answer_1" type="text" class="form-control" required="true" aria-required="true">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-1 checkbox-radios text-center">
									<div class="form-check">
										<label class="form-check-label">
											<input class="form-check-input" type="radio" name="correct" value="2">
											<span class="circle">
												<span class="check"></span>
											</span>
										</label>
									</div>
								</div>

								<div class="col-md-11">
									<div class="form-group has-warning">
										<label class="bmd-label-floating">resposta</label>
										<input name="answer_2" type="text" class="form-control" required="true" aria-required="true">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-1 checkbox-radios text-center">
									<div class="form-check">
										<label class="form-check-label">
											<input class="form-check-input" type="radio" name="correct" value="3">
											<span class="circle">
												<span class="check"></span>
											</span>
										</label>
									</div>
								</div>

								<div class="col-md-11">
									<div class="form-group has-warning">
										<label class="bmd-label-floating">resposta</label>
										<input name="answer_3" type="text" class="form-control" required="true" aria-required="true">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-1 checkbox-radios text-center">
									<div class="form-check">
										<label class="form-check-label">
											<input class="form-check-input" type="radio" name="correct" value="4">
											<span class="circle">
												<span class="check"></span>
											</span>
										</label>
									</div>
								</div>

								<div class="col-md-11">
									<div class="form-group has-warning">
										<label class="bmd-label-floating">resposta</label>
										<input name="answer_4" type="text" class="form-control" required="true" aria-required="true">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-1 checkbox-radios text-center">
									<div class="form-check">
										<label class="form-check-label">
											<input class="form-check-input" type="radio" name="correct" value="5">
											<span class="circle">
												<span class="check"></span>
											</span>
										</label>
									</div>
								</div>

								<div class="col-md-11">
									<div class="form-group has-warning">
										<label class="bmd-label-floating">resposta</label>
										<input name="answer_5" type="text" class="form-control" required="true" aria-required="true">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="card-footer">
						<div class="col-md-6">
							<div class="btn-group bootstrap-select">
								<select name="type" class="selectpicker" data-size="10" data-style="btn btn-warning btn-round" title="Categoria" tabindex="-98" required>
									@foreach ($categories as $c)
									<option value="{{$c->id}}">{{$c->title}}</option>
									@endforeach categories
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