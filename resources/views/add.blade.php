<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADd details in cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1>Cart details add:</h1>
                <form action="/adddetailtAction" method="post">
                    @csrf
                <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" name="name"  placeholder="Product name..." class="form-control">
                </div>
                <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" name="category"  placeholder="Category name..." class="form-control">
                </div>
                <div class="form-group">
                <label for="name">Product size</label>
                <input type="text" name="size"  placeholder="Product size..." class="form-control">
                </div>
                <div class="form-group">
                <label for="name">Product Price</label>
                <input type="text" name="price"  placeholder="Product price..." class="form-control">
                </div>
                <input type="submit" name="sub" value="Submit" class="btn btn-success">
                </form>
               
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>