<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>books</title>
</head>
<body>
<h1>Books</h1>

<a href="/books/create">Create new book</a>
<br>
<ul>
    @foreach($books as $book)
        <li>
        	{{$book->title}} <br>
        	{{$book->description}} <br>	
        	<a href="/books/delete/{{$book->id}}">Delete</a>
        </li>
        <br>
    @endforeach
</ul>
</body>
</html>