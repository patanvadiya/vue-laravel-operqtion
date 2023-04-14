<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <title></title>

</head>

<body>
    <div id="">
        <form action="{{ route("add_employee") }}" method="post">
            @csrf
            <input type="text" name="name">
            <button class="btn btn-dark" type="submit">submit</button>
        </form>
        @foreach ($employee as $employees)
        <div class="alert ">
            <p>{{ $employees->employee_name }}</p>
        </div>

        @endforeach
    </div>

</body>

</html>
