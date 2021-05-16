@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Add Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form enctype = "multipart/form-data" method="post" action="{{ url('/admin/add-product') }}" name="add_product" id="add_product"> {{ csrf_field() }}
                <div class="card-body">
                <div class="form-group">
                  <label>Under Category</label>
                  <select name="category_id" class="form-control select2" style="width: 100%;">
                  <option value="0">Select</option>
                  <?php echo $categories_dropdown ?>
                  </select>
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Name" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Product Code</label>
                    <input type="text" name="code" class="form-control" id="exampleInputPassword1" placeholder="Product Code" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Product Color</label>
                    <input type="text" name="color" class="form-control" id="exampleInputPassword1" placeholder="Product Color" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Product Description</label>
                    <textarea name="description" class="form-control" id="exampleInputPassword1" placeholder="Product Description" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Product Price</label>
                    <input type="text" name="price" class="form-control" id="exampleInputPassword1" placeholder="Product Price" required>
                  </div>
                  <div class="form-group">
                        <label for="exampleInputFile">Product Image</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="image">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add Product</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
          <!-- right column -->
      
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
@endsection