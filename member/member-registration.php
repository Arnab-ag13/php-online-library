<?php   
                 $name=$email=$address=$mno="";


             if(isset($_POST['register'])){
               
              $conn = mysqli_connect("localhost","root","","my_library") or die("connection failed");
               
              $name= $_POST['mname'];
              $email= $_POST['email'];
              $address= $_POST['address'];
              $mno= $_POST['mobile'];
              $password= $_POST['password'];
              $cpassword= $_POST['cpassword'];

              
              $sql1= "select * from member where m_mail='{$email}'";
              $result1= mysqli_query($conn,$sql1) or die("query failed");


              // $eightchar= new RegExp('(?=.{8,})');
              // $lower= new RegExp('(?=.*[a-z])');
              // $upper= new RegExp('(?=.*[A-Z])');
              // $number= new RegExp('(?=.*[0-9])');
              // $specialchar= new RegExp('(?=.*[!@#\$%\^&\*])');

              if($name==""){
                echo '<script>alert("***name field cannot be blank")</script>';
              }
              else if(!preg_match("/^[A-Za-z\s]+$/",$name)){
                echo '<script>alert("**Name should be string of letters.. Numbers & other charechters not allowed")</script>';
              }
              else if($email==""){
                echo '<script>alert("***email field cannot be blank")</script>';
              }
              else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo '<script>alert("**Invalid Email... Please Enter a Valid Email")</script>';
              }
              else if(mysqli_num_rows($result1) > 0){
                echo '<script>alert("***this email id already exist in our site...Please try with an other email id.")</script>';
              }
              else if($address==""){
                echo '<script>alert("***address field cannot be blank")</script>';
              }
              else if(!preg_match("/^[0-9a-zA-Z\/]+[\s\,]+[a-zA-Z]+[0-9a-zA-Z\s\/\,\.\-]+$/",$address)){
                echo '<script>alert("**Address should be alphanumeric values and , - / . charecters")</script>';
              }
              else if($mno==""){
                echo '<script>alert("***mobile no. field cannot be blank")</script>';
              }
              else if(!preg_match("/^[5-9][0-9]{9}$/",$mno)){
                echo '<script>alert("**It must be a 10 digits valid Mobile Number ")</script>';
              }
              else if($password==""){
                echo '<script>alert("***password field cannot be blank")</script>';
              }
              else if(!preg_match("/(?=.{8,})/",$password)){
                echo '<script>alert("**Password must have at least 8 charechters or more ")</script>';
              }
              else if(!preg_match("/(?=.*[a-z])/",$password)){
                echo '<script>alert("**Password must have at least 1 Lower Case charechter ")</script>';
              }
              else if(!preg_match("/(?=.*[A-Z])/",$password)){
                echo '<script>alert("**Password must have at least 1 Upper Case charechter ")</script>';
              }
              else if(!preg_match("/(?=.*[0-9])/",$password)){
                echo '<script>alert("**Password must have at least 1 Numeric value")</script>';
              }
              else if(!preg_match("/(?=.*[!@#\$%\^&\*])/",$password)){
                echo '<script>alert("**Password must have at least 1 Special charechter ")</script>';
              }
              else if($cpassword==""){
                echo '<script>alert("***confirm password field cannot be blank")</script>';
              }
              else if($cpassword != $password){
                echo '<script>alert("**Password and Confirm Password did not match ")</script>';
              }
              else
              {
              $sql= "insert into member(m_name,m_mail,m_address,m_psw,m_mno) values('{$name}','{$email}','{$address}','{$password}',{$mno})";
              $result= mysqli_query($conn,$sql) or die("query failed");

                //header("Location: http://localhost/My Project/member/member-login.php");

                echo '<script>alert("Registration successfull.");
              
                window.location.href= "member-login.php";

                </script>';
               }
              }

            ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Member-Registration</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Member Registration</h1>
      </div>
      <div class="login-box" style="width: 500px">
            <form class="form-horizontal" style="padding: 10px 10px 10px 10px" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Register</h3>
                <div class="form-group row">
                  <label class="control-label col-md-3">Name</label>
                  <div class="col-md-8">
                    <input class="form-control" name="mname" id="mname" type="text" placeholder="Enter full name" value="<?php echo $name; ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Email</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" name="email" id="email" type="email" placeholder="Enter email address" value="<?php echo $email; ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Address</label>
                  <div class="col-md-8">
                    <textarea class="form-control" name="address" id="address" rows="4" placeholder="Enter your address"><?php echo $address; ?></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Mobile No.</label>
                  <div class="col-md-9">
                    <input class="form-control col-md-8" name="mobile" id="mobile" type="text" placeholder="Enter mobile no." value="<?php echo $mno; ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Password</label>
                  <div class="col-md-9">
                    <input class="form-control col-md-8" name="password" id="password" type="password" placeholder="Enter Password">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Confirm Password</label>
                  <div class="col-md-9">
                    <input class="form-control col-md-8" name="cpassword" id="cpassword" type="password" placeholder="Re Enter Password">
                  </div>
                </div>
                
                <div class="form-group row">
                  <div class="col-md-8 col-md-offset-3">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox">I accept the terms and conditions
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-8 col-md-offset-3">
                    <button class="btn btn-primary btn-block" name="register" id="register"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>
                  </div>
                  <p class="semibold-text mb-2" style="display: flex; justify-item: right; font-size: 16px;">BACK TO &nbsp;&nbsp;<a href="member-login.php">Log In</a></p>
                </div>
            </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
  </body>
</html>