<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/studentlogin/login" method="POST">
        @csrf 
        <label for="username"> Enter Username </label>
        <input type="text" name="username" placeholder="Enter Username Here" required />
        <br/>  
        
        <label for="password"> Enter password </label>
        <input type="password" name="password" placeholder="Enter password Here" required />
    
        <button type="submit">Login</button>
</body>
</html>