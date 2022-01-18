@extends('admin.master')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Project Form </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('project.update')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                  <div class="mb-3">
                      <input type="hidden" name="id" value="{{$edit->id}}">
                      <label for="formFileMultiple" class="form-label">Project Image</label>
                      <input class="form-control" type="file" name="project_image" id="formFileMultiple" multiple>
                      <img src="{{asset(BlogImage().$edit->project_image)}}" width="70px" height="70px" alt="img">
                    </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Project Name</label>
                  <input type="text" name="project_name" value="{{$edit->project_name}}" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Project Year</label>
                    <input type="text" name="project_year" value="{{$edit->project_year}}" class="form-control" id="exampleInputEmail1">
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
