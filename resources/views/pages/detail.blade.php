@extends('layouts.app')
<style>
    body {
        background: #f5f5f5;
        margin-top: 20px;
    }

    /*------- portfolio -------*/
    .project {
        margin: 15px 0;
    }

    .no-gutter .project {
        margin: 0 !important;
        padding: 0 !important;
    }

    .has-spacer {
        margin-left: 30px;
        margin-right: 30px;
        margin-bottom: 30px;
    }

    .has-spacer-extra-space {
        margin-left: 30px;
        margin-right: 30px;
        margin-bottom: 30px;
    }

    .has-side-spacer {
        margin-left: 30px;
        margin-right: 30px;
    }

    .project-title {
        font-size: 1.25rem;
    }

    .project-skill {
        font-size: 0.9rem;
        font-weight: 400;
        letter-spacing: 0.06rem;
    }

    .project-info-box {
        margin: 15px 0;
        background-color: #b3daf2;
        padding: 30px 40px;
        border-radius: 5px;
    }

    .project-info-box p {
        margin-bottom: 15px;
        padding-bottom: 15px;
        border-bottom: 1px solid #d5dadb;
    }

    .project-info-box p:last-child {
        margin-bottom: 0;
        padding-bottom: 0;
        border-bottom: none;
    }

    /* img {
        width: 100%;
        max-width: 100%;
        height: auto;
        -webkit-backface-visibility: hidden;
    } */
    div.stars {
    display: inline-block;
    }

    input.star { display: none; }

    label.star {
    float: right;
    padding: 10px;
    font-size: 20px;
    color: 
    #444;
    transition: all .2s;
    }

    input.star:checked ~ label.star:before {
    content: '⭐️';
    color: 
    #e74c3c;
    transition: all .25s;
    }

    input.star-5:checked ~ label.star:before {
    color: #e74c3c;
    text-shadow: 0 0 5px #7f8c8d;
    
    }

    input.star-1:checked ~ label.star:before { 
        color: #F62; }

    label.star:hover { transform: rotate(-15deg) scale(1.3); content: '⭐️';}

    label.star:before {
    content: '★';
    font-family: FontAwesome;
    }


    .horline > li:not(:last-child):after {
        content: " |";
    }
    .horline > li {
    font-weight: bold;
    color: #ff7e1a;
        
    }

    .mr-5 {
        margin-right: 5px !important;
    }

    .mb-0 {
        margin-bottom: 0 !important;
    }

    .project-info-box p {
        margin-bottom: 15px;
        padding-bottom: 15px;
        border-bottom: 1px solid #d5dadb;
    }

    h3 {
        margin-top: 0px !important;
        font-weight: 900 !important;
        color: black !important;
    }

    h4 {
        margin-top: 0px !important;
        font-weight: 900 !important;
        color: black !important;
    }

    p {
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-weight: 300;
        color: black;
        font-size: 1em;
        letter-spacing: 0.03rem;
        margin-bottom: 10px;
    }

    b,
    strong {
        font-weight: 900 !important;
    }

    #myCarousel {
        margin-top: 15px !important;
    }
