@extends('layouts.frontend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @session('status')
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endsession


            <div class="card">
                <div class="card-header">
                    <h4 class="no-break">Students List</h4>
                    <a href="{{url('student/create')}}" class="btn btn-primary float-end"> Add Student </a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th class="float-end">Action</th>
                            </tr>
                        </thead>
                        <div class="tbody">
                            @foreach ($students as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->description }}</td>
                                <td class="float-end">
                                    <a href="{{ route('student.edit', $student->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('student.show', $student->id) }}" class="btn btn-info">Show</a>
                                    <!-- <a href="{{ route('student.destroy', $student->id) }}" class="btn btn-danger">Delete</a> -->
                                    <form action="{{ route('student.destroy', $student->id) }}" method="POST" class="d-inline">
                                        @csrf 
                                        @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    
                                </td>
                            </tr>
                            @endforeach
                        </div>
                    </table>
                    {{ $students->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection