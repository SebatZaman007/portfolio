@extends('admin.master')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Contact Form </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('contact.update')}}" method="POST">
              @csrf
              <div class="card-body">
                  <div class="mb-3">
                      <input type="hidden" name="id" value="{{$edit->id}}">
                      <label for="formFileMultiple" class="form-label">Email</label>
                      <input class="form-control" type="email" name="email" value="{{$edit->email}}" id="formFileMultiple" multiple placeholder="Enter Email">
                    </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Subject</label>
                  <input type="text" name="subject" value="{{$edit->subject}}" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Message</label>
                  <input type="text" name="message" value="{{$edit->message}}" class="form-control" id="exampleInputEmail1">
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
