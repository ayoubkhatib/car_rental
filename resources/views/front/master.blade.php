<!DOCTYPE html>
<html lang="en">

{{-- Start Head --}}
@include('front.partials.head')
{{-- End Head --}}

<body>

    {{-- Start Wrapping All Section --}}
    <div id="wrapper">

        {{-- Start Preloader --}}
        @include('front.partials.preloader')
        {{-- End Preloader --}}

        {{-- Start Navbar --}}
        @include('front.partials.navbar')
        {{-- End Navbar --}}

        <!--  Start content All -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>

            {{-- Start Section Hero --}}
            @yield('hero')
            {{-- End Section Hero --}}

            {{-- Start All Content Middle --}}
            @yield('content')
            {{-- End All Content Middle --}}

        </div>
        <!-- End content All -->

        {{-- Start Button Back To Top --}}
        @include('front.partials.backToTopBtn')
        {{-- End Button Back To Top --}}

        {{-- Start Footer --}}
        @include('front.partials.footer')
        {{-- End Footer --}}

    </div>
    {{-- End Wrapping All Section --}}

    {{-- Start Button RTL --}}
    @include('front.partials.rtl')
    {{-- End Button RTL --}}

    {{-- Start Reduction 25$ --}}
    @include('front.partials.reduction')
    {{-- End Reduction 25$ --}}

    {{-- Start Javascript --}}
    @include('front.partials.scripts')
    {{-- End Javascript --}}

</body>

</html>
