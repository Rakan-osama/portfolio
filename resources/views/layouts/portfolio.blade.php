<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#b4f24a">

    <title>{{ $portfolio['name'] }} — {{ $portfolio['role'] }}</title>
    <meta name="description" content="{{ $portfolio['summary'] }}">
    <link rel="canonical" href="{{ url('/') }}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $portfolio['name'] }} — {{ $portfolio['role'] }}">
    <meta property="og:description" content="{{ $portfolio['summary'] }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:image" content="{{ asset($portfolio['photo']) }}">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">

    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-ink antialiased">
    @include('portfolio.partials.nav')

    <main>
        @yield('content')
    </main>

    @include('portfolio.partials.footer')
</body>
</html>
