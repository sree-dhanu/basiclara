<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    $(document).ready(function(){
$("button").on("click",function(){
 $names=$("#opval").val();
 alert($names);
})
 
    });
  </script>
</head>
<body>
    <form action="" method="post">
   
    <div class="input-group mb-3">
    
    
    <select name="name1" id="name" class="form-control">
    @foreach($data23 as $value)
  <option value="{{$value->name}}" id="opval">{{$value->name}}</option>0
      </select>
    <button class="btn btn-primary">Search</button>
   
   
      <!-- <input type="text" class="form-control" placeholder="Your Email" id="mail" name="email" value="{{$value->name}}"> -->
     
    </div>
   
    </form>
    <!-- <form action="" method="post">
    <input type="search" name="sear">

    </form> -->
<!--   
</ul> -->
</body>
</html>