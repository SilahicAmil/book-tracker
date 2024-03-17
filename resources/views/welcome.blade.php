<!DOCTYPE html>
<html>
<head>
    <title>Books</title>
</head>
<body>
<h1><a href="/">Books</a></h1>

<form action="{{ route('search') }}" method="GET">
    <label>
        <input type="text" name="query" placeholder="Search...">
    </label>
    <button type="submit">Search</button>
</form>

@if(isset($books))
    <h2>Search Results</h2>
    @if(count($books) > 0)
        <ul>
            @foreach($books as $book)
                <li>{{ $book['volumeInfo']['title'] }}</li>
            @endforeach
        </ul>
    @else
        <p>No books found.</p>
    @endif
@endif



</body>
</html>
