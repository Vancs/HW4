<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books Results</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        #narrow{
            width: 40%;
            margin-left: 30%;
        }
    </style>
</head>
<body>
<br />
<br />
<br />
<form method="get" action="/views/booksFrontEnd">
    @csrf
    {{ method_field('POST') }}
    <h3>Please select a Book Genre! </h3>
    <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Books</label>
        <div class="col-sm-10">
            <select class="form-control" name="title">
                <option selected="true" disabled="disabled">Choose a Book Genre</option>
                @foreach ($data as $ct => $row)
                    <option class="form-control" value="{{$row->genre}}"> {{$row->genre}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <br><br><br>
    <button type="submit" class="btn btn-success"> Submit </button>
</form>
<br/>

</body>
</html>
