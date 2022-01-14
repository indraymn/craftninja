@extends('layouts.app')
<style>
    .sidebar {
        margin: 0;
        padding: 0;
        width: 200px;
        background-color: #f1f1f1;
        position: absolute;
        overflow: hidden;
    }

    /* Sidebar links */
    .sidebar a {
        display: block;
        color: black;
        padding: 16px;
        text-decoration: none;
    }

    /* Active/current link */
    .sidebar a.active {
        background-color: #04AA6D;
        color: white;
    }

    /* Links on mouse-over */
    .sidebar a:hover:not(.active) {
        background-color: #555;
        color: white;
    }

    /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
    div.content {
        margin-left: 200px;
        padding: 1px 16px;
        /* height: 1000px; */
    }

    /* On screens that are less than 700px wide, make the sidebar into a topbar */
    @media screen and (max-width: 700px) {
        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
        }

        .sidebar a {
            float: left;
        }

        div.content {
            margin-left: 0;
        }
    }

    /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
    @media screen and (max-width: 400px) {
        .sidebar a {
            text-align: center;
            float: none;
        }
    }

    .img-category {
        width: 400px;
        height: 235px;
    }

    .tes {
        color: black;
    }

    .sidebar h4 {
        margin-left: 20px;
        color: black;
        font-weight: bold;
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

    .card {
        color: black;
        background-color: rgb(180, 217, 243);
        width: 400px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
</style>
@section('content')

<h2 class="tes">Filter</h2>
{{-- @if (count($category) > 0)
    <ul>
        
        @foreach ($category as $item)
            <li><a href="category/{{$i}}/{{$item}}">{{$item}}</a></li>

@endforeach
</ul>

@endif --}}
<div class="sidebar">
    {{-- <a class="active" href="#home">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a> --}}
    <h4>Category</h4>
    <ul>
        <input type="checkbox" name="category" id="montir" value="Montir" checked>
        <label for="categ">Montir</label>
        <div></div>
        <input type="checkbox" name="category" id="washing" value="Washing" checked>
        <label for="categ">Washing</label>
        <div></div>
        <input type="checkbox" name="category" id="detailing" value="Detailing" checked>
        <label for="categ">Detailing</label>
        <div></div>

    </ul>
    <h4>Lokasi</h4>
    <ul>
        <input type="checkbox" name="location" id="categ" value="Jakarta" checked>
        <label for="categ">Jakarta</label>
        <div></div>
        <input type="checkbox" name="category" id="categ" value="Semarang" checked>
        <label for="categ">Semarang</label>
        <div></div>
        <input type="checkbox" name="category" id="categ" value="Yogyakarta" checked>
        <label for="categ">Yogyakarta</label>
        <div></div>
    </ul>

</div>

<!-- Page content -->
<div class="content">
    @if(count($posts) > 0)
    @foreach ($posts as $item)
    <div class="col-md-6 col-xl-4 categories {{$item->category}} {{$item->location}} {{$item->title}}">
        <div class="card">
            <div class="card mb-3">
                <div class="card-header ">
                    <h2 class="h6 mb-0">
                        <a class="text-body text-body" href="#">
                        </a>
                    </h2>
                </div>
                <img class="img-category" src="{{$item->cover_image}}" alt="picture">
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
    </div>

    @endforeach
    @endif

</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {

        $("input[type='checkbox']").on('click', function() {
            if ($(this).prop('checked') == true) {
                var value = $(this).val();
                $('div.' + value).show();

                // $.ajax({
                //     type: "POST",
                //     url: "/Home/setUsect",
                //     data: {
                //         ProjectID: ProjectID,
                //         UserID: value
                //     }

                // })
            } else if ($(this).prop('checked') == false) {
                var val = $(this).val();
                $('div.' + val).hide();

                // $.ajax({
                //     type: "POST",
                //     url: "/Home/delUsect",
                //     data: {
                //         ProjectID: ProjectID,
                //         UserID: val
                //     }
                // })
            }
        });

    });
</script>