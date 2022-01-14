@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/posts/create" class="btn btn-primary">Create Project</a>
                    <h1>Welcome</h1>
                    @if (count($posts) > 0)
                    <table class="table table-stripped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                        
                        @foreach ($posts as $item)
                            <tr>
                                <td>{{$item->title}}</td>
                                <td><a href="/posts/{{$item->id}}/edit" class="btn btn-default">Edit</a></td>
                                <td>
                                    {!! Form::open(['action' => ['PostsController@destroy',$item->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                            
                        @endforeach
                    </table>

                    @else
                    <h4>You have No Post</h4>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
