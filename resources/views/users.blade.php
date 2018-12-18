<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>
    <h1>Users Register Page</h1>

    <form action="/register" method="post">
    {{ csrf_field() }}
        <label for="">Name</label>
        <input type="text" name="name"> <br><br>
        <label for="">Email</label>
        <input type="email" name="email"> <br><br>
        <label for="">Password</label>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Rigister Now">
    </form>
</body>
</html>