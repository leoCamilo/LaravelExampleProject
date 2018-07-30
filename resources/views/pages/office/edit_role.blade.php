@extends('components.app', [ 'sidemenu' => ['side33' => 'true'], 'navbar' => []])
@section('content')

<div class="container-fluid">
	<div class="row">
	<div class="col-md-10 offset-md-1">
			<div class="card">
				<div class="card-header card-header-warning card-header-icon">
					<div class="card-icon">
						<i class="material-icons">edit</i>
					</div>
					<h4 class="card-title">Editar Atuação</h4>
				</div>

				<div class="card-body">
					<form action="/roles/{{$role->id}}" method="POST">
						@csrf
						@method('PUT')

						<div class="row">
							<div class="col-md-12">
								<div class="form-group has-warning">
									<label class="bmd-label-floating">Nome da Equipe</label>
									<input name="name" type="text" class="form-control" required="true" aria-required="true" value="{{$role->name}}">
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group has-warning">
									<label>Descrição da Equipe</label>
									
									<div class="form-group">
										<textarea name="content" class="form-control" rows="7" required aria-required="true">{{$role->content}}</textarea>
									</div>
								</div>
							</div>
						</div>
						

						<button type="submit" onclick="show_save_loading()" class="btn btn-warning pull-right">Alterar</button>
						<div class="clearfix"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection