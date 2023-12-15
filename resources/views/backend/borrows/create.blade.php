<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Borrows</title>
</head>
<body>
<h2>Borrow a Book</h2>

<form action="{{route('backend.borrow.store')}}" method="post">
@csrf
    <!-- Book Name -->
    <label for="name">Book Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <!-- Page Count -->
    <label for="pageCount">Page Count:</label>
    <input type="number" id="pageCount" name="pageCount" required><br><br>

    <!-- Point -->
    <label for="point">Point:</label>
    <input type="number" id="point" name="point" required><br><br>

    <!-- Author ID -->
    <label for="author_id">Author ID:</label>
    <input type="number" id="author_id" name="author_id" required><br><br>

    <!-- Type ID -->
    <label for="type_id">Type ID:</label>
    <input type="number" id="type_id" name="type_id" required><br><br>

    <button type="submit">Borrow Book</button>
</form>
</body>
</html>
