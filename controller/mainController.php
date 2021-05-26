<?php
$q = intval($_GET['q']);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mvcphp";

    // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
if ($conn->connect_error) {
    // die("Connection failed: " . $conn->connect_error);
}

mysqli_select_db($conn,"ajax_demo");
$sql="SELECT * FROM users WHERE id = '".$q."'";
$result = mysqli_query($conn,$sql);

echo "<table>
<tr>
<th>نام</th>
<th>تلفن</th>
<th>آدرس</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "<td>" . $row['addres'] . "</td>";
  echo "</tr>";
}
echo "</table>";
$conn->close();
?>