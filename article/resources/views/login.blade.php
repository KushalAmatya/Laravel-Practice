@extends('layout.app')

@section('content')
<h1>Login</h1>
<form action="" method="POST" class="form-control">
        @csrf
        <div>
            <label for="">Email:</label>
            <input type="text" name="email" placeholder="Enter your Email here."><br>
            {{-- <span>@error('email') {{$message}} @enderror</span><br> --}}

        </div>
        
        <div>
            <label for="">Password</label>
            <input type="password" name="password" id=""><br>
            {{-- <span>@error('password') {{$message}} @enderror</span><br> --}}

        </div>
        <div>
            <button type="submit">Sign In</button>
        </div>
    </form>
@endsection