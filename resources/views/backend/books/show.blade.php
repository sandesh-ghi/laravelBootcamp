<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>View of Book</h1>
<div class="row">
    <table border="1" >
        <tr>
            <th>Name</th>
            <th>PageCount</th>
            <th>Point</th>
            <th>Author Id</th>
            <th>Types Id</th>
        </tr>
        <tr>
            <td>{{$book->name}}</td>
            <td>{{$book->pageCount}}</td>
            <td>{{$book->point}}</td>
            <td>{{$book->author_id}}</td>
            <td>{{$book->type_id}}</td>
        </tr>
    </table>
</div>

</body>
</html>