</style>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{$data->cover_image}}" alt="Los Angeles">
                    </div>

                    <div class="item">
                        <img src="{{$data->cover_image}}" alt="Chicago">
                    </div>

                    <div class="item">
                        <img src="{{$data->cover_image}}" alt="New York">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="project-info-box">
                <div class="col-md-11">
                    <h3>{{$data->title}}</h3>
                </div>
                <div class="col-md-1">
                    @if (Auth::guest())
                        
                    @else
                    <button type="button" class="btn btn-outline-danger"data-toggle="tooltip" data-placement="top" title="Add to Favourites" id="addFav" onclick="addcao({{Auth::user()->id}}, {{$data->id}})"><i class="fa fa-heart"></i>                     
                    @endif
                </div>

                <p class="mb-0">Deskripsi : <br> {{$data->body}} </p>
            </div><!-- / project-info-box -->
        </div><!-- / column -->

        <div class="col-md-5">
            <div class="project-info-box mt-0">
                <h3>Lokasi</h3>
                <p class="mb-0">Alamat : {{$data->location}}, {{$data->locationdetail}} </p>
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe src='https://api.mapbox.com/styles/v1/skyeyaya/ckokk7tvi0tyc18ozce4u6guh.html?fresh=true&title=false&access_token=pk.eyJ1Ijoic2t5ZXlheWEiLCJhIjoiY2tvazBrenc5MGMxaDJybDVybG9nc2xpZSJ9.FdGVvzozDUZs-0YgZwpfJA'></iframe>
                </div>
                <p class="mb-0">Kontak : {{$data->contact_name}}</p>
                <p class="mb-0">Phone : {{$data->contact_phone}}</p>
            </div><!-- / project-info-box -->
            <div>
                <h5 style="display: inline">ULASAN PALING MEMBANTU</h5>
                <button  class="btn btn-primary" style="display: inline; " data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" >Review</button>
            </div>
            <button  class="btn btn-success" style="float:right " data-toggle="modal" data-target="#allModal" data-whatever="@getbootstrap" >Lihat Semua Review</button>

            @if (Auth::guest())
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Please Login First</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            @else
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                      <h1 class="modal-title" id="exampleModalLabel">Ulasan oleh {{Auth::user()->name}}</h1>
                      
                    </div>
                    <div class="modal-body">
                        <img src="/storage/cover_images/{{$data->cover_image}}" alt="Los Angeles" style="width:70%;height:30%;">
                        <h4>Name : {{$data->title}}</h4>
                        {!! Form::open(['action' => 'ReviewController@store','method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
                            <input type="hidden" value="{{Auth::user()->id}}" name="userid">
                            <input type="hidden" value="{{$data->id}}" name="postid">
                            <div class="form-group required"style="margin-right:50px;">
                            <div class="col-sm-12" >
                                <input class="star star-5" value="5" id="star-5" type="radio" name="star" checked/>
                                <label class="star star-5" for="star-5"></label>
                                <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                                <label class="star star-4" for="star-4"></label>
                                <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                                <label class="star star-3" for="star-3"></label>
                                <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                                <label class="star star-2" for="star-2"></label>
                                <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                                <label class="star star-1" for="star-1"></label>
                            </div>
                            </div>
                            <h2 id="setStar" style="text-align: right;"></h2>
                            <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text" name="reviewmsg"></textarea>
                            </div>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        {{Form::submit('Send Review',['class' => 'btn btn-primary'])}}
                        {!! Form::close() !!}    
                        </div>
                        <div class="modal-footer">
                                      
                        </div>

                  </div>
                </div>
              </div>
            @endif
            <div class="modal fade" id="allModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                      <h1 class="modal-title" id="exampleModalLabel">Semua Ulasan</h1>
                      
                    </div>
                    <div class="modal-body">
                    @foreach ($review as $rev)
                
                    <div class="project-info-box">
                        <h2>{{$rev->rating}}</h2>
                        @if ($rev->rating == 5)
                        <input class="star star-5" value="5" id="star-5" type="radio" name="star" checked/>
                        <label class="star star-5" for="star-5"></label>
                        <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                        <label class="star star-4" for="star-4"></label>
                        <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                        <label class="star star-3" for="star-3"></label>
                        <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                        <label class="star star-2" for="star-2"></label>
                        <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                        <label class="star star-1" for="star-1"></label>
                        @endif
                        @if ($rev->rating == 4)
                        <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                        <label class="star star-5" for="star-5"></label>
                        <input class="star star-4" value="4" id="star-4" type="radio" name="star" checked/>
                        <label class="star star-4" for="star-4"></label>
                        <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                        <label class="star star-3" for="star-3"></label>
                        <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                        <label class="star star-2" for="star-2"></label>
                        <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                        <label class="star star-1" for="star-1"></label>
                        @endif
                        @if ($rev->rating == 3)
                        <input class="star star-5" value="5" id="star-5" type="radio" name="star" />
                        <label class="star star-5" for="star-5"></label>
                        <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                        <label class="star star-4" for="star-4"></label>
                        <input class="star star-3" value="3" id="star-3" type="radio" name="star" checked/>
                        <label class="star star-3" for="star-3"></label>
                        <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                        <label class="star star-2" for="star-2"></label>
                        <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                        <label class="star star-1" for="star-1"></label>
                        @endif
                        @if ($rev->rating == 2)
                        <input class="star star-5" value="5" id="star-5" type="radio" name="star" />
                        <label class="star star-5" for="star-5"></label>
                        <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                        <label class="star star-4" for="star-4"></label>
                        <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                        <label class="star star-3" for="star-3"></label>
                        <input class="star star-2" value="2" id="star-2" type="radio" name="star" checked/>
                        <label class="star star-2" for="star-2"></label>
                        <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                        <label class="star star-1" for="star-1"></label>
                        @endif
                        @if ($rev->rating == 1)
                        <input class="star star-5" value="5" id="star-5" type="radio" name="star" />
                        <label class="star star-5" for="star-5"></label>
                        <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                        <label class="star star-4" for="star-4"></label>
                        <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                        <label class="star star-3" for="star-3"></label>
                        <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                        <label class="star star-2" for="star-2"></label>
                        <input class="star star-1" value="1" id="star-1" type="radio" name="star" checked/>
                        <label class="star star-1" for="star-1"></label>
                        @endif
                        <h4>{{$rev->user->name}}</h4>
                        <p class="mb-0">{{$rev->message}}</p>
                    </div><!-- / project-info-box -->
                @endforeach
                        </div>
                        <div class="modal-footer">
                                      
                        </div>

                  </div>
                </div>
              </div>
            <?php $i = 0 ?>
            @if (count($review) > 0)
                @foreach ($review as $rev)
                <?php 
                if ($i == 3) {
                    # code...
                    break;
                }
                ?>
                <div class="project-info-box">
                    @if ($rev->rating == 5)
                        <input class="star star-5" value="5" id="star-5" type="radio" name="star" checked/>
                        <label class="star star-5" for="star-5"></label><input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                        <label class="star star-4" for="star-4"></label>
                        <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                        <label class="star star-3" for="star-3"></label>
                        <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                        <label class="star star-2" for="star-2"></label>
                        <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                        <label class="star star-1" for="star-1"></label>
                        @endif
                        @if ($rev->rating == 4)
                        <input class="star star-5" value="5" id="star-5" type="radio" name="star" />
                        <label class="star star-5" for="star-5"></label><input class="star star-4" value="4" id="star-4" type="radio" name="star" checked/>
                        <label class="star star-4" for="star-4"></label>
                        <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                        <label class="star star-3" for="star-3"></label>
                        <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                        <label class="star star-2" for="star-2"></label>
                        <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                        <label class="star star-1" for="star-1"></label>
                        @endif
                        @if ($rev->rating == 3)
                        <input class="star star-5" value="5" id="star-5" type="radio" name="star" />
                        <label class="star star-5" for="star-5"></label>
                        <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                        <label class="star star-4" for="star-4"></label>
                        <input class="star star-3" value="3" id="star-3" type="radio" name="star"checked/>
                        <label class="star star-3" for="star-3"></label>
                        <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                        <label class="star star-2" for="star-2"></label>
                        <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                        <label class="star star-1" for="star-1"></label>
                        @endif
                        @if ($rev->rating == 2)
                        <input class="star star-5" value="5" id="star-5" type="radio" name="star" />
                        <label class="star star-5" for="star-5"></label><input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                        <label class="star star-4" for="star-4"></label>
                        <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                        <label class="star star-3" for="star-3"></label>
                        <input class="star star-2" value="2" id="star-2" type="radio" name="star" checked/>
                        <label class="star star-2" for="star-2"></label>
                        <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                        <label class="star star-1" for="star-1"></label>
                        @endif
                        @if ($rev->rating == 1)
                        <input class="star star-5" value="5" id="star-5" type="radio" name="star" />
                        <label class="star star-5" for="star-5"></label><input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                        <label class="star star-4" for="star-4"></label>
                        <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                        <label class="star star-3" for="star-3"></label>
                        <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                        <label class="star star-2" for="star-2"></label>
                        <input class="star star-1" value="1" id="star-1" type="radio" name="star" checked/>
                        <label class="star star-1" for="star-1"></label>
                        @endif
                    <h4>{{$rev->user->name}}</h4>
                    <p class="mb-0">{{$rev->message}}</p>
                </div><!-- / project-info-box -->
            <?php $i++ ?>
                @endforeach
            @else                 
            <div class="project-info-box">
                <h4>No Review Has been posted yet</h4>
            </div><!-- / project-info-box -->
            @endif

            <div class="col-sm-1 col-sm-offset-9">
                <a href=""  data-toggle="modal" data-target="#reportModal" class="btn btn-danger">Order</a>
            </div>
        </div>
        <div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="reportModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title" id="exampleModalLabel">Kategori Order</h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <h5>Bagaimana anda ingin order?</h5>
                    <input class="iklan" type="radio" />
                    <label for="iklan">Datang ketempat</label>
                    <br/>
                    <input class="iklan" type="radio" />
                    <label for="iklan">Datang kerumah</label>
                    <br/>
                    <input class="iklan" type="radio" />
                    <label for="iklan">Periksa Lokasi Anda</label>
                    <br/>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    {{Form::submit('Submit',['class' => 'btn btn-primary', 'data-toggle'=>"modal", 'data-target'=>"#thankyouModal",'data-dismiss'=>"modal"])}}
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog" aria-labelledby="reportModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title" id="exampleModalLabel">Order Berhasil</h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <h5>Mohon ditunggu</h5>
                     </div>
              </div>
            </div>
          </div>
    </div>
</div>


@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<script>
$(document) .ready(function() {
    $('#setStar').text("Very Good");
    $('#star-5').on('click',function(){
         $('#setStar').text("Very Good");
    })
    $('#star-4').on('click',function(){
         $('#setStar').text("Good Enough");
    })
    $('#star-3').on('click',function(){
         $('#setStar').text("Okay");
    })
    $('#star-2').on('click',function(){
         $('#setStar').text("Bad");
    })
    $('#star-1').on('click',function(){
         $('#setStar').text("Very Bad");
    })

    
});
function addcao(userid, postid){
    $.ajax({
               type:'POST',
               url:'/favorite/store',
               data:{
                post_id: postid,
                user_id: userid
               },
               success:function(data) {
                   console.log(data);
               }
        });
    
}
</script>



