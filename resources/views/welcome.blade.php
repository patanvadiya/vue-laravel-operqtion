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

</head>

<body>
    <div id="">
        @foreach ($user as $users)
        <div class="alert {{ $users->getName()}} ">
        <p>{{ $users->name }}</p>
        </div>

        @endforeach
    </div>

</body>

</html>
<script>

window.addEventListener('popstate', function(event) {
    alert('test');
});
</script>
