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
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->role }}
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
                <a class="nav-link text-light font-italic p-2" href="/dashboard">General Module</a>
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
    <h3 class="p-3 display-4" style="display:inline">Administrator</h3>
<input type="text" style=" float: right; padding: 6px; margin-top: 20px; margin-right: 16px;border: none;font-size: 17px;" placeholder="Search..." size="30">
<hr>
<div class="flex row border-secondary rounded-lg ml-3 justify-content-between">
    <span>
        <h5 class="p-3">User Details</h5>
    </span>
    <span>
        <a href="/admin/create" class="btn btn-info mr-4" role="button" >Create User</a>
    </span>
    
      

    <table class="table table-dark table-striped border-secondary rounded-lg mr-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Organization</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>More Data</th>
                <th>Change Privilege</th>
                <th>Edit User</th>
                <th>Disable User</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Users as $row) <tr>
                <td>{{$row['id']}}</td>
                <td>Saman Perera</td>
                <td>Environment Ministry</td>
                <td>saman@gmail.com</td>
                <td>Admin</td>
                <td>Active</td>
                <td class="text-center"><a href="#" class="btn btn-outline-info" role="button" data-toggle="modal" data-target="#moreInfo">...</a></td>
                <td class="text-center"><a href="#" class="btn btn-outline-info" role="button" data-toggle="modal" data-target="#privilege">Privilege</a></td>
                <td><a href="#" class="btn btn-outline-warning" role="button" data-toggle="modal" data-target="#userEdit">Edit</a></td>
                <td><a href="#" class="btn btn-outline-danger" role="button">Disable</a></td>
                </tr>
                @endforeach
        </tbody>
    </table>
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
<!-- adding the rest of the modals this section can later be included in a seperate modal file -->
       <!-- The Modal for Create -->
   <div class="modal" id="userCreate">
       <div class="modal-dialog">
           <div class="modal-content">

               <!-- Modal Header -->
               <div class="modal-header">
                   <h4 class="modal-title">Create User</h4>
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>

               <!-- Modal body -->
               <div class="modal-body">
                   <form action="/admin/create1" method="get">
                       <h6>Personal Details</h6>
                       <div class="input-group mb-3">
                           <div class="input-group-prepend">
                               <span class="input-group-text">Full Name</span>
                           </div>
                           <input type="text" class="form-control">
                       </div>

                       <div class="input-group mb-3">
                           <input type="text" class="form-control" placeholder="Your Email">
                           <div class="input-group-append">
                               <span class="input-group-text">@example.com</span>
                           </div>
                       </div>
                       <select name="Role" class="custom-select">
                           <option selected>Select Role</option>
                           <option value="admin">Administrator</option>
                           <option value="head">Head of Org.</option>
                           <option value="manager">Manager</option>
                           <option value="staff">Staff</option>
                           <option value="citizen">Citizen</option>
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


               </div>

               <!-- Modal footer -->
               <div class="modal-footer">
                   <button type="submit" class="btn btn-primary">Submit</button>
                   <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
               </div>
               </form>
           </div>
       </div>
   </div>
   <!-- Modal for Edit -->
   <div class="modal" id="userEdit">
       <div class="modal-dialog">
           <div class="modal-content">

               <!-- Modal Header -->
               <div class="modal-header">
                   <h4 class="modal-title">Edit User</h4>
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>

               <!-- Modal body -->
               <div class="modal-body">
                   <form action="" method="">
                       <h6>Personal Details</h6>
                       <div class="input-group mb-3">
                           <div class="input-group-prepend">
                               <span class="input-group-text">Full Name</span>
                           </div>
                           <input type="text" class="form-control" placeholder="current user's name">
                       </div>

                       <div class="input-group mb-3">
                           <input type="text" class="form-control" placeholder="current user's email">
                           <div class="input-group-append">
                               <span class="input-group-text">@example.com</span>
                           </div>
                       </div>
                       <select name="Role" class="custom-select mb-3">
                           <option selected>Current Role</option>
                           <option value="admin">Administrator</option>
                           <option value="head">Head of Org.</option>
                           <option value="manager">Manager</option>
                           <option value="staff">Staff</option>
                           <option value="citizen">Citizen</option>
                       </select>
                       <select name="Organization" class="custom-select mb-3">
                           <option selected>Current Organization</option>
                           <option value="MoE">Ministry of Environment</option>
                           <option value="MoW">Ministry of Wildlife</option>
                           <option value="RDA">Road Development Agency</option>
                       </select>
                       <select name="Designation" class="custom-select">
                           <option selected>Current Designation</option>
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
               </div>

               <!-- Modal footer -->
               <div class="modal-footer">
                   <button type="submit" class="btn btn-primary">Edit</button>
                   <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
               </div>
               </form>
           </div>
       </div>
   </div>

   <!-- The Modal for privilege-->
   <div class="modal" id="privilege">
       <div class="modal-dialog">
           <div class="modal-content">

               <!-- Modal Header -->
               <div class="modal-header">
                   <h4 class="modal-title">Edit Privilege</h4>
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>

               <!-- Modal body -->
               <div class="modal-body">
                   <form action="" method="">
                       <div class="input-group mb-3">
                           <div class="input-group-prepend">
                               <span class="input-group-text">User ID:</span>
                           </div>
                           <input type="text" class="form-control" placeholder="(shows user id. can't be edited)" readonly>
                       </div>

                       <select name="Role" class="custom-select mb-3" disabled>
                           <option selected>(will show current role. cannot be edited)</option>
                           <option value="admin">Administrator</option>
                           <option value="head">Head of Org.</option>
                           <option value="manager">Manager</option>
                           <option value="staff">Staff</option>
                           <option value="citizen">Citizen</option>
                       </select>
                       <label class="ml-1" for="modules">Module List:</label>
                       <div class="ml-3">
                           <fieldset>
                               <input type="checkbox" name="modules[]" value="general"><label class="ml-2">General Module</label> <br>
                               <input type="checkbox" name="modules[]" value="user"><label class="ml-2">User Module</label> <br>
                               <input type="checkbox" name="modules[]" value="admin"><label class="ml-2">Administrator Module</label> <br>
                               <input type="checkbox" name="modules[]" value="security"><label class="ml-2">Security Module</label> <br>
                               <input type="checkbox" name="modules[]" value="env"><label class="ml-2">Environmental Module</label> <br>
                           </fieldset>
                       </div>


               </div>

               <!-- Modal footer -->
               <div class="modal-footer">
                   <button type="submit" class="btn btn-primary">Save</button>
                   <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
               </div>
               </form>
           </div>
       </div>
   </div>


   <!-- Modal for More details -->
   <div class="modal" id="moreInfo">
       <div class="modal-dialog">
           <div class="modal-content">

               <!-- Modal Header -->
               <div class="modal-header">
                   <h4 class="modal-title">All Data</h4>
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>

               <!-- Modal body -->
               <div class="modal-body">
                   <form action="/action_page.php">
                       <div class="form-group">
                           <label class="ml-1">Name:</label>
                           <label>username</label>                           
                       </div>
                       <div class="form-group">
                           <label class="ml-1">Email:</label>
                           <label>useremail</label>   
                       </div>
                       <div class="form-group">
                           <label class="ml-1">Role:</label>
                           <label>userrole</label>   
                       </div>
                       <div class="form-group">
                           <label class="ml-1">Organization:</label>
                           <label>userorg</label>   
                       </div>
                       <div class="form-group">
                           <label class="ml-1">Designation:</label>
                           <label>userdesig</label>   
                       </div>
                       <label class="ml-1" for="modules">Module List:</label>
                       <div class="ml-3">
                           <fieldset disabled>
                               <input type="checkbox" name="modules[]" value="general"><label class="ml-2">General Module</label> <br>
                               <input type="checkbox" name="modules[]" value="user"><label class="ml-2">User Module</label> <br>
                               <input type="checkbox" name="modules[]" value="admin"><label class="ml-2">Administrator Module</label> <br>
                               <input type="checkbox" name="modules[]" value="security"><label class="ml-2">Security Module</label> <br>
                               <input type="checkbox" name="modules[]" value="env"><label class="ml-2">Environmental Module</label> <br>
                           </fieldset>
                       </div>
                   </form>

               </div>

               <!-- Modal footer -->
               <div class="modal-footer">
                   <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
               </div>
               </form>
           </div>
       </div>
   </div>
   <!-- End of modal section -->
</body>
</html>