@extends('layouts.layout')
  
  @section('content')
      <div class="card mt-5">
          <div class="card-header">
              <h2>Student Course Details</h2>
          </div>
          <div class="card-body">
              <div class="row">
                  <div class="col-lg-12 mt-1 mr-1">
                      <div class="float-right">
                          <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
                      </div>
                  </div>
              </div>

              <div class="row mt-2">
                  <div class="col-lg-12">
                      @if ($message = Session::get('success'))
                          <div class="alert alert-success">
                              <p>{{ $message }}</p>
                          </div>
                      @endif
                  </div>


                  <div class="col-lg-12">
                      <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                  <strong>Name:</strong>
                                  {{ $student->name }}
                              </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                  <strong>Course:</strong>
                                  {{ $student->course }}
                              </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                  <strong>Fees:</strong>
                                  {{ $student->fee }}
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  @endsection