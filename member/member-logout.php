<?php

$conn = mysqli_connect("localhost","root","","my_library") or die("connection failed");

session_start();

session_unset();

session_destroy();

header("Location: http://localhost/My Project/member/member-login.php");


?>