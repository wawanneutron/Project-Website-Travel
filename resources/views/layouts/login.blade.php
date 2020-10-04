<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      @yield('title')
    </title>
    @include('includes.style')
</head>
<body>

{{-- navbar --}}
@include('includes.navbar-alternate')

{{-- content --}}
@yield('content')

{{-- script --}}
@include('includes.script')

{{-- footer --}}
@include('includes.footer')
</body>
</html>