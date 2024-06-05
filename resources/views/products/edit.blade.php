<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PMS | Edit Product</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center">Edit Product</h1><a href="{{ route('product.index') }}" class="btn btn-success float-end">All Products</a><br/><br/>
    <div>
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $error)
          <div> {{ $error }} </div>
        @endforeach
    </div>
    @endif
    </div>
    <form action="{{ route('product.update',$productt->id) }}" method="post">
         @csrf
         <label>Product Name</label>
         <input type="text" name="pro_name" value="{{ $productt->product_name }}" class="form-control" placeholder="Enter Product Name"/><br/>
         <label>Product Price</label>
         <input type="text" name="pro_price" value="{{ $productt->product_price }}" class="form-control" placeholder="Enter Product Price"/><br/>
         <label>Product Id</label>
         <input type="text" name="pro_id" value="{{ $productt->product_id }}" class="form-control" placeholder="Enter Product Id"/><br/>

         <input type="submit" value="Update" class="btn btn-success"/>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
