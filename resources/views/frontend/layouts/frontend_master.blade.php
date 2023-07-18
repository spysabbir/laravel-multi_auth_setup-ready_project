
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<meta name="csrf-token" content="{{ csrf_token() }}"> --}}

<title>{{ env('APP_NAME') }} | @yield('title')</title>

@yield('content')
