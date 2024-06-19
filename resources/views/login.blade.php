<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
   <div class="container">
    <h1>LOGIN...</h1>
    <div class="row"> 
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <form action="/loginAction" method="post" autocomplete="off">
                @csrf
        <div class="form-group">
        <label for="uname">Username</label>
        <input type="text" name="uname" id="uname" class="form-control">
        </div>
        <div class="form-group">
            <label for="Passwd"> Password</label>
            <input type="password" name="passwd" id="passwd" class="form-control">
        </div>
        <input type="submit" name="login" class="btn btn-success">
        </div>
        </form>
        <div class="col-sm-2"></div>
    </div>
   </div> 
   @if(session('error'))
   <p style="color:red">
   {{session('error')}}
    </p>
    @endif
</body>
</html>