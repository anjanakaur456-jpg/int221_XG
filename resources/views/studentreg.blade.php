<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>    STUDENT REGISTRATION FORM </h1>
            <!-- @if($errors->any())
                <div style="color:red; border:1px solid red; padding:10px;">
            <ul>
                @foreach($errors->all() as $error)
                <li> {{$error}}</li>
                @endforeach
    </ul>
    </div>
    @endif -->
        
        <form method="post" action="/submit-form">
            @csrf 
            <label for="username"> Enter Username </label>
            <input type="text" name="username" placeholder="Enter Username Here" required />
            @error('username')
            <span style="color:red" >{{$message}} </span>
            @enderror
            <br/>  
            
            <label for="name"> Enter name </label>
            <input type="text" name="name" placeholder="Enter Name Here" required />
            @error('name')
            <span style="color:red" >{{$message}} </span>
            @enderror
            <br/> 
            <label for="password"> Enter password </label>
            <input type="password" name="password" placeholder="Enter password Here" required />
            @error('password')
    <span style="color:red">{{ $message }}</span>
@enderror
            <br/> 
            <label for="email"> Enter Email </label>
            <input type="email" name="email" placeholder="Enter email Here" required />
            @error('email')
             <span style="color:red" >{{$message}} </span>
             @enderror
            <br/> 
    <input type="submit" name="submit" value="SUBMIT"/>
    </form>
    </body>
    </html>