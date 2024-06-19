<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<div class="container">
        <h1>EDIT FORM</h1>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="form">
                    @foreach($regdetails as $value)
                    <form action="/editAction/{{$value->id}}" method="post" autocomplete="off">
                        @csrf
                       <div class="form-group">
                        
                            <label for="Name"> Name:</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{$value->name}}">                      
                       
                    </div>
                    <div class="form-group">
                        
                        <label for="age"> Age:</label>
                        <input type="text" name="age" id="age" class="form-control"  value="{{$value->age}}">                      
                   
                </div>
                   
              
                <div class="form-group">
                <label for="gender"> Gender:</label>
                        <input type="text" name="rad" id="rad1" class="form-control"  value="{{$value->gender}}">  
                    
                </div>
                <div class="form-group">
                        
                        <label for="class"> class:</label>
                        <input type="text" name="class" id="class" class="form-control"  value="{{$value->class}}">                      
                   
                </div>
                <div class="form-group">
                        
                        <label for="uname"> Username:</label>
                        <input type="text" name="uname" id="uname" class="form-control" value="{{$value->user}}">                      
                   
                </div>
                <div class="form-group">
                        
                        <label for="passwd"> Password:</label>
                        <input type="password" name="pass" id="pass" class="form-control" value="{{$value->pass}}">                      
                   
                </div>
                <input type="submit" name="update" value="Update" class="btn btn-primary">
                    </form>
                    @endforeach
                </div>
            </div>

            <div class="col-md-4"></div>

        </div>
    </div>
    
</body>
</html>