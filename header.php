<?php
    include "init.php";
    // include "inc/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Blood Bank</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <header>
        <div class="head_logo container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12 text-center">
                    <div class="logo  text-uppercase">
                        <h1><b>BLOOD BANK</b></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mainlogo">
<!--            <a href="index.php"><img src="images/logo.png" alt=""/></a>-->
        </div>
        <div class="container main_menu">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12 ">
                    <!-- Fixed navbar -->
                    <nav class="navbar navbar-default">
                        <div class="container">
                            <div class="navbar-header">
                                <!-- The mobile navbar-toggle button can be safely removed since you do not need it in a non-responsive implementation -->
                                <a class="navbar-brand" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            </div>
                            <!-- Note that the .navbar-collapse and .collapse classes have been removed from the #navbar -->
                            <div id="navbar">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="#app_view_about" id="about_us">About</a></li>
                                    <li><a href="#app_view_contact" id="contact_us">Contact</a></li>

                                    <?php
                                        if(isset($_SESSION['SESS_MEMBER_ID'])) {
                                            ?>
                                                <li><a href="logout.php">Logout</a> </li>
                                                <li><a href="admin.php">Admin Panel</a> </li>
                                            <?php
                                        }
                                        else {
                                            ?>
                                                <li><a href="#signup" data-toggle="modal" data-target=".bs-modal-sm">Login</a></li>
                                            <?php
                                        }
                                    ?>

                                </ul>
                            </div><!--/.nav-collapse -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!--this is for the nurese picture-->
    </header>





    <!-- Modal -->
    <div class="modal fade bs-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <br>
            <div class="bs-example bs-example-tabs">
                <ul id="myTab" class="nav nav-tabs">
                  <li class="active"><a href="#signin" data-toggle="tab">Sign In</a></li>
                  <li class=""><a href="#signup" data-toggle="tab">Register</a></li>
                </ul>
            </div>
          <div class="modal-body">
            <div id="myTabContent" class="tab-content">
            
            <div class="tab-pane fade active in" id="signin">
                <form action="login.php" method="post" class="form-horizontal">
                  <fieldset>

                    <div class="control-group">
                      <label class="control-label" for="userid">Email: </label>
                      <div class="controls">
                        <input required="" id="userid" name="username" type="text" class="form-control" placeholder="something@mail.com" class="input-medium" required="">
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="passwordinput">Password: </label>
                      <div class="controls">
                        <input required="" id="passwordinput" name="password" class="form-control" type="password" placeholder="********" class="input-medium">
                      </div>
                    </div>


                    <div class="control-group">
                      <label class="control-label" for="signin"></label>
                      <div class="controls">
                        <button id="signin" type="submit" class="btn btn-success">Sign In</button>
                      </div>
                    </div>
                  </fieldset>
                </form>
            </div>
            <div class="tab-pane fade" id="signup">
                <form class="form-horizontal">
                  <fieldset>

                    <div class="control-group">
                      <label class="control-label" for="Email">Email:</label>
                      <div class="controls">
                        <input id="Email" name="username" class="form-control" type="text" placeholder="something@mail.com" class="input-large" required="">
                      </div>
                    </div>
                    
                    <div class="control-group">
                      <label class="control-label" for="password">Password:</label>
                      <div class="controls">
                        <input id="password" name="password" class="form-control" type="password" placeholder="********" class="input-large" required="">
                        <em>1-8 Characters</em>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="fullname">Name:</label>
                      <div class="controls">
                        <input id="fullname" name="fullname" class="form-control" type="text" placeholder="Anupam Ghosh" class="input-large" required="">
                        
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="branch">Branch:</label>
                      <div class="controls">
                        <input id="branch" name="branch" class="form-control" type="text" placeholder="Mahakhali" class="input-large" required="">
                      </div>
                    </div>

                    
                    
                    <div class="control-group">
                      <label class="control-label" for="confirmsignup"></label>
                      <div class="controls">
                        <button id="confirmsignup" name="confirmsignup" class="btn btn-success">Sign Up</button>
                      </div>
                    </div>
                  </fieldset>
                </form>
          </div>
        </div>
          </div>
          <div class="modal-footer">
          <center>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </center>
          </div>
        </div>
      </div>
    </div>