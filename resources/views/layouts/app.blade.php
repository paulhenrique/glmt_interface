<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page-name') {{'GLMT'}} </title>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    {{--=================== TODO =================== --}}
    {{-- ===== COLOCAR O FONTAWESOME LOCAL VIA NPM ====== --}}
    {{-- ===== COLOCAR O MATERIAL ICONS LOCAL VIA NPM ====== --}}

</head>
<body>
    <div>
        @include('components.navbar')
    </div>
    <div class="row">
        <div class="col-md-2">
            @include('components.sidenav')
        </div>
        <div class="col-md-10">
                @yield('content')   
        </div>
    </div>
</body>
<script src="{{ asset('js/app.js') }}" defer></script>
{{-- <script src="{{ url('../node_modules/mdbootstrap/js/jquery-3.3.1.min.js') }}" defer></script>
<script src="{{ url('../node_modules/mdbootstrap/js/bootstrap.js') }}" defer></script>
<script src="{{ url('../node_modules/mdbootstrap/js/mdb.min.js') }}" defer></script> --}}
{{-- <script src="{{ asset('js/sidebar.js') }}" defer></script> --}}
<script type="text/javascript">
    // $(document).ready(function () {
    //     $('#sidebarCollapse').on('click', function () {
    //         $('#sidebar').toggleClass('active');
    //     });
    // });
</script>
</html>
