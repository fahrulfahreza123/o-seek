<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>O-SEEK | {{ $title }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets2/font-awesome/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets2/css/landing_pages.css') }}">

    @yield('css')

  </head>
  <body>
    @include('viewer.partials.navbar')

    @yield('main')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    {{-- <script src="{{ asset('assets2/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets2/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('assets2/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets2/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets2/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets2/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets2/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets2/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('assets2/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets2/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('assets2/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets2/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets2/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('assets2/js/google-map.js') }}"></script>
    <script src="{{ asset('assets2/js/main.js') }}"></script>
    <script type="module" src="{{ asset('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js') }}"></script>
    <script nomodule src="{{ asset('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script> --}}
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}

    {{-- <script>
		$(document).ready(function(){
			$('#heroCarousel').carousel({
				interval: 5000 // Optional, to control automatic sliding
			});
		});
	</script> --}}

</body>

</html>