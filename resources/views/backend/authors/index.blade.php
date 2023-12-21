<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Author</title>
</head>
<body>
<h2>Author list</h2>
<div class="row">
    <table border="1">
        <thead>
        <tr>
            <th>Sno.</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Action</th>

        </tr>
        </thead>
        <tbody>
        @foreach($authors as $author)
            <tr>
                <td>{{ $loop->index+1 }}</td>

                <td>{{ $author->name }}</td>
                <td>{{ $author->surname }}</td>
                <td><a href="{{ route('backend.authors.show', $author->author_id) }}"><input type="button" value="view"> </a><br><br>
                    <a href="{{ route('backend.authors.edit', $author->author_id) }}" ><input type="button" value="Edit"></a><br><br>
                    <form action="{{ route('backend.authors.destroy',$author->author_id) }}" method="post">
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
