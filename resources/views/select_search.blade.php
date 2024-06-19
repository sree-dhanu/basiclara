<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SelectSearch</title>
</head>
<body>
    <form action="{{route('search')}}" method="GET">  
        <select name="nam" id="nam">
        @foreach($items as $value)
            <option value="{{$value->id}}">{{$value->name}}</option>
            @endforeach
        </select>
        <button type="submit">Search</button>
    </form>
</body>
</html>