<?php

if($_SERVER['REQUEST_METHOD'] != "POST")
 exit();

include "config.php";

$sql="INSERT INTO STUDENTS (student_id,email_id,student_name,gender,major_id) VALUES 
(".$_POST['student_id'].",'".$_POST['email_id']."','".$_POST['student_name']."','".$_POST['gender']."','".$_POST['major_id']."')";

$result=mysqli_query($link,$sql) or die(mysqli_error($link));
echo "<p><b>1 Student record added to database</b><p>";
?>
