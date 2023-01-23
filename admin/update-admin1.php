<?php

$conn = mysqli_connect("localhost","root","","my_library") or die("connection failed");
               
              $aid= $_POST['aid'];
              $name= $_POST['mname'];
              $email= $_POST['email'];
              $address= $_POST['address'];
              $mno= $_POST['mobile'];

              $sql= "update admin set a_name='{$name}', a_mail='{$email}', a_address='{$address}',a_mno={$mno} where a_id={$aid}";
              $result= mysqli_query($conn,$sql) or die("query failed");

                //header("Location: http://localhost/My Project/member/member-login.php");

                echo '<script>alert("Admin record updated successfull.");
              
                window.location.href= "admin-details.php";

                </script>';

?>