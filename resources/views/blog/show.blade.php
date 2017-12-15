@extends('includes.head')
@section('title',"$post->title")
@section('content')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="post-item">
                    <div class="inner">
                        <div class="post-head clearfix">
                            <div class="col-md-12">
                                <div class="detail">
                                    <h2 class="handle">{{$post->title}}</h2>
                                    <div class="post-meta">
                                        <div class="asker-meta">
                                            <span>{{date('j F Y',strtotime($post->created_at))}}</span>
                                            <span>by</span>
                                            <span><a href="#">Admin</a> </span>
                                        </div>
                                        <div class="share">
                                            <label>Share: </label>
                                            <i class="fa fa-facebook"></i>
                                            <i class="fa fa-twitter"></i>
                                            <i class="fa fa-vk"></i>
                                        </div>
                                        <div class="tags">
                                            <span class="label label-success"># tags</span>
                                        </div>
                                        <div class="category pull-right">
                                            <span class="label label-default"> Default</span>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="avatar_show"><a href="#"><img src="../images/post1.jpeg"> </a></div>
                                <br>
                                <div class="post-content">
                                    <p>{!! $post->content !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="editdelete">
                    <a href="{{route('posts.edit',$post->id)}}" class="btn btn-block btn-success" style="margin-bottom: 3px;">Edit</a>
                    <form action="{{route('posts.destroy',$post->id)}}" method="post">
                        {{csrf_field()}}
                        <input type="submit"class="btn btn-block btn-danger" value="Delete">
                    </form>
                </div>
            </div>
            @include('includes.sidebar')
        </div>
    </div>
@endsection