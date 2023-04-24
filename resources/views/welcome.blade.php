<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <title></title>
    @vite('resources/css/app.css')
</head>

<body>
    <div id="app">
        {{-- @foreach ($user as $users)
        <div class="alert {{ $users->getName()}} ">
        <p>{{ $users->name }}</p>
        </div>

        @endforeach --}}
    </div>

    @vite('resources/js/app.js')
</body>

</html>
