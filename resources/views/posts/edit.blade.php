@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $data->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title',$data->title,['class' => 'form-control','placeholder' =>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Content')}}
            {{Form::textarea('body',$data->body,['id' => 'article-ckeditor','class' => 'form-control','placeholder' =>'Body Content'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Update',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection