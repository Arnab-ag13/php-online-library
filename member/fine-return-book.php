<?php

$conn = mysqli_connect("localhost","root","","my_library") or die("connection failed");

$iid= $_GET["id"];

$sql="select * from issued_book where i_id={$iid}";
$result = mysqli_query($conn, $sql) or die("query unsucessful");
$row= mysqli_fetch_assoc($result);

$bid= $row['b_id'];
$sql1="select * from book where b_id={$bid}";
$result1 = mysqli_query($conn, $sql1) or die("query unsucessful");
$row1= mysqli_fetch_assoc($result1);

$sql2= "update issued_book set r_status=1 where i_id={$iid}";
$result2 = mysqli_query($conn, $sql2) or die("query unsucessful");


$avl= $row1['avl_qty'] + 1;
$sql3= "update book set avl_qty={$avl} where b_id={$bid}";
$result3 = mysqli_query($conn, $sql3) or die("query unsucessful");

$date = date("Y-m-d");// current date
$sql4= "insert into fine_details(i_id,o_r_date,pay_status) values({$iid},'{$date}',1)";
$result4 = mysqli_query($conn, $sql4) or die("query unsucessful");


//header("Location: http://localhost/My Project/member/member-return-book.php");

echo '<script>alert("Fine paied successfully and also Book returned successfully.");
              
window.location.href= "member-return-book.php";

</script>';

?>