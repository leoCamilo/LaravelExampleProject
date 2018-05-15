@extends('components.app', [ 'sidemenu' => ['side3' => 'true'], 'navbar' => []])
@section('content')

<div class="container-fluid">
	<div class="row">
	<div class="col-md-10 offset-md-1">
			<div class="card card-plain">
				<div class="card-header card-header-warning card-header-icon">
					<div class="card-icon">
						<i class="material-icons">edit</i>
					</div>
					<h4 class="card-title">Descrição da Equipe</h4>
				</div>

				<div class="card-body">
					<form action="/team/1" method="POST">
						@csrf
						@method('PUT')

						<div class="form-group has-warning">
							<div class="form-group">
								<textarea id="content" name="content" class="form-control" rows="13" required="true" aria-required="true">{{$team->content}}</textarea>
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