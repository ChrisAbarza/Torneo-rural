<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="#">Brand</a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
            &#9776;
        </button>
        <div class="collapse navbar-collapse" id="exCollapsingNavbar">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Service</a></li>
                <li class="nav-item"><a href="#" class="nav-link">More</a></li>
            </ul>
            <?php if (!$this->ion_auth->logged_in())
			{  ?>
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                <li class="nav-item order-2 order-md-1"><a href="#" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg"></i></a></li>
                <li class="dropdown order-1">
                    <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Login <span class="caret"></span></button>
                    <ul class="menu-login dropdown-menu dropdown-menu-right mt-2">
                       <li class="px-3 py-2">
                           <form action="login" method="post" class="form" role="form">
                                <div class="form-group">
                                    <input type="text" name="identity" class="form-control form-control-sm" value="" id="identity">
                                </div>
                                <div class="form-group">
                                    <input id="password" name="password" placeholder="Contraseña" class="form-control form-control-sm" type="password" required="">
                                </div>
                                <div class="form-group">
                                	Recordar:
                                    <input type="checkbox" name="remember" value="1" id="remember">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-block" name="submit" value="Login">
                                </div>
                                <div class="form-group text-center">
                                    <small><a href="#" data-toggle="modal" data-target="#modalPassword">Forgot password?</a></small>
                                </div>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            <?php  } else {?>
            	<ul class="nav navbar-nav flex-row justify-content-between ml-auto">
            		<li class="nav-item"><a href="logout" class="nav-link">Cerrar sesion</a></li>
            	</ul>
            <?php  }?>	

        </div>
    </div>
</nav>

<div id="modalPassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Forgot password</h3>
                <button type="button" class="close font-weight-light" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <p>Reset your password..</p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <button class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Page Content -->
<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light">Fixed Full Page Background Image</h1>
      <p class="lead">In this snippet, the background image is fixed to the body element. Content on the page will scroll, but the image will remain in a fixed position!</p>
      <p class="lead">Scroll down...</p>
      <?php  
      	if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			echo "wena";


		
		}
      ?>
      <div style="height: 700px"></div>
      <p class="lead mb-0">You've reached the end!</p>
    </div>
  </div>
</div>

</body>
</html>