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
        <form action="" method="post">
            <div class="form-group">
                <label for="fname">Filename</label>
                <input type="text" name="fname" id="fname" class="form-control">
            </div>
            <div class="form-group">
                <label for="fileupload">Fileupload:</label>
                <input type="file" name="fileup" id="fileup" class="form-control">
            </div>
            <input type="submit" value="upload" class=" btn btn-warning text-dark">
        </form>
    </div>
</body>
</html>