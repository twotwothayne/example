@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{ __('Edit Shopping List') }}</div>

                <form action="{{ url('student/' .$shoppinglist->list_id) }}" method="post">
                    {!! csrf_field() !!}
                    @method("PATCH")
                    <input type="hidden" name="id" id="id" value="{{$shoppinglist->list_id}}" id="id" />
                    <label>Name</label></br>
                    <input type="text" name="name" id="name" value="{{$shoppinglist->name}}" class="form-control"></br>
                    <label>Description</label></br>
                    <input type="text" name="description" id="description" value="{{$shoppinglist->description}}" class="form-control"></br>
                    <input type="submit" value="Update" class="btn btn-success"></br>
                </form>

            </div>
        </div>
    </div>
</div>    
@endsection