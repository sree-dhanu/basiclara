<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIEW</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<div class="container">
        <h1>VIEW REGISTRATION DETAILS</h1>
        <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>AGE</th>
                        <th>GENDER</th>
                        <th>CLASS</th>
                        <th>USERNAME</th>
                        <th>PASSWORD</th>
                    </tr>
                </thead>
                @foreach($contents as $value)
                <tbody>
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->age}}</td>
                        <td>{{$value->gender}}</td>
                        <td>{{$value->class}}</td>
                        <td>{{$value->user}}</td>
                        <td>{{$value->pass}}</td>
                        <td><a href="/edit/{{$value->id}}">Edit</a></td>
                        <td><a href="/delete/{{$value->id}}">Delete</a></td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
        <div class="col-md-2"></div>
</div>
<a href="/logout">Logout</a>
</body>
</html>