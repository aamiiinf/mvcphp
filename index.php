<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mvc app php</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/view/css/style.css">
</head>
<body>
<?php
$nameErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstname"])&&empty($_POST["lastname"])&&empty($_POST["codemali"])&&empty($_POST["phone"])&&empty($_POST["addres"])) {
    $nameErr = "لطفا همه موارد را کامل کنید";
  } else {
  }
}
?>
<form action="./model/User.php" style="border:1px solid #ccc" method="POST">
  <div class="container">
    <h1>اطلاعات خود را وارد کنید</h1>

    <hr>
    <label for="email"><b>نام</b></label>
    <label for="email" style="color:red"><b><span id="error1"></span></b></label>
    <input type="text" placeholder="نام خود را وارد کنید" name="firstname" id="firstname">

    <label for="psw"><b>نام خانوادگی</b></label>
    <label for="psw" style="color:red"><b><span id="error2"></span></b></label>
    <input type="text" placeholder="نام خانوادگی خود را وارد کنید" name="lastname" id="lastname">

    <label for="psw-repeat"><b>کد ملی</b></label>
    <label for="psw" style="color:red"><b><span id="error3"></span></b></label>
    <input type="text" placeholder="کد ملی خود را وارد کنید" name="codemali" id="codemali">
    
    <label for="psw-repeat">
    <b>شماره تلفن</b>
    (<span style="font-size: 12px;">مثال 09123456789</span>)
    </label>
    <label for="psw" style="color:red"><b><span id="error4"></span></b></label>
    <input type="text" placeholder="شماره تلفن خود را وارد کنید" name="phone" id="phone" pattern="09(0[1-2]|1[0-9]|3[0-9]|2[0-1])-?[0-9]{3}-?[0-9]{4}">
    
    <label for="psw-repeat"><b>آدرس</b></label>
    <label for="psw" style="color:red"><b><span id="error5"></span></b></label>
    <input type="text" placeholder="آدرس خود را وارد کنید" name="addres" id="addres">
    <div class="clearfix">
      <button type="submit" class="signupbtn">ارسال</button>
    </div>
  </div>
</form>
<script src="./view/js/script.js"></script>
</body>
</html>