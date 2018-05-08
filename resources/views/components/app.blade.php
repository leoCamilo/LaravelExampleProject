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
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
		<link href="{{ asset('css/material-dashboard.css') }}" rel="stylesheet">
		<link href="{{ asset('css/andregomes.css') }}" rel="stylesheet">
	</head>

	<body class="">
		<div class="wrapper">
			@component('components/sidemenu', $sidemenu)
			@endcomponent

			<div class="main-panel">
				@include('components/navbar')
				<div class="content"> @yield('content') </div>
				@include('components/footer')
			</div>
		</div>
	</body>

	<script type="text/javascript" src="{{ asset('js/core/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/core/popper.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap-material-design.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/chartist.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/arrive.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/bootstrap-notify.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/material-dashboard.js') }}"></script>

</html>