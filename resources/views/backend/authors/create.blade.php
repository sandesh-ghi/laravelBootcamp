<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>author</title>
</head>
<body>
<h2>Add Author</h2>

<form action="{{route('backend.author.store')}}" method="POST">
    @csrf
    <!-- Author Name -->
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <!-- Author Surname -->
    <label for="surname">Surname:</label>
    <input type="text" id="surname" name="surname" required><br><br>

    <button type="submit">Add Author</button>
</form>
</body>
</html>
