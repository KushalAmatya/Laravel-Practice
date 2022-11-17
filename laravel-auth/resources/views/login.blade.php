<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    @if(Session::has('fail'))
    <span>{{Session::get('fail')}}</span>
    @endif
    <form action="{{route('login')}}" method="POST">
        @csrf
        <div>
            <label for="">Email:</label>
            <input type="text" name="email" placeholder="Enter your Email here."><br>
            <span>@error('email') {{$message}} @enderror</span><br>

        </div>
        
        <div>
            <label for="">Password</label>
            <input type="password" name="password" id=""><br>
            <span>@error('password') {{$message}} @enderror</span><br>

        </div>
        <div>
            <button type="submit">Sign In</button>
        </div>
    </form>
</body>
</html>