@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{ __('Add Shopping List') }}</div>
            <div class="card-body">
      
                <form action="{{ url('student') }}" method="post">
                    {!! csrf_field() !!}
                    <label>Name</label></br>
                    <input type="text" name="name" id="name" class="form-control"></br>
                    <label>Description</label></br>
                    <input type="text" name="description" id="description" class="form-control"></br>
                    <input type="submit" value="Save" class="btn btn-success"></br>
                </form>
            
            </div>
            </div>
        </div>
    </div>
</div>    
@endsection