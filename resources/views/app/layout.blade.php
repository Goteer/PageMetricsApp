
<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    @yield('css') 
</head>

<div class='navbar'>
    @include('app.navbar')
</div>

<div class='content'>
    @yield('content')
</div>

<div class='footer'>
    ESTO DEBERIA SER UN FOOTER
</div>



@yield('scripts') 