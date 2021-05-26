<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mvc app php</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/view/css/style.css">
  <link rel="stylesheet" href="/view/css/style2.css">
</head>
<body>
<h1 style="padding-bottom:20px;">لیست افراد ثبت شده در سامانه</h1>
<table>
    <tr>
        <th>شماره ردیف</th>
        <th>نام خانوادگی</th>
        <th>کد ملی</th>
    </tr>
    <?php
        // Create connection
        $conn = new mysqli("localhost", "root", "", "mvcphp");
        // Check connection
        if ($conn->connect_error) {
        }

        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            $x = 1;
            while($row = $result->fetch_assoc()) {
                $a = $row["id"];
                echo "<tr onmouseover='onhover($a)'>";
                echo "<td>".$x++."</td>";
                echo "<td>".$row["lastname"]."</td>";
                echo "<td>".$row["codemali"]."</td>";
                echo "</tr>";
            }
        } else {
            // echo "0 results";
        }

        $conn->close();
    ?>
</table>
<h1 style="margin-top: 50px;">اطلاعات کاربر</h1>
<div id="demo"></div>

<script type="text/javascript">
function onhover(str) {
    var xhttp;
  if (str.length == 0) { 
    document.getElementById("demo").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "../../controller/mainController.php?q="+str, true);
  xhttp.send();  
}
</script>
</body>
</html>