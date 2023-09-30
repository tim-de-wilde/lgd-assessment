<!DOCTYPE html>
<html class="h-full" lang="en">
<head>
    <title>LGD Assessment</title>

    @vite('resources/css/app.css')

    @livewireStyles
</head>
<body class="h-full">

@yield('body')

@vite('resources/js/alpine.js')
@livewireScripts
</body>
</html>
