<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Home</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-zinc-950 text-zinc-300 font-mono antialiased min-h-screen flex flex-col">
    @include("partials.navbar")

    @yield("content")
</body>
</html>