@extends('admin.master')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Work Form </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('work.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Work Year</label>
                      <input class="form-control" type="text" name="work_year" id="formFileMultiple" multiple>
                    </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Work Post</label>
                  <input type="text" name="work_post" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Work Company Link</label>
                    <input type="text" name="work_company_link" class="form-control" id="exampleInputEmail1">
                  </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Work Company Name</label>
                    <input type="text" name="work_company_name" class="form-control" id="exampleInputEmail1">
                  </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Work Description</label>
                    <input type="text" name="work_description" class="form-control" id="exampleInputEmail1">
                  </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        </div>
      </div>



@endsection
