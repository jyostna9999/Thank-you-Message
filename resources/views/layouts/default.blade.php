<!doctype html>
<html lang="en">


@include('includes.head')

<body>
<header>
    @include('includes.menu')
</header>

<div class="container">
    <main role="main">
        @yield('content')
    </main>

    @include('includes.jsfooter')

    <footer class="blockquote-footer text-center">
        @include('includes.footer')
    </footer>
</div>
</body>
</html>