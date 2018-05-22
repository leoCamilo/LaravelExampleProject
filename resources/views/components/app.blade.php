<
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title> {{ config('app.name', 'Laravel') }} </title>
		
		<link rel="icon" href="../assets/img/favicon.png">
		<link rel="apple-touch-icon" href="../assets/img/apple-icon.png">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
		<link rel="stylesheet" href="{{ asset('css/material-dashboard.css') }}">
		<link rel="stylesheet" href="{{ asset('css/andregomes.css') }}">
	</head>

	<body class="">
		<div class="wrapper">
			@component('components/sidemenu', $sidemenu)
			@endcomponent

			<div class="main-panel">
				@include('components/navbar', $navbar)
				<div class="content"> @yield('content') </div>
				{{-- @include('components/footer') --}}
			</div>
		</div>
	</body>

	<script type="text/javascript" src="{{ asset('js/core/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/core/popper.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap-material-design.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/arrive.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/bootstrap-notify.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/jasny-bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/material.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/sweetalert2.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/jquery.select-bootstrap.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/material-dashboard.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/andregomes.js') }}"></script>

	<!-- <script type="text/javascript" src="{{ asset('js/plugins/nouislider.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/bootstrap-selectpicker.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/bootstrap-tagsinput.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/chartist.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/demo.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/jquery-jvectormap.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/jquery.bootstrap-wizard.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/jquery.datatables.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/jquery.validate.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/moment.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/fullcalendar.min.js') }}"></script> -->

</html>