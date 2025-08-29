<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'FitTrcker') }}</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    @vite('resources/css/app.css')
    @vite('resources/css/global/modal.css')
    @vite('resources/js/app.js')
</head>
<body>
    <div class="flex min-h-screen">
        {{-- <main> --}}
            {{ $slot }}
        {{-- </main> --}}
    </div>
    @stack('scripts')
</body>
</html>