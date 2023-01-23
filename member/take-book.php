<?php

$conn = mysqli_connect("localhost","root","","my_library") or die("connection failed");

$date = date("Y-m-d");// current date

echo $date;

$date1 = date('Y-m-d',strtotime($date ." +15 day"));

$bid= $_GET["id"];
$sql1="select b_name, avl_qty from book where b_id={$bid}";
$result = mysqli_query($conn, $sql1) or die("query unsucessful");
$row= mysqli_fetch_assoc($result);
session_start();

$mid= $_SESSION["m_id"];
$mname= $_SESSION["m_name"];

$sql2= "insert into issued_book(m_id,m_name,b_id,b_name,i_date,r_date,r_status) values ({$mid},'{$mname}',{$bid},'{$row['b_name']}','{$date}','{$date1}',0)";

$result2= mysqli_query($conn, $sql2);

$avl= $row['avl_qty'] - 1;

$sql3= "update book set avl_qty={$avl} where b_id={$bid}";

$result3= mysqli_query($conn, $sql3);

echo '<script>alert("Your required book issued successfully.");
              
window.location.href= "member-issued-book.php";

</script>';

//header("Location: http://localhost/My Project/member/member-home-book.php");





?>