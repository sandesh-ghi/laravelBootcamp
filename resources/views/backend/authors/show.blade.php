<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>View of author</h1>
<div class="row">
    <table border="1" >
        <tr>
            <th>Name</th>
            <th>Surname</th>
        </tr>
        <tr>
            <td>{{$author->name}}</td>
            <td>{{$author->surname}}</td>

        </tr>
    </table>
</body>
</html>
