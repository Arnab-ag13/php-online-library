<?php

$conn = mysqli_connect("localhost","root","","my_library") or die("connection failed");
               
              $aid= $_POST['mid'];
              $name= $_POST['mname'];
              $email= $_POST['email'];
              $address= $_POST['address'];
              $mno= $_POST['mobile'];

              $sql= "update member set m_name='{$name}', m_mail='{$email}', m_address='{$address}',m_mno={$mno} where m_id={$aid}";
              $result= mysqli_query($conn,$sql) or die("query failed");

                //header("Location: http://localhost/My Project/member/member-login.php");

                echo '<script>alert("Member record updated successfully.");
              
                window.location.href= "member-details.php";

                </script>';

?>