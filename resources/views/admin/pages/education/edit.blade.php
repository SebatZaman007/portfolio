@extends('admin.master')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Social-Media Form </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('education.update')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <input type="hidden" name="id" value="{{$edit->id}}">
                  <div class="mb-3">

                      <label for="formFileMultiple" class="form-label">Education Year</label>
                      <input class="form-control" type="text" name="education_year" value="{{$edit->education_year}}" id="formFileMultiple" multiple>
                    </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Education Degree</label>
                  <input type="text" name="education_degree" value="{{$edit->education_degree}}" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Education Institution</label>
                    <input type="text" name="education_institution" value="{{$edit->education_institution}}" class="form-control" id="exampleInputEmail1">
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
