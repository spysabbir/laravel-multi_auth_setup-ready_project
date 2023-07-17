
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

@yield('title')

@yield('content')
