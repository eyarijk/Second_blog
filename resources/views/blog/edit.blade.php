@extends('includes.head')

@section('content')
    <br>
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="well">
                <form action="{{ route('posts.update',$post->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <h4>Create post</h4>
                    <div class="form-group">
                        <label>Title:</label>
                        <input type="text" name="title" value="{{$post->title}}" class="form-control" placeholder="Enter title...">
                    </div>
                    <div class="form-group">
                        <label>Content:</label>
                        <textarea name="content" class="form-control" placeholder="Enter content...">{{$post->content}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Add post</button>
                </form>
            </div>
        </div>
    </div>

@endsection
