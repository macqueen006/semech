<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<meta name="description" content="@yield('description')">
<meta name="keywords" content="@yield('keywords')">


{{--    Facebook --}}
<meta property="og:description" content="@yield('description')">
<meta property="og:description" content="@yield('metaImage')">
<meta property="og:description" content="image/jpeg">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="{{config('settings.twitter.handle')}}">
<meta name="twitter:image" content="@yield('metaImage')">
<meta name="twitter:description" content="@yield('description')">
<meta name="twitter:title" content="@yield('title')">


<title>@yield('title', 'SIS')</title>

<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">


<link rel="shortcut icon" href="{{ asset('img/logo/fav.png') }}">
<link rel="apple-touch-icon" href="{{ asset('img/logo/fav.png') }}">

<!-- font awesome -->
<link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">

<link rel="stylesheet" href="{{ asset('styles/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('styles/css/revoulation.css') }}">
<link rel="stylesheet" href="{{ asset('styles/css/plugins.min.css') }}">
<link rel="stylesheet" href="{{ asset('styles/css/style.min.css') }}">

@livewireStyles
