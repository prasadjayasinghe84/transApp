<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link rel="icon" href="{{ asset('images/rop_logo.ico') }}" /> --}}
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <livewire:styles />
</head>

<body class="w-full bg-gray-100 dark:bg-gray-600 ">

  
      
            {{ $slot }}
        
  
    <livewire:scripts />

</body>

</html>
