<!DOCTYPE html>
<html lang="nl">

<head>
@include('partials._head')

@yield('code')

</head>

<body>

    @yield('header')



        @yield('content')

        


        @include('partials._javascript')

        @yield('scripts')

</body>

</html>
