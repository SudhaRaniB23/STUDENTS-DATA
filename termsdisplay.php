<?php
include "config.php";


$showTable="SELECT * FROM TERMS";
$result=mysqli_query($link,$showTable) or die("query error");

echo "<table border cellpadding=3>";
echo"<tr>";
// These are the column labels that will be displayed
echo"<th>year</th>";
echo"<th>term</th>";
echo "</tr>";

while($info = mysqli_fetch_array($result))
	{
		echo"<tr><td>".$info['year'] . "</td>";
		echo"<td>".$info['term'] . "</td>";
	}
echo "</table>"
?>
