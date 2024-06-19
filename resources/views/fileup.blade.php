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

</head>
<body>
    <div class="container">
        <div class="row">
            <form action="/fileAction" method="post" enctype="multipart/form-data">
                @csrf
            <div class="form-group">
                <label name="name">Fname</label>
                <input type="text" name="name" id="name" class="form-control">
</div>
<div class="form-group">
    <label name="file">Files</label>
    <input type="file" name="files" id="files" class="form-control">
</div>
<input type="submit" name="butn" class="btn btn-warning text-dark">
</form>
</div>
</div>
</body>
</html>