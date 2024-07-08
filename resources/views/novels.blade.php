<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
       @foreach($novel_files as $fil)
       {{$fil->cat}}
       <img src="/img/{{$fil->cat}}" alt="imgnovel">
       @endforeach
    </div>
</body>
</html>
