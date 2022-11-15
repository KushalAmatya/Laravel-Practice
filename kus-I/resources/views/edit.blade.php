<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
     <form action="{{route('updateTodo')}}" method="post">
            @csrf
            <input type="text" name="todoItem" value="{{$data->title}}" placeholder="Enter Your todo Item"><br>
            <input type="text" name="id" value="{{$data->id}}"><br>

            <input type="submit" value="Add Todo Item" class="">
        </form>
</body>
</html>