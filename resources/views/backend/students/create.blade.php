<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Add a new student</title>
</head>
<body>
<form action="{{route('backend.student.store')}}" method="post">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" maxlength="20" required>
    <br>

    <label for="surname">Surname:</label>
    <input type="text" name="surname" maxlength="20" required>
    <br>

    <label for="DOB">Date of Birth:</label>
    <input type="date" name="DOB" required>
    <br>

    <label for="gender">Gender:</label>
    <select name="gender" required>
        <option value="M">Male</option>
        <option value="F">Female</option>
        <option value="O">Other</option>
    </select>
    <br>

    <label for="class">Class:</label>
    <input type="number" name="class" required>
    <br>

    <label for="point">Points:</label>
    <input type="number" name="point" required>
    <br>

    <input type="submit" value="Submit">
</form>
</body>
</html>
