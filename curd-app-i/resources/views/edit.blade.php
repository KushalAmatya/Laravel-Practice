<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <pre>{{$items}}</pre>
        <div class="">
        <form class="col-6 mx-auto" action="{{route('updatedata')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$items->id}}"><br>

        <div class="mb-3">
            <label for="" class="form-label">Batch Name</label>
            <input type="text" class="form-control" name="batchname" value="{{$items->BatchName}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Number of T-Shirts in Batch</label>
            <input type="number" class="form-control" id="" name="totalbatch" value="{{$items->totalBatch}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Batch Status</label>
            <select name="status" id="">
                <option selected>Status</option>
                <option value="Good">Good</option>
                <option value="Bad">Bad</option>
                <option value="Average">Average</option>

            </select>
        </div>
        <div class="form-floating mt-2">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="remark" value="{{$items->remark}}">{{$items->Remark}}</textarea>
            <label for="floatingTextarea">Remarks</label>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
        </div>
</body>
</html>