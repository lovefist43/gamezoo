@extends('layouts.frontend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="no-break">Add Student Record</h4>
                    <a href="{{url('student')}}" class="btn btn-danger float-end"> Back </a>
                </div>
                <div class="card-body">
                    <form action="{{ url('student') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                            @error('name') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Description</label>
                            <textarea type="textarea" name="description" class="form-control"></textarea>
                            @error('name') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary"> Save </button>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection