{{-- Meta Tags --}}
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">

{{-- SEO Meta Tags --}}
@hasSection('meta_description')
    <meta name="description" content="@yield('meta_description')">
@endif

@hasSection('meta_keywords')
    <meta name="keywords" content="@yield('meta_keywords')">
@endif

{{-- Title --}}
{{-- Dynamic Title --}}
<title>
    @hasSection('title')
        @yield('title') - {{ config('app.name', 'PAK-Trips') }}
    @else
        {{ config('app.name', 'PAK-Trips') }}
    @endif
</title>

{{-- Favicon --}}
<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

{{-- Google Fonts --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
{{-- Bootstrap CSS --}}
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

{{-- Bootstrap Icons --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

{{-- Custom Styles --}}
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

{{-- Additional Styles from Child Pages --}}
@stack('styles')