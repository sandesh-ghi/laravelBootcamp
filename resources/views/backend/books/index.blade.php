<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div clss="container">
<h2>Book list</h2>
<div class="row">
    <table border="1">
        <thead>
        <tr>
            <th>Sno.</th>
            <th>Name</th>
            <th>PageCount</th>
            <th>Point</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
   @foreach($books as $book)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $book->name }}</td>
                <td>{{ $book->pageCount }}</td>
                <td>{{ $book->point }}</td>
                <td><a href="{{ route('backend.books.show', $book->book_id) }}"><input type="button" value="view"> </a><br><br>
                <a href="{{ route('backend.books.edit', $book->book_id) }}" ><input type="button" value="Edit"></a><br><br>

                    <form action="{{ route('backend.books.destroy',$book->book_id) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="Delete">
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>

</body>
</html>
