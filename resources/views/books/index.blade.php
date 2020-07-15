<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books List</title>

    <link rel="stylesheet" href={{asset('css/style.css')}}>
</head>
<body>
<ul>
    @unless($books->isEmpty())
        @foreach($books as $book)
            <li>
                <h2>{{$book->name}}</h2>
                <h4>{{$book->price}}</h4>
            </li>
        @endforeach

        @else
        <h2>No Books available!</h2>
    @endif
</ul>
</body>
</html>
