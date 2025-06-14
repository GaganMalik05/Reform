<!doctype html>
<html class="h-full">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen flex flex-col">

    <x-header/>

    <main class="flex-grow">
        {{ $slot }}
    </main>

    <x-footer/>

</body>
</html>