<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/form" method="POST">
        @csrf 

        Name: <input type="text" name="name"><br><br>
        Email: <input type="text" name="email"><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>