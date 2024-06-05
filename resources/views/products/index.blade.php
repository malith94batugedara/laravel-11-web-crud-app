<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
</head>
<body>

    <div class="container mt-4">
        <h1 class="text-center">All Products</h1><a href="{{ route('product.create') }}" class="btn btn-success float-end">Add Products</a><br/><br/>
         @if(session('status'))
              <div class="alert alert-success">
                   {{ session('status') }}
              </div>
         @endif
         <table class="table table-bordered table-dark">
              <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Id</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                    
                
                <tr>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->product_price}}</td>
                    <td>{{$product->product_id}}</td>
                    <td>
                        <a href="{{ route('product.edit',$product->id) }}" class="btn btn-success">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>

                @endforeach
              </tbody>
         </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
