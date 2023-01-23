<?php

$conn = mysqli_connect("localhost","root","","my_library") or die("connection failed");
               
              $bid= $_POST['bid'];
              $name= $_POST['bname'];
              $auth= $_POST['auth'];
              $tqty= $_POST['tqty'];
              $aqty= $_POST['aqty'];

              $sql= "update book set b_name='{$name}', b_author='{$auth}', t_qty={$tqty}, avl_qty={$aqty} where b_id={$bid}";
              $result= mysqli_query($conn,$sql) or die("query failed");

                //header("Location: http://localhost/My Project/member/member-login.php");

                echo '<script>alert("Book record updated successfull.");
              
                window.location.href= "book-details.php";

                </script>';

?>