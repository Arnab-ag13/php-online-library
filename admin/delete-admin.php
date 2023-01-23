<?php

$conn = mysqli_connect("localhost","root","","my_library") or die("connection failed");

$aid= $_GET['id'];

$sql= "delete from admin where a_id={$aid}";
$result= mysqli_query($conn,$sql) or die("query failed");

 //header("Location: http://localhost/My Project/member/member-login.php");

 echo '<script>alert("Admin record deleted successfull.");
              
 window.location.href= "admin-details.php";

 </script>';

?>