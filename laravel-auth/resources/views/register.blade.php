<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="{{route('register')}}" method="POST">
        @csrf
        <div>
            <label for="">Email:</label>
            <input type="text" placeholder="Enter your Email here." name="email"><br>
            <span>@error('email') {{$message}} @enderror</span><br>
        </div>
         <div>
            <label for="">Username:</label>
            <input type="text" placeholder="Enter your Name here." name="name"><br>
            <span>@error('name') {{$message}} @enderror</span><br>
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="password" id=""><br>
            <span>@error('password') {{$message}} @enderror</span><br>
        </div>
        <div>
            <button type="submit">Sign Up</button>
        </div>
    </form>
</body>
</html>