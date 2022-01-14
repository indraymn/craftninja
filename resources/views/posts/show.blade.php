@extends('layouts.app')

@section('content')
    <a class="btn btn-primary" href="/posts">Go back</a>
    <h1>{{$data->title}}</h1>
    <hr>
    <img style="width: 50%" src="/storage/cover_images/{{$data->cover_image}}" alt="">
    <hr>
    <h3>Created at {{$data->created_at}}</h3>
    <hr>
    <h3>Last updated {{$data->updated_at}}</h3>
    <hr>
    <h3>Created by {{$data->user->name}}</h3>
    <div>
        <h4>Content</h4>
        {{-- <p>{{$data->body}}</p> --}}
        <p>{!!$data->body!!}</p>
        {{-- For parsing HTML --}}
    </div>
    <hr>
    @if (!Auth::guest())
        @if (Auth::user()->id == $data->user_id)
            <a href="/posts/{{$data->id}}/edit" class="btn btn-default">Edit</a>
            {!! Form::open(['action' => ['PostsController@destroy',$data->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}   
        @endif
         
    @endif
    
@endsection