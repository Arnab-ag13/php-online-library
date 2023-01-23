<?php

$conn = mysqli_connect("localhost","root","","my_library") or die("connection failed");

$mid= $_GET['id'];

$sql= "delete from member where m_id={$mid}";
$result= mysqli_query($conn,$sql) or die("query failed");

 //header("Location: http://localhost/My Project/member/member-login.php");

 echo '<script>alert("Member record deleted successfull.");
              
 window.location.href= "member-details.php";

 </script>';

?>