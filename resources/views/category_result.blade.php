<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-text">
                    Product Results
                </div>
            </div>
            @if($searched)
            <div class="card-body">
       
                    <label for="product" >
                        Product :{{$searched>prodname}}
                        Category: {{$searched->category}}
                        Size: {{$searched->size}}
                        Price: {{$searched->price}}
                    </label>
                 
            </div>
            @endif
        </div>
    </div>
</body>
</html>