@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Shopping List {{$shoppingList->list_id}} Pew pew</div>
                    <div class="card-body">
                        
                    <form action="{{ url('shoppinglists/' .$shoppingList->list_id) }}" method="post">
                        {!! csrf_field() !!}
                        @method("PUT")
                        <input type="hidden" name="id" id="id" value="{{$shoppingList->list_id}}" id="id" />
                        <label>Name</label></br>
                        <input type="text" name="name" id="name" value="{{$shoppingList->name}}" class="form-control"></br>
                        <label>Description</label></br>
                        <input type="text" name="description" id="description" value="{{$shoppingList->description}}" class="form-control"></br>
                        <input type="submit" value="Update" class="btn btn-success"></br>
                    </form>

                    </div>
            </div>
        </div>
    </div>
</div> 

@endsection