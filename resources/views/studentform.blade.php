<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
</head>
<body>
    <h2>Student Form</h2>
    <form action="/students/store" method="POST">
        @csrf 

        Name: <input type="text" name="name"><br><br>
        Email: <input type="text" name="email"><br><br>

        <button type="submit">Submit</button>
</form>
    
</body>
</html>