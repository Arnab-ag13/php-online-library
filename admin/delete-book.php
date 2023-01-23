<?php

$conn = mysqli_connect("localhost","root","","my_library") or die("connection failed");

$aid= $_GET['id'];

$sql= "delete from book where b_id={$aid}";
$result= mysqli_query($conn,$sql) or die("query failed");

 //header("Location: http://localhost/My Project/member/member-login.php");

 echo '<script>alert("Book record deleted successfull.");
              
 window.location.href= "book-details.php";

 </script>';

?>