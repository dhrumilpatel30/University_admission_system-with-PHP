<center class ="c1">
   <h1>University Addmission System</h1>
   <img src="https://storage.googleapis.com/ezap-prod/colleges/2918/dharmish-college-logo.jpe" height="100px">
   <br><h2>Dharmsinh Desai University</h2>
   <link rel="stylesheet" href="main.css">
<form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
<label for="email">Enter your email:</label>
<input type="text" id="email" name="email"/><br>
<label for="pwd">Password:</label>
<input type="password" id="pwd" name="pwd"/><br>
<input type="submit" value="Login"/><br>
<input type="reset" value="Clear"/><br>
<input type="submit" value="signup" id="signup" name="signup"/><br> 
<a href="admin.php">Login as admin</a>
<a href="members.php">production team</a>
</form>
</center>

<br>
<br>


<?php
require('config.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
   if (!empty($_POST["email"]) and !empty($_POST["pwd"]) and isset($_POST["email"]) and isset($_POST["pwd"])) {
        $email = $_POST["email"];
        $password = filter_input(INPUT_POST, 'pwd', FILTER_SANITIZE_STRING);
        $sql = mysqli_query($link,"SELECT * FROM `student_info` WHERE email='".$email."' AND password='".$password."' ");
    $num = mysqli_num_rows($sql);  
    if($num > 0) {
      session_start();
      $_SESSION[$email] = $email;
      $param = urlencode(base64_encode($email));
      header("Location:home.php?uname=$param");
    } 
    else {
       echo "<h1>Incorrect username and/or password. Please retry.</h1>";
      }
   }else {
      echo "<h1>Please enter username and password.</h1>";
   }
   if (isset($_POST['signup'])){
      header("Location:index.php?message=signup");
   }
}
?>

<?php
if (isset($_GET['msg'])) {
    echo "<h1>{$_GET['msg']}</h1>";
}
?>