<?php
include "config.php";


$showTable="SELECT * FROM STUDENTS";
$result=mysqli_query($link,$showTable) or die("query error");

echo "<table border cellpadding=3>";
echo"<tr>";
// These are the column labels that will be displayed
echo"<th>Student ID</th>";
echo"<th>Email ID</th>";
echo"<th>Student name</th>";
echo"<th>Gender</th>";
echo"<th>Major</th>";
echo "</tr>";

while($info = mysqli_fetch_array($result))
	{
		echo"<tr><td>".$info['student_id'] . "</td>";
		echo"<td>".$info['email_id'] . "</td>";
		echo"<td>".$info['student_name'] . "</td>";
		echo"<td>".$info['gender'] . "</td>";
		echo"<td>".$info['major_id'] . "</td></tr>";
	}
echo "</table>"
?>
