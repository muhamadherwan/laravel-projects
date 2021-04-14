@extends('blogs.layout')


@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <h2>Laravel 8 CRUD - Code Ninja</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 mt-1 mr-1">
                    <div class="float-right">
                        <a class="btn btn-success" href="{{ route('blog.create') }}"> Create New Post</a>
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
                            <th>Description</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($blogs as $blog)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>
                            <a href="{{ route('blog.show', $blog->id) }}">{{ $blog->title }}</a>
                            </td>
                            <td>{{ \Str::limit($blog->description, 50) }}</td>
                            <td>
           
                            <form action="{{ route('blog.destroy', $blog->id)}}" method="post">

                                <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-primary">Show</a>

                                <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-primary">Edit</a>

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {!! $blogs->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection