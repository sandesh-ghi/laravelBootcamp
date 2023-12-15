<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>types</title>
</head>
<body>
<h2>Add Type</h2>

<form action="{{route('backend.type.store')}}" method="POST">
@csrf
    <!-- Type Name -->
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <button type="submit">Add Type</button>
</form>
</body>
</html>
