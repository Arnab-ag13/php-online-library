<?php


$conn = mysqli_connect("localhost","root","","my_library") or die("connection failed");

session_start();



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
        <!-- Twitter meta-->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:site" content="@pratikborsadiya">
        <meta property="twitter:creator" content="@pratikborsadiya">
        <!-- Open Graph Meta-->
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Vali Admin">
        <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
        <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
        <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
        <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
        <title>Admin Home - Dashboard</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Main CSS-->
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!-- Font-icon css-->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head> 
    <body class="app sidebar-mini">
        <!-- Navbar-->
        <header class="app-header"><a class="app-header__logo" href="index.html"><img style="display: flex;height: 50px; width: 50px; float: left;" src="images/lib logo 1.jfif">BRSNC LMS</a>
            <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
            <!-- Navbar Right Menu-->
            <ul class="app-nav">
              <li class="app-search">
                <input class="app-search__input" type="search" placeholder="Search">
                <button class="app-search__button"><i class="fa fa-search"></i></button>
              </li>
              <!--Notification Menu-->
              <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
                <ul class="app-notification dropdown-menu dropdown-menu-right">
                  <li class="app-notification__title">You have 4 new notifications.</li>
                  <div class="app-notification__content">
                    <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                        <div>
                          <p class="app-notification__message">Lisa sent you a mail</p>
                          <p class="app-notification__meta">2 min ago</p>
                        </div></a></li>
                    <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                        <div>
                          <p class="app-notification__message">Mail server not working</p>
                          <p class="app-notification__meta">5 min ago</p>
                        </div></a></li>
                    <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                        <div>
                          <p class="app-notification__message">Transaction complete</p>
                          <p class="app-notification__meta">2 days ago</p>
                        </div></a></li>
                    <div class="app-notification__content">
                      <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                          <div>
                            <p class="app-notification__message">Lisa sent you a mail</p>
                            <p class="app-notification__meta">2 min ago</p>
                          </div></a></li>
                      <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                          <div>
                            <p class="app-notification__message">Mail server not working</p>
                            <p class="app-notification__meta">5 min ago</p>
                          </div></a></li>
                      <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                          <div>
                            <p class="app-notification__message">Transaction complete</p>
                            <p class="app-notification__meta">2 days ago</p>
                          </div></a></li>
                    </div>
                  </div>
                  <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
                </ul>
              </li>
              <!-- User Menu-->
              <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                  <li><a class="dropdown-item" href="page-user.php"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                  <li><a class="dropdown-item" href="admin-logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
              </li>
            </ul>
        </header>
        <!-- Sidebar menu-->
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
        <aside class="app-sidebar">
            <div class="app-sidebar__user"><i class="app-sidebar__user-avatar fa fa-user-circle-o fa-3x"></i>
                <div>
                  <p class="app-sidebar__user-name"> <?php echo $_SESSION["a_name"]; ?> </p>
                  <p class="app-sidebar__user-designation">Admin</p>
                </div>
            </div>
            <ul class="app-menu">
                <li><a class="app-menu__item" href="admin-home.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
                <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">User Details</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                      <li><a class="treeview-item" href="admin-details.php"><i class="icon fa fa-circle-o"></i> Admin</a></li>
                      <li><a class="treeview-item" href="member-details.php"><i class="icon fa fa-circle-o"></i> Member</a></li>
                    </ul>
                </li>
                <li><a class="app-menu__item" href="book-details.php"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Books</span></a></li>
                <li><a class="app-menu__item" href="issued-book-details.php"><i class="app-menu__icon fa fa-exchange"></i><span class="app-menu__label">Issued Books</span></a></li>
                <li><a class="app-menu__item" href="fine-details.php"><i class="app-menu__icon fa fa-money"></i><span class="app-menu__label">Fine Details</span></a></li>
            </ul>    
        </aside>
        <main class="app-content">
        <div class="row user">
              <div class="col-md-12">
                <div class="profile">
                  <div class="info"><i class="user-img fa fa-user-circle-o fa-5x"></i>
                    <h4><?php echo $_SESSION["a_name"]; ?></h4>
                    <h6>Admin</h6>
                  </div>
                  <div class="cover-image"></div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="tile p-0">
                  <ul class="nav flex-column nav-tabs user-tabs">
                    <li class="nav-item"><a class="nav-link active" href="#user-timeline" data-toggle="tab">My Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="#user-settings" data-toggle="tab">Edit Profile</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-9">
                <div class="tab-content">
                  <div class="tab-pane active" id="user-timeline">
                  <div class="tile user-settings">
                      <h4 class="line-head">My Profile</h4>
                      <?php
                      $conn = mysqli_connect("localhost","root","","my_library") or die("connection failed");
                       
                      $aid= $_SESSION['a_id'];
                      $sql = "select * from admin where a_id= {$aid}";

                      $result = mysqli_query($conn, $sql) or die("query unsucessful");

                      if(mysqli_num_rows($result) > 0 ){

                        while($row = mysqli_fetch_assoc($result)){

                    ?>
                      <form>
                        <div class="row mb-4">
                          <div class="col-md-4">
                            <label>Name:</label>
                          </div>
                          <div class="col-md-4">
                            <label><?php echo $row['a_name'];  ?></label>
                          </div>
                        </div>
                        <div class="row mb-4">
                          <div class="col-md-4">
                            <label>Email:</label>
                          </div>
                          <div class="col-md-4">
                            <label><?php echo $row['a_mail'];  ?></label>
                          </div>
                        </div>
                        <div class="row mb-4">
                          <div class="col-md-4">
                            <label>Address:</label>
                          </div>
                          <div class="col-md-4">
                            <label><?php echo $row['a_address'];  ?></label>
                          </div>
                        </div>
                        <div class="row mb-4">
                          <div class="col-md-4">
                            <label>Mobile no:</label>
                          </div>
                          <div class="col-md-4">
                            <label><?php echo $row['a_mno'];  ?></label>
                          </div>
                        </div>
                      </form>
                      <?php 
                        }
                      }
                      ?>
                    </div> 
                  </div>
                  <div class="tab-pane fade" id="user-settings">
                    <div class="tile user-settings">
                      <h4 class="line-head">Edit Profile</h4>
                      <?php
                        
                        $conn = mysqli_connect("localhost","root","","my_library") or die("connection failed");
                       
                        $aid1= $_SESSION['a_id'];
                        $sql1 = "select * from admin where a_id= {$aid1}";

                        $result1 = mysqli_query($conn, $sql1) or die("query unsucessful");
                        $row1= mysqli_fetch_assoc($result1);

                      ?>
                      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="row">
                          <div class="col-md-8 mb-4">
                            <label>Name</label>
                            <input class="form-control" type="hidden" name="mid" value="<?php echo $row1['a_id'];  ?>">
                            <input class="form-control" type="text" name="mname" value="<?php echo $row1['a_name'];  ?>">
                          </div>
                          <div class="clearfix"></div>
                          <div class="col-md-8 mb-4">
                            <label>Email</label>
                            <input class="form-control" type="text" name="email" value="<?php echo $row1['a_mail'];  ?>">
                          </div>
                          <div class="clearfix"></div>
                          <div class="col-md-8 mb-4">
                            <label>Address</label>
                            <textarea class="form-control" name="address" rows="4" ><?php echo $row1['a_address'];  ?></textarea>
                          </div>
                          <div class="clearfix"></div>
                          <div class="col-md-8 mb-4">
                            <label>Mobile No</label>
                            <input class="form-control" name="mno" type="text" value="<?php echo $row1['a_mno'];  ?>">
                          </div>
                        </div>
                        <div class="row mb-10">
                          <div class="col-md-12">
                            <button class="btn btn-primary" name="register" ><i class="fa fa-fw fa-lg fa-check-circle"></i> Save Changes</button>
                          </div>
                        </div>
                      </form>
                      <?php

                          if(isset($_POST['register'])){

                            $conn = mysqli_connect("localhost","root","","my_library") or die("connection failed");

                            $name= $_POST['mname'];
                            $email= $_POST['email'];
                            $address= $_POST['address'];
                            $mno= $_POST['mno'];
                            $aid2=$_POST['mid'];

                            if($name==""){
                              echo '<script>alert("***name field cannot be blank")</script>';
                            }
                            else if(!preg_match("/^[A-Za-z\s]+$/",$name)){
                              echo '<script>alert("**Name should be string of letters.. Numbers & other charechters not allowed");
                                    window.location.href= "member-profile.php#user-settings";
                                    </script>';
                            }
                            else if($email==""){
                              echo '<script>alert("***email field cannot be blank")</script>';
                            }
                            else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                              echo '<script>alert("**Invalid Email... Please Enter a Valid Email")</script>';
                            }
                            else if($address==""){
                              echo '<script>alert("***address field cannot be blank")</script>';
                            }
                            else if(!preg_match("/^[0-9a-zA-Z\s\-\/\,\.]+$/",$address)){
                              echo '<script>alert("**Address should be alphanumeric values and ',' '-' '/' charecters")</script>';
                            }
                            else if($mno==""){
                              echo '<script>alert("***mobile no. field cannot be blank")</script>';
                            }
                            else if(!preg_match("/^[0-9]{10}$/",$mno)){
                              echo '<script>alert("**It must be a 10 digits valid Mobile Number ")</script>';
                            }
                            else
                            {
                              $sql= "update admin set a_name='{$name}', a_mail='{$email}', a_address='{$address}', a_mno={$mno} where a_id={$aid2}";
                              $result= mysqli_query($conn,$sql) or die("query failed");

                              //header("Location: http://localhost/My Project/member/member-login.php");

                              echo '<script>alert("Your profile record updated successfull.");
              
                              window.location.href= "member-profile.php";

                              </script>';
                            }
                          }

                      ?>
                    </div>
                  </div>
                </div>
              </div>
              </div>
        </main>
        <!-- Essential javascripts for application to work-->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>