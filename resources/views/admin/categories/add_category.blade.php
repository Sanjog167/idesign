@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Add Category</li>
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
                <h3 class="card-title">Add New Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{ url('/admin/add-category') }}" name="add_category" id="add_category"> {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Category Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name" required>
                  </div>
                  <div class="form-group">
                  <label>Category Level</label>
                  <select name="parent_id" class="form-control select2" style="width: 100%;">
                  <option value="0">Parent Category</option>
                @foreach($levels as $val)
                <option value="{{ $val->id }}">{{$val->name}}</option>
                @endforeach
                  </select>
                </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Category Description</label>
                    <textarea name="description" class="form-control" id="exampleInputPassword1" placeholder="Category Description" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Category URL</label>
                    <input type="text" name="url" class="form-control" id="exampleInputPassword1" placeholder="Category URL" required>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add Category</button>
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