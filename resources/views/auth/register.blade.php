@extends('layouts.app')

<style>
 /* BASIC */
  
 body {
    font-family: "Poppins", sans-serif;
    height: 100vh;
  }
  
  a {
    text-decoration: none;
    color: #92badd;
    display:inline-block;
    text-decoration: none;
    font-weight: 400;
  }
  
  h2 {
    text-decoration: none;
    text-align: center;
    font-size: 16px;
    font-weight: 600;
    text-transform: uppercase;
    display:inline-block;
    margin: 40px 8px 10px 8px; 
    color: #cccccc;
  }
  
  
  
  /* STRUCTURE */
  
  .wrapper {
    display: flex;
    align-items: center;
    flex-direction: column; 
    justify-content: center;
    width: 100%;
    min-height: 100%;
    padding: 20px;
  }
  
  #formContent {
    -webkit-border-radius: 10px 10px 10px 10px;
    border-radius: 10px 10px 10px 10px;
    background: #fff;
    padding: 30px;
    width: 90%;
    max-width: 450px;
    position: relative;
    padding: 0px;
    -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
    box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
    text-align: center;
  }
  
  #formFooter {
    text-decoration: none;
    background-color: #f6f6f6;
    border-top: 1px solid #dce8f1;
    padding: 5px;
    text-align: center;
    -webkit-border-radius: 0 0 10px 10px;
    border-radius: 0 0 10px 10px;
  }
  
  .marg{
    margin: 5px 0px 5px 0px;
  }
  
  /* TABS */
  a:hover{
    text-decoration: none;
  } 
  a:active{
    text-decoration: none;
  } 
  h2:hover{
    text-decoration: none;
  } 
  p:hover{
    text-decoration: none;
  } 
  h2.inactive {
    color: #cccccc;
  }
  
  h2.active {
    color: #0d0d0d;
    border-bottom: 2px solid #5fbae9;
  }
  
  
  
  /* FORM TYPOGRAPHY*/
  
  input[type=button], input[type=submit], input[type=reset]  {
    background-color: #56baed;
    border: none;
    color: white;
    padding: 15px 80px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    text-transform: uppercase;
    font-size: 13px;
    -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
    box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
    margin: 5px 20px 5px 20px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }
  
  input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
    background-color: #39ace7;
  }
  
  input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
    -moz-transform: scale(0.95);
    -webkit-transform: scale(0.95);
    -o-transform: scale(0.95);
    -ms-transform: scale(0.95);
    transform: scale(0.95);
  }

  input[type=text] {
    background-color: #f6f6f6;
    border: none;
    color: #0d0d0d;
    padding: 15px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 5px;
    width: 85%;
    border: 2px solid #f6f6f6;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
  }
  input[type=email] {
    background-color: #f6f6f6;
    border: none;
    color: #0d0d0d;
    padding: 15px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 5px;
    width: 85%;
    border: 2px solid #f6f6f6;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
  }
  input[type=password] {
    background-color: #f6f6f6;
    border: none;
    color: #0d0d0d;
    padding: 15px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 5px;
    width: 85%;
    border: 2px solid #f6f6f6;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
  }
  select{
    background-color: #f6f6f6;
    border: none;
    color: #0d0d0d;
    padding: 15px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 5px;
    width: 85%;
    border: 2px solid #f6f6f6;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
  }
  /* option{
    background-color: #f6f6f6;
    border: none;
    color: #0d0d0d;
    padding: 15px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    width: 85%;
    border: 2px solid #f6f6f6;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
  } */

  input[type=email]:focus {
    background-color: #fff;
    border-bottom: 2px solid #5fbae9;
  }
  input[type=password]:focus {
    background-color: #fff;
    border-bottom: 2px solid #5fbae9;
  }
  input[type=text]:focus {
    background-color: #fff;
    border-bottom: 2px solid #5fbae9;
  }
  select:focus{
    background-color: #fff;
    border-bottom: 2px solid #5fbae9;
  }

  input[type=email]:placeholder {
    color: #cccccc;
  }
  input[type=password]:placeholder {
    color: #cccccc;
  }
  input[type=text]:placeholder {
    color: #cccccc;
  }
  select:placeholder {
    color: #cccccc;
  } 
  
  /* ANIMATIONS */
  
  /* Simple CSS3 Fade-in-down Animation */
  .fadeInDown {
    -webkit-animation-name: fadeInDown;
    animation-name: fadeInDown;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
  }
  
  @-webkit-keyframes fadeInDown {
    0% {
      opacity: 0;
      -webkit-transform: translate3d(0, -100%, 0);
      transform: translate3d(0, -100%, 0);
    }
    100% {
      opacity: 1;
      -webkit-transform: none;
      transform: none;
    }
  }
  
  @keyframes fadeInDown {
    0% {
      opacity: 0;
      -webkit-transform: translate3d(0, -100%, 0);
      transform: translate3d(0, -100%, 0);
    }
    100% {
      opacity: 1;
      -webkit-transform: none;
      transform: none;
    }
  }
  
  /* Simple CSS3 Fade-in Animation */
  @-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
  @-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
  @keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
  
  .fadeIn {
    opacity:0;
    -webkit-animation:fadeIn ease-in 1;
    -moz-animation:fadeIn ease-in 1;
    animation:fadeIn ease-in 1;
  
    -webkit-animation-fill-mode:forwards;
    -moz-animation-fill-mode:forwards;
    animation-fill-mode:forwards;
  
    -webkit-animation-duration:1s;
    -moz-animation-duration:1s;
    animation-duration:1s;
  }
  
  .fadeIn.first {
    -webkit-animation-delay: 0.4s;
    -moz-animation-delay: 0.4s;
    animation-delay: 0.4s;
  }
  
  .fadeIn.second {
    -webkit-animation-delay: 0.6s;
    -moz-animation-delay: 0.6s;
    animation-delay: 0.6s;
  }
  
  .fadeIn.third {
    -webkit-animation-delay: 0.8s;
    -moz-animation-delay: 0.8s;
    animation-delay: 0.8s;
  }
  
  .fadeIn.fourth {
    -webkit-animation-delay: 1s;
    -moz-animation-delay: 1s;
    animation-delay: 1s;
  }

  .fadeIn.fifth {
    -webkit-animation-delay: 1.2s;
    -moz-animation-delay: 1.2s;
    animation-delay: 1.2s;
  }

  /* Simple CSS3 Fade-in Animation */
  .underlineHover:after {
    text-decoration: none;
    display: block;
    left: 0;
    bottom: -10px;
    width: 0;
    height: 2px;
    background-color: #56baed;
    content: "";
    transition: width 0.2s;
  }
  
  .underlineHover:hover {
    text-decoration: none;
    color: #0d0d0d;
  }
  
  .underlineHover:hover:after{
    text-decoration: none;
    width: 100%;
  }
  
  
  
  /* OTHERS */
  
  *:focus {
      outline: none;
  } 
  
  #icon {
    width:60%;
  }
