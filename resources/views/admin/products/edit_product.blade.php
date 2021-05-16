@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Edit Productt</li>
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
                <h3 class="card-title">Edit Productt</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form enctype = "multipart/form-data" method="post" action="{{ url('/admin/edit-product/'.$productDetails->id) }}" name="add_product" id="add_product"> {{ csrf_field() }}
                <div class="card-body">
                <div class="form-group">
                  <label>Under Category</label>
                  <select name="category_id" class="form-control select2" style="width: 100%;">
                
                  <?php echo $categories_dropdown ?>
                  </select>
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$productDetails->product_name}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Product Code</label>
                    <input type="text" name="code" class="form-control" id="exampleInputPassword1" value="{{$productDetails->product_code}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Product Color</label>
                    <input type="text" name="color" class="form-control" id="exampleInputPassword1" value="{{$productDetails->product_color}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Product Description</label>
                    <textarea name="description" class="form-control" id="exampleInputPassword1">{{$productDetails->description}} </textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Product Price</label>
                    <input type="text" name="price" class="form-control" id="exampleInputPassword1" value="{{$productDetails->price}}">
                  </div>
                  <div class="form-group">
                        <label for="exampleInputFile">Product Image</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="image">
                            <input type="hidden" name="current_image" value="{{ $productDetails->image }}">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                          
                        </div>
                        <img style="width:100px" src="{{asset('assets/images/back_images/products/small/'.$productDetails->image) }}"> 
                      </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update Product</button>
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
  <!-- /.content-wrapper -->
@endsection