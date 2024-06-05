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
    <div class="modal fade" tabindex="-1" id="deleteModal">
        <div class="modal-dialog">
          <div class="modal-content">
      
         <form action="{{ route('product.delete') }}" method="post">
            @csrf
            <div class="modal-header">
              <h5 class="modal-title">Delete Product</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <input type="hidden" name="product_delete_id" id="product_delete_id"/>
              <h3>Are you sure want to delete this Product</h3>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger">Yes Delete</button>
            </div>
         </form>
      
          </div>
        </div>
      </div>
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
                        {{-- <a href="" class="btn btn-danger">Delete</a> --}}
                        <button type="button" value="{{ $product->id }}" class="btn btn-danger deleteProductBtn">Delete</button>
                    </td>
                </tr>

                @endforeach
              </tbody>
         </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
          //  $('.deleteCategoryBtn').click(function() {
            $(document).on('click','.deleteProductBtn',function() {
              let product_id = $(this).val();
              $('#product_delete_id').val(product_id);
              $('#deleteModal').modal('show');
           });
        });
    </script>
</body>
</html>
