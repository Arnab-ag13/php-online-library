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
        <title>Admin Update Member</title>
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
                  <li><a class="dropdown-item" href="admin-profile.php"><i class="fa fa-user fa-lg"></i> Profile</a></li>
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
            <div class="app-title">
                <div>
                  <h1><i class="fa fa-user"></i> Update Member</h1>
                </div>
                <ul class="app-breadcrumb breadcrumb">
                  <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                  <li class="breadcrumb-item"><a href="#">Update Member</a></li>
                </ul>
            </div>
            <div class="row">
            <div class="col-md-12">
              <div class="tile">
                <div class="tile-body">
                  <div class="table-responsive">
                  <?php
                      $conn = mysqli_connect("localhost","root","","my_library") or die("connection failed");
                       
                      $mid= $_GET['id'];
                      $sql = "select * from member where m_id= {$mid}";

                      $result = mysqli_query($conn, $sql) or die("query unsucessful");

                      if(mysqli_num_rows($result) > 0 ){

                        while($row = mysqli_fetch_assoc($result)){

                    ?>
                  <form class="form-horizontal" style="padding: 10px 150px 20px 150px;" action="update-member1.php" method="POST">
                <center><h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Update Member</h3></center><br><br>
                <div class="form-group row">
                  <label class="control-label col-md-3">Name</label>
                  <div class="col-md-8">
                    <input class="form-control" name="mid" type="hidden" value="<?php echo $row['m_id'];  ?>">
                    <input class="form-control" name="mname" type="text" placeholder="Enter full name" value="<?php echo $row['m_name'];  ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Email</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" name="email" type="email" placeholder="Enter email address" value="<?php echo $row['m_mail'];  ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Address</label>
                  <div class="col-md-8">
                    <textarea class="form-control" name="address" rows="4" placeholder="Enter your address"><?php echo $row['m_address'];  ?></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Mobile No.</label>
                  <div class="col-md-9">
                    <input class="form-control col-md-8" name="mobile" type="text" placeholder="Enter mobile no." value="<?php echo $row['m_mno'];  ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-8 col-md-offset-3">
                   <center> <button class="btn btn-primary " name="register" ><i class="fa fa-fw fa-lg fa-check-circle"></i>UPDATE</button></center>
                  </div>
                </div>
                </form>
                <?php 
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