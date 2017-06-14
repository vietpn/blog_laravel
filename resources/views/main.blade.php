@include('partials._head')
    <body>
    @include('partials._nav')

        <div class="container">
            @include('partials._message')

            @yield('content')

            @include('partials._footer')
        </div>
        <!-- end of .container -->

        @include('partials._javascripts')
        @yield('scripts')
    </body>
</html>