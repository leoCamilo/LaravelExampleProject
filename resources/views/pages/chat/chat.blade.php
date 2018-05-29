@extends('components.app', [ 'sidemenu' => ['side4' => 'true'], 'navbar' => []])
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">

			<div class="card card-timeline card-plain">
                <div class="card-body">
                    <ul class="timeline timeline-simple">
						<li class="timeline-inverted">
							<div class="timeline-badge warning">
								<i class="material-icons">add</i>
							</div>

							<div class="timeline-panel">
								<div class="timeline-body">
									<div class="form-group">
										<textarea id="message" class="form-control" rows="5" required="true" aria-required="true" placeholder="Responder..."></textarea>
									</div>
								</div>
								
								<div class="timeline-footer">
									<button type="buttom" onclick="send_msg({{$user_id}})" class="btn btn-round btn-warning pull-right">Responder</button>
								</div>
							</div>
						</li>

						@foreach($messages as $m)

                        <li class="timeline-inverted">

							@if($m->from != 1)
								<div class="timeline-badge success">
									<i class="material-icons">people</i>
								</div>
							@else
								<div class="timeline-badge warning">
									<i class="material-icons">chat</i>
								</div>
							@endif
                            
							<div class="timeline-panel">
                                <div class="timeline-body">
                                    <p>{{$m->message}}</p>
                                </div>

                                <h6>
                                    <i class="ti-time"></i>
                                    {{$m->created_at}}
                                </h6>
                          </div>
                        </li>

						@endforeach
                    </ul>
                </div>
            </div>

		</div>
	</div>
</div>

@endsection