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
        <title>Member-Home-Book</title>
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
                  <li><a class="dropdown-item" href="member-profile.php"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                  <li><a class="dropdown-item" href="member-logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
              </li>
            </ul>
        </header>
        <!-- Sidebar menu-->
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
        <aside class="app-sidebar">
            <div class="app-sidebar__user"><i class="app-sidebar__user-avatar fa fa-user-circle-o fa-3x"></i>
                <div>
                  <p class="app-sidebar__user-name">Welcome</p>
                  <p class="app-sidebar__user-designation"> <?php echo $_SESSION["m_name"]; ?> </p>
                </div>
            </div>
            <ul class="app-menu">
                <li><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Books</span></a></li>
                <li><a class="app-menu__item" href="member-profile.php"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">My Profile</span></a></li>
                <li><a class="app-menu__item" href="member-issued-book.php"><i class="app-menu__icon fa fa-exchange"></i><span class="app-menu__label">Issued Books History</span></a></li>
                <li><a class="app-menu__item" href="member-return-book.php"><i class="app-menu__icon fa fa-reply"></i><span class="app-menu__label">Return Book</span></a></li>
                <li><a class="app-menu__item" href="member-fine-details.php"><i class="app-menu__icon fa fa-money"></i><span class="app-menu__label">Fine History</span></a></li>
            </ul>    
        </aside>
        <main class="app-content">
            <div class="app-title">
                <div>
                  <h1><i class="fa fa-book"></i> Books</h1>
                </div>
                <ul class="app-breadcrumb breadcrumb">
                  <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                  <li class="breadcrumb-item"><a href="#">Books</a></li>
                </ul>
            </div>
            <div class="row">
            <div class="col-md-12">
              <div class="tile">
                <div class="tile-body">
                  <div class="table-responsive">
                  <?php
                      $conn = mysqli_connect("localhost","root","","my_library") or die("connection failed");

                      $sql = "select * from book";

                      $result = mysqli_query($conn, $sql) or die("query unsucessful");

                      if(mysqli_num_rows($result) > 0 ){

                    ?>
                    <table class="table table-hover table-bordered" id="sampleTable">
                      <thead>
                        <tr>
                          <th>Book Name</th>
                          <th>Author</th>
                          <th>Availability Status</th>
                          <th>Take Book</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                           while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                          <td><?php echo $row['b_name']; ?></td>
                          <td><?php echo $row['b_author']; ?></td>
                          <?php
                            if($row['avl_qty'] > 0){
                          ?>
                          <td><a style="color: #fff; background-color: rgb(10, 240, 48); text-decoration: none; padding: 3px 7px;" href="#">Available</a></td>
                          <td><a style="color: #fff; background-color: rgb(10, 240, 48); text-decoration: none; padding: 3px 7px;" href="take-book.php?id=<?php echo $row['b_id']; ?> ">TAKE BOOK</a></td>
                          <?php } else{ ?>
                          <td><a style="color: #fff; background-color: #e74c3c; text-decoration: none; padding: 3px 7px;" href="#">Not Available</a></td>
                          <td><a style="color: #fff; background-color: #e74c3c; text-decoration: none; padding: 3px 7px;" href="#">UNAVAILABLE</a></td>
                          <?php } ?>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                    <?php } ?>
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
        <!-- The javascript plugin to display page loading on top-->
        <script src="js/plugins/pace.min.js"></script>
        <!-- Page specific javascripts-->
        <!-- Data table plugin-->
        <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript">$('#sampleTable').DataTable();</script>
    </body>
</html>