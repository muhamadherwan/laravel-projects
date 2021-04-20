@extends('layouts.layout')

@section('content')
<div class="card mt-5">
        <div class="card-header">
            <h2>Student Courses Management - Code Ninja</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 mt-1 mr-1">
                    <div class="float-right">
                        <a class="btn btn-success" href="{{ route('students.create') }}"> Create New Application</a>
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
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Courses</th>
                            <th>Fees</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($students as $student)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>
                            <a href="{{ route('students.show', $student->id) }}">{{ $student->name }}</a>
                            </td>
                            <td>{{ \Str::limit($student->course, 50) }}</td>
                            
                            <td>{{ $student->fee }}</td>
                            
                            <td>
           
                            <form action="{{ route('students.destroy', $student->id) }}" method="post">

                                <a href="" class="btn btn-primary">Show</a>

                                <a href="" class="btn btn-primary">Edit</a>

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {!! $students->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
