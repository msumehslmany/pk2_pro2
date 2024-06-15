<?php require_once "../config.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<div class="main">
    <div class="signup">
        <form action="signup.php" method="post">
            <input type="email" placeholder="ایمیل..." name="email"><br>
            <input type="password" placeholder="پسورد..." name="password">
            <input type="submit" value="ثبت نام" name="signup">
        </form>
    </div>
</div>
</body>
</html>
<?php
if (isset($_POST['signup']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $signup=$_POST['signup'];
    mysqli_query($db,"INSERT INTO users(email,password)VALUES('$email','$password')");
}
?>

