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
<h2> These are your results! </h2>
<table class='table table-striped'>
    <tr>
        <th> Title </th> <th> Author </th> <th> Language </th><th> Year </th><th> Sales (in Millions) </th> <th> Genre</th>
    </tr>
    @foreach($data as $ct => $row)
        <tr>
            <td>{{$row->Title}}</td>
            <td>{{$row->Author}}</td>
            <td>{{$row->Language}}</td>
            <td>{{$row->Year}}</td>
            <td>{{$row->Sales}}</td>
            <td>{{$row->genre}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
