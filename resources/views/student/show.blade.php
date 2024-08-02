@extends('layouts.frontend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="no-break">View Student Record</h4>
                    <a href="{{url('student')}}" class="btn btn-danger float-end"> Back </a>
                </div>
                <div class="card-body">
                    
                        <div class="mb-3">
                            <label>Name:</label>
                            <p>
                                {{ $student->name }}
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>Description:</label>
                            <p>
                                {!! $student->description !!}
                            </p>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection