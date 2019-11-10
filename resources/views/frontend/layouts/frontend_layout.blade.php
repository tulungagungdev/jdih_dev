<!DOCTYPE html>
<html lang="zxx" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="UTF-8">
    <title>JDIH - Kota Blitar(DEV)</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,500" rel="stylesheet">
    <link href="{{ asset('themes/default/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('themes/default/assets/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('themes/default/assets/css/style.css') }}" rel="stylesheet" />
</head>

<body>

    @yield('content')

    @stack('script')
    <script src="{{ asset('themes/default/assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="{{ asset('themes/default/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('themes/default/assets/js/app.js') }}"></script>
    <script src="{{ asset('themes/default/assets/js/RFVenom.core.js') }}"></script>
    <script src="https://kit.fontawesome.com/cff7f8baae.js" crossorigin="anonymous"></script>
</body>

</html>
