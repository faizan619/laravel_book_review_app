<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title') Book Review App</title>
</head>
<body>
    <div class="flex flex-col justify-between min-h-screen">
        @include('component.header')
        @yield('body')
        @include('component.footer')
    </div>
</body>
</html>
