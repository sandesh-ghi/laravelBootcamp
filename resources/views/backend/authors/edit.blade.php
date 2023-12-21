<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Add authors</h2>

<form action="{{route('backend.authors.update',$author->author_id)}}" method="post">

    @csrf
    <input type="hidden" name="_method" value="put">

    <!-- Book Name -->
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ $author->name }}" required><br><br>

    <!-- Page Count -->
    <label for="surname">Surname:</label>
    <input type="text" id="surname" name="surname" value="{{ $author->surname }}" required><br><br>
    <button type="submit">Add author</button>
</form>
</body>
</html>