</style>

@section('content')
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('location','Location',['class'=>'col-md-4 control-label'])}}
                            <div class="col-md-6">
                            {{Form::select('location', array('Jakarta' => 'Jakarta', 'Semarang' => 'Semarang', 'Jogjakarta' => 'Jogjakarta'), 'Jakarta',['class'=>'form-control'])}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('locationdetail','Location Detail',['class'=>'col-md-4 control-label'])}}
                            <div class="col-md-6">
                            {{Form::select('locationdetail', array('Kelapa Gading' => 'Kelapa Gading', 'Serpong' => 'Serpong', 'Medan' => 'Medan'), 'Serpong',['class'=>'form-control'])}}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="wrapper fadeInDown">
    <div id="formContent">
      <div class="fadeIn first">
        <img src="assets/image/craftninja logo.png" id="icon" alt="Logo" />
      </div>
        <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="fadeIn second {{ $errors->has('name') ? ' has-error' : '' }}">
                    <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="name" required autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="fadeIn second{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="e-mail" required>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="fadeIn third {{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" name="password" placeholder="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="fadeIn third">
                <input id="password-confirm" type="password" name="password_confirmation" placeholder="confirm password"required>
            </div>
            <!-- <div class="fadeIn fourth">
                {{Form::label('location','Location',['class'=>'col-md-4 control-label'])}}
                <div class="col-md-8 justify-content-center">
                {{Form::select('location', array('Jakarta' => 'Jakarta', 'Semarang' => 'Semarang', 'Jogjakarta' => 'Jogjakarta'), 'Jakarta',['class'=>'form-control'])}}
                </div>
            </div>
            <div class="fadeIn fourth">
                {{Form::label('locationdetail','Location Detail',['class'=>'col-md-4 control-label'])}}
                <div class="col-md-8">
                {{Form::select('locationdetail', array('Kelapa Gading' => 'Kelapa Gading', 'Serpong' => 'Serpong', 'Medan' => 'Medan'), 'Serpong',['class'=>'form-control'])}}
                </div>
            </div> -->
            <div class="marg">
            <select class="fadeIn fourth" aria-label="Default select example" name="location">
              <option selected>Location</option>
              <option value="jakarta">jakarta</option>
              <option value="Semarang">Semarang</option>
              <option value="Jogjakarta">Jogjakarta</option>
            </select>
            </div>
            <div class="marg">
            <select class="fadeIn fourth" aria-label="Default select example" name="locationdetail">
              <option selected>Location Detail</option>
              <option value="Kelapa Gading">Kelapa Gading</option>
              <option value="Serpong">Serpong</option>
              <option value="Medan">Medan</option>
            </select>
            </div>
            <div class="marg">
              <select class="fadeIn fourth" aria-label="Default select example" name="role">
                <option selected disabled value="">Role</option>
                <option value="Tukang">Tukang</option>
                <option value="User">User</option>
              </select>
              </div>
            <input type="submit" class="fadeIn third" value="Register">



        </form>
        <!-- <div id="formFooter"> -->
            <!-- <p><a class="underlineHover" href="/">Home</a></p> -->
            <!-- <p><a class="underlineHover" href="/login">Login</a></p> -->
            <!-- <p><a class="underlineHover" href="#">Forgot Password?</a></p> -->
        <!-- </div> -->
    </div>
</div>
@endsection
