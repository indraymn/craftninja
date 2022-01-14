@extends('layouts.app')
<style>
    .marg{
        margin:"0px 50pc 0px 50px"
    }
    .bord{
        height: 400px;
    }
    .crs{
        height: 150px;
        width: 100%;
        object-fit: fill;
    }
    .img-category {
        width: 350px;
        height: 235px; 
        object-fit: cover;  
    }
    .card{
        height: 387.9px;
        color: black;
        background-color: rgb(180, 217, 243);
        width: 350px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
    .h5 a {
        font-size: 15;
        color: black;
        font-weight: bold;
        margin: 10px;
    }
    .h5 p {
        margin-left: 10px;
        font-size: 12;
    }
    @media screen and (max-width: 800px) {
        .bord{
            height: 200px;
        }
    }
    @media screen and (max-width: 767px) {
        .card{
            max-width: 690px;
            width: 100%;
        }
        .img-category {
            width: 100%;
            height: 235px;   
            object-fit: fill;
        }
        .h5 a {
            font-size: 15;
            color: black;
            font-weight: bold;
            margin: 10px;
            width: 100%;
        }
        .h5 p {
            margin-left: 10px;
            font-size: 12;
        }
    }
    .tes {
        color: black;
    }
</style>
@section('content')
<h2>Your Watchlist</h2>
    <div class='col-md-12'>
        <div class="container panel panel-default full-xs">
    @if(count($posts) > 0)
    @foreach ($posts as $item)
                <div class="col-md-4 col-sm-6" style="padding-bottom: 10px; padding-top: 10px;">
                    <div class="card">

                        <img class="img-category" src="/storage/cover_images/{{$item->cover_image}}" alt="Card Image" width="253" height="169" data-lazy="true" >

                        <div class="card-body">
                            <h2 class="h5">
                            <a href="/category/{{$item->id}}">
                                {{$item->title}}
                            </a>
                            <p><br>{{$item->body}}</p>
                            <p>{{$item->location}}, {{$item->locationdetail}}</p>
                            <br>
                            </h2>
                        </div>
                    </div>
                </div>
    @endforeach
    @endif 
        </div>
    </div>
@endsection