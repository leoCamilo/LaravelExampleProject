@extends('components.app', [ 'sidemenu' => ['side4' => 'true'], 'navbar' => []])
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 offset-md-1">
			<div class="card">
				<div class="card-header card-header-icon card-header-warning">
					<div class="card-icon">
						<i class="material-icons">chat</i>
					</div>
					
					<h4 class="card-title ">Conversas</h4>
				</div>

				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<tbody>

								@foreach($messages as $m)
								<tr>
									<td><a href="/chat/{{$m->id}}">
										{{$m->name}}
									</a></td>
								</tr>
								@endforeach

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection