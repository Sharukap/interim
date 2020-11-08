<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dark Dashboard</title>
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
                <a class="nav-link text-light font-italic p-2" href="/complain">General Module</a>
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
        <div class="container-fluid">
            <div class="row">
            <form action="/admin/create1" method="post">
                @csrf
                       <h6>Personal postDetails</h6>
                       <div class="input-group mb-3">
                           <div class="input-group-prepend">
                               <span class="input-group-text">Full Name</span>
                           </div>
                           <input type="text" class="form-control" name="name" data-form-field>
                       </div>

                       <div class="input-group mb-3">
                           <input type="text" class="form-control" name="email" placeholder="Your Email">
                           <div class="input-group-append">
                               <span class="input-group-text">@example.com</span>
                           </div>
                       </div>
                       <select name="Role" class="custom-select">
                           <option selected>Select Role</option>
                           <option value="1">Administrator</option>
                           <option value="2">Head of Org.</option>
                           <option value="3">Manager</option>
                           <option value="4">Staff</option>
                           <option value="5">Citizen</option>
                       </select>
                       <hr>
                       <h6>Additional Details</h6>
                       <select name="Organization" class="custom-select mb-3">
                           <option selected>Select Organization</option>
                           <option value="MoE">Ministry of Environment</option>
                           <option value="MoW">Ministry of Wildlife</option>
                           <option value="RDA">Road Development Agency</option>
                       </select>
                       <select name="Designation" class="custom-select">
                           <option selected>Select Designation</option>
                           <option value="manager">Manager</option>
                           <option value="dept.manager">Depity Manager</option>
                           <option value="assit.manager">Assistant Manager</option>
                       </select>
                       <hr>
                       <div class="form-check">
                           <label class="form-check-label">
                               <input type="checkbox" class="form-check-input" value=""><strong>This information has been verified.</strong>
                           </label>
                       </div>
                       <div class="form-submit">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            
                        </div>
					</form>
            </div>
        </div>
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