<?php
$con=mysqli_connect("localhost","root","","drug_store");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
  $result = mysqli_query($con,"SELECT * FROM users");
echo "<table border='1'>
<tr>
<th>userName</th>
<th>password</th>

</tr>";

 while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['userName'] . "</td>";
echo "<td>" . $row['password'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</body>
</html>