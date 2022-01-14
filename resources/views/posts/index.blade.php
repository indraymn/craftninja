@extends('layouts.app')

@section('content')
    <h1>Postss</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $a)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width: 100%" src="/storage/cover_images/{{$a->cover_image}}" alt="">
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h3><a href="/posts/{{$a->id}}">{{$a->title}}</a></h3>
                        <small>Written on {{$a->created_at}}</small>
                    </div>
                </div>
             
            </div>
        @endforeach
        {{ $posts->links() }}
    @else
            <p>No post found</p>
    @endif
@endsection