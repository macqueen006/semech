<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <x-partials.header/>
{{--    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>--}}
    @livewireStyles
</head>
<body class="template-color-40 template-font-1">

<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- start preloader  -->
<div id="page-preloader" class="page-loading clearfix">
    <div class="page-load-inner">
        <div class="preloader-wrap">
            <div class="wrap-2">
                <div class=""><img src="{{ asset('img/logo/semech-systems-logo-1.png') }}" width="200" alt="Semech Preloader"></div>
            </div>
        </div>
    </div>
</div>
<!-- end preloader  -->

<section id="wrapper" class="wrapper">
    <!-- main navigation -->
    <x-partials.nav />
    <!-- end navigation -->
        {{ $slot }}
    <x-partials.footer/>
</section>

@stack('modals')

<script src="{{ asset('scripts/js/vendor/vendor.min.js') }}"></script>

<script src="{{ asset('scripts/js/plugins.min.js') }}"></script>



<!-- REVOLUTION JS FILES -->
@livewireScripts
<script src="{{ asset('scripts/js/revolution.tools.min.js') }}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
<script src="{{ asset('scripts/js/revolution.extension.min.js') }}"></script>
<script src="{{ asset('scripts/js/main.js') }}"></script>
<script src="{{ asset('scripts/js/revoulation.js') }}"></script>
<!-- font awesome -->
<script src="{{ asset('fontawesome/js/all.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
