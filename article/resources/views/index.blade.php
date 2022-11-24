@extends('layout.app')

@section('content')
<h1>Dashboard</h1>

<form action="{{route('logout')}}" method="POST">
    @csrf
    <button class="btn btn-warning" type="submit" name="logout">Log Out</button>
</form>
@endsection