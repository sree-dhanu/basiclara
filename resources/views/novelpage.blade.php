<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    @foreach($ncat as $val)
   
    <label for="id">ID:{{$val->id}}</label><br>
   <label for="name">NAME:{{$val->name}}</label><br> 
    <label for="category">CATEGORY:{{$val->category}}</label><br>
    
    <a href="/novels/{{$val->id}}">Read....</a>
    <br><br>
    @endforeach
    
</body>
</html>