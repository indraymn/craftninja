<style>
  /* Add a black background color to the top navigation bar */
  .topnav {
    overflow: hidden;
    background-color: #e9e9e9;
  }

  /* Style the links inside the navigation bar */
  .topnav a {
    float: left;
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }

  /* Change the color of links on hover */
  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }

  /* Style the "active" element to highlight the current page */
  .topnav a.active {
    background-color: #2196F3;
    color: white;
  }

  /* Style the search box inside the navigation bar */
  .topnav input[type=text] {
    float: right;
    padding: 6px;
    border: none;
    margin-top: 8px;
    margin-right: 16px;
    font-size: 17px;
  }

  /* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
  @media screen and (max-width: 600px) {

    .topnav a,
    .topnav input[type=text] {
      float: none;
      display: block;
      text-align: left;
      width: 100%;
      margin: 0;
      padding: 14px;
    }

    .topnav input[type=text] {
      border: 1px solid #ccc;
    }
  }

  .icon {
    object-fit: cover;
    width: 16px;
  }

  .search {
    margin-left: 100px;
  }

  .navbar-brand {
    padding: 0px;
  }
</style>

{{-- <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        
        <a class="navbar-brand" href="#">{{config('app.name','CraftNinja')}}</a>
</div>
<div id="navbar" class="collapse navbar-collapse">

</div>
<!--/.nav-collapse -->
</div>
</nav> --}}

<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">

      <!-- Collapsed Hamburger -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!-- Branding Image -->
      <!-- <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a> -->
      <img src="/assets/image/craftninja logo.png" class="navbar-brand" alt="Logo" href="{{ url('/') }}" style="padding: 0px" />
    </div>

    <div class="collapse navbar-collapse" id="app-navbar-collapse">
      <!-- Left Side Of Navbar -->
      <ul class="nav navbar-nav">
        &nbsp;
      </ul>
      <ul class="nav navbar-nav">
        <li><a href="/" style="color: black;font-weight:bold;">Home</a></li>
        <li><a href="/category" style="color: black; font-weight:bold;">Category</a></li>
        {{-- <li><a href="/posts">Show</a></li>
                <li><a href="/posts/create">Create</a></li> --}}
      </ul>
      <ul class="nav navbar-nav">
        <li>
          <div class="form-inline search" style="margin-top: 7px; margin-left:30px;">
            <input type="search" class="form-control rounded" placeholder="Cari disini..." aria-label="Search" aria-describedby="search-addon" style="width: 700px;;" id="searchPost" />
            <button id="btnSub" href="/category" type="button" class="btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
              </svg></button>
          </div>
        </li>
      </ul>
      <!-- Right Side Of Navbar -->
      <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        @if (Auth::guest())
        <li><a href="{{ route('login') }}" style="color: black;font-weight:bold; ">Login</a></li>
        <li><a href="{{ route('register') }}" style="color: black;font-weight:bold;">Register</a></li>
        @else
        <li class="dropdown">
          <button href="#" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" role="button" aria-expanded="false" style="color: black;font-weight:bold; margin-top:7px;display:inline; padding-left:15px; padding-right:15px;">
            {{ Auth::user()->name }} <span class="caret"></span>
          </button>
          <a href="/favorite/{{Auth::user()->id}}" style="display: inline; font-size:20px;margin-top:1px;" data-toggle="tooltip" data-placement="top" title="Favourites">⭐️</a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/profile">Profile</a></li>
            @if (Auth::user()->role == "Tukang")
            <li><a href="/dashboard">Manage Post</a></li>
            @endif
            <li>
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                Logout
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
          </ul>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>