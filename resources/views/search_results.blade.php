<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
</head>
<body>
    <ul>
    @forelse($names as $value)
     <li>{{$value->name}}</li>
     @empty
     <li>No user found</li>
     @endforelse
    </ul>

</body>
</html>