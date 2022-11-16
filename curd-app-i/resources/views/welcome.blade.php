<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outdoor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <div class="text-center mt-3">
         <h2>Outdoor Company </h2>
    </div>
    <div class="text-center mb-5">
        <h3>Admin Page</h3>
    </div>
    <div class="">
        <form class="col-6 mx-auto" action="{{route('savedata')}}" method="POST">
            @csrf
        <div class="mb-3">
            <label for="" class="form-label">Batch Name</label>
            <input type="text" class="form-control" name="batchname">
            <!-- <div id="" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Number of T-Shirts in Batch</label>
            <input type="number" class="form-control" id="" name="totalbatch">
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
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="remark"></textarea>
            <label for="floatingTextarea">Remarks</label>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
        <table class="table table-primary mt-5">
            <tr>
                <th>S.N</th>
                <th>Batch Name</th>
                <th>Total Batch Number</th>
                <th>Status</th>
                <th>Manufactured Date</th>
                <th>Remark</th>
                <th>Action</th>


            </tr>
            
             @foreach ($items as $value)
                    <tr>
                        <td>
                            {{$value->id}}
                        </td>
                        <td>
                            {{$value->BatchName}}
                        </td>
                        <td>
                            {{$value->totalBatch}}
                        </td>
                        <td>
                            {{$value->status}}
                        </td>
                        <td>
                            {{$value->created_at}}
                        </td>
                        <td>
                            {{$value->Remark}}
                        </td>
                        <td>
                            <a class="btn btn-success" href="/edit/{{$value->id}}">Edit</a>
                            <a class="btn btn-danger" href="/delete/{{$value->id}}"> Delete</a>
                        </td>
                    </tr>
            @endforeach
            
        </table>
    </div>
</body>
</html>