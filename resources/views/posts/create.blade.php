@extends('layouts.app')

@section('content')
    <h1>Create Post by {{ Auth::user()->name }}</h1>
    {!! Form::open(['action' => 'PostsController@store','method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class' => 'form-control','placeholder' =>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Content')}}
            {{Form::textarea('body','',['id' => 'article-ckeditor','class' => 'form-control','placeholder' =>'Body Content'])}}
        </div>
        <div class="form-group">
          {{Form::label('contact_name','Contact Name')}}
          {{Form::text('contact_name','',['class' => 'form-control','placeholder' =>'Contact Name'])}}
      </div>
      <div class="form-group">
        {{Form::label('contact_phone','Phone')}}
        {{Form::text('contact_phone','',['class' => 'form-control','placeholder' =>'08xxxxxxxxxx'])}}
    </div>
        <div class="form-group">
        {{Form::label('cover_image','Cover')}}
        {{Form::file('cover_image')}}
        </div>
        <div class="form-group">
          {{Form::label('cover_1','Cover 1')}}
          {{Form::file('cover_1')}}
        </div>
        <div class="form-group">
          {{Form::label('cover_2','Cover 2')}}
          {{Form::file('cover_2')}}
        </div>

        <div class="marg">
            <select class="fadeIn fourth" aria-label="Default select example" name="location">
              <option selected value="">Location</option>
              <option value="Jakarta">Jakarta</option>
              <option value="Semarang">Semarang</option>
              <option value="Jogjakarta">Jogjakarta</option>
            </select>
            </div>
            <div class="marg">
            <select class="fadeIn fourth" aria-label="Default select example" name="locationdetail">
              <option selected value="">Location Detail</option>
              <option value="Kelapa Gading">Kelapa Gading</option>
              <option value="Serpong">Serpong</option>
              <option value="Medan">Medan</option>
            </select>
            </div>        
            <div class="marg">
                <select class="fadeIn fourth" aria-label="Default select example" name="category">
                  <option selected value="">Category</option>
                  <option value="Montir">Montir</option>
                  <option value="Washing">Washing</option>
                  <option value="Detailing">Detailing</option>
                </select>
              </div>    
        {{Form::submit('Create',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection