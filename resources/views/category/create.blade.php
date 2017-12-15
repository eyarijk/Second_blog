@extends('includes.head')
@section('title', 'Create category')

@section('content')

    <br>
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="well">
                <form action="{{ route('category.store') }}" method="post">
                    {{ csrf_field() }}
                    <h4>Create category</h4>
                    <div class="form-group">
                        <label>Title:</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter title...">
                    </div>
                    <button type="submit" class="btn btn-success">Add category</button>
                </form>
            </div>
        </div>
    </div>

@endsection