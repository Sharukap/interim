<!DOCTYPE html>
<html lang="en">
<head>
  <title>Complain Module</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <style>
    .inline{
        display: inline;
      }
  </style>
</head>

<body class="bg-secondary">

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand/logo -->
        <a class="navbar-brand mr-auto" href="#">
        <img src="Logo.jpeg" alt="logo" style="width:70px;">
        </a>

        <a href="#" class="text-secondary mr-1">Help          |</a>

        <a href="#" class="text-secondary">
            <i class="fas fa-bell mr-1"> <span class="badge badge-light">4</span>        |</i>
        </a>

        <a href="#" class="text-secondary">
            <i class="fas fa-cog mr-1">          |</i>
        </a>


        <ul class="navbar-nav">
        <!-- Authentication Links -->
        @guest
        <li class="nav-item">
            <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
        </ul>
    </nav>



<br>

<div class="container-fluid">
    <div class="row">
    <div class="col-lg-2">      <!--if screen size goes below large then start stacking-->
        <div class="p-2 border bg-dark border-dark rounded-lg flex-shrink-3">
            <h4 class="p-2 border border-light rounded-lg text-white">Navigation Bar</h5>
            <!-- A vertical navbar -->
            <nav class="navbar bg-dark">
            <!-- Links -->
            <ul class="navbar-nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link text-light font-italic p-2" href="/dashboard/complaint">General Module</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light font-italic p-2" href="/dashboard/admin">User Management</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light font-italic p-2" href="#">Environment Module</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light font-italic p-2" href="#">Admin Module</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light font-italic p-2" href="#">Security Module</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light font-italic p-2" href="#">Update Map</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light font-italic p-2" href="#">Requests</a>
            </li>
            </ul>
            </nav>
        </div>
    </div>


    <div style="background-color:#ECF0F1" class="col-md p-2 border border-secondary rounded-lg ml-2 mr-3">
      <!-- @yield('cont') -->
      <h3 class="p-3 display-4">Complaints</h3><hr>
      <div class="row justify-content-center border-secondary rounded-lg ml-3">
    
      </br>
        <div class="col-md-3 ">
        <a href="/newcrime" class="btn btn-info mr-4" role="button" >Make new complaint</a>
        </div>
        <div class="col-md-3 ">
        <form action="\trackcrime" method="get">
        @csrf
        <input type="hidden" class="form-control" name="create_by" value="{{ Auth::user()->id }}">
        <button type="submit" class="btn btn-primary" >Track my complaints</button>
        <!-- <a href="/trackcrime" class="btn btn-info mr-4" role="button">Track my complaints</a> -->
        </form>
        </div>
        <div class="col-md-3 ">
        <a href="#" class="btn btn-info mr-4" role="button" data-toggle="modal" data-target="#complaintLog">How it works</a>
        </div>
    </div>
    </br>
    </hr>
    <h5 class="p-3 display-4">Contacts</h5>
    <div class="row justify-content-center">
        <div class="col-md-3">
            
            <div class="card bg-dark text-light">
                <div class="card-header text-center">
                    <a class="nav-link text-light font-italic p-2" href="#">Department of Wildlife Conservation</a>
                
                </div>
                    <div class="card-body text-center text-light">
                        <p class="card-text p-2">Hotline 0xxxx</p>
                        <p class="card-text p-2">email 0xxxx@gmail.com</p>                       
                    </div>
            </div>
        </div>
        <div class="col-md-3">
        <div class="card bg-dark text-light">
            <div class="card-header text-center">
                <a class="nav-link text-light font-italic p-2" href="#">Department of Forest Conservation</a>
            </div>
            <div class="card-body text-center text-light">
            <p class="card-text p-2">Hotline 0xxxx</p>
            <p class="card-text p-2">email 0xxxx@gmail.com</p>     
            </div>
        </div>
        </div>
        <div class="col-md-3">
        <div class="card bg-dark text-light">
            <div class="card-header text-center">
                <a class="nav-link text-light font-italic p-2" href="#">Central Environment Authority</a>
            </div>
            <div class="card-body text-center text-light">
            <p class="card-text p-2">Hotline 0xxxx</p>
            <p class="card-text p-2">email 0xxxx@gmail.com</p>     
            </div>
        </div>
        </div>
        <div class="col-md-3">
        <div class="card bg-dark text-light">
            <div class="card-header text-center">
                <a class="nav-link text-light font-italic p-2" href="#">List of regional offices</a>
            </div>
            <div class="card-body text-center text-light">
            <a class="nav-link text-light font-italic p-2" href="#">Forest officers</a>
            <a class="nav-link text-light font-italic p-2" href="#">Wildlife</a>   
            </div>
        </div>
        </div>
        
        
    </div>
    <hr>
   
      <!-- end of content -->
    </div>
</div>
</div>
<br>
<div class="d-flex  bg-light justify-content-end">
  <a href="#" class="text-secondary mr-2">
    <i class="fab fa-facebook-square"></i> Facebook |
  </a>
  <a href="#" class="text-secondary mr-2">
    <i class="fab fa-twitter-square"></i> Twitter |
  </a>
  <a href="#" class="text-secondary mr-2">
    <i class="fab fa-instagram"></i>  Instagram
  </a>
</div>
<div class="d-flex bg-light justify-content-center">
  <h5 class="text-secondary"><i class="far fa-copyright"></i> 2020 by Reforest Sri Lanka</h5><br>
</div>
<div class="d-flex bg-light justify-content-center">
  <h6>All rights reserved</h6>
</div>

</body>
</html>