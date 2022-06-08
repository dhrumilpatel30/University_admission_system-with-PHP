<link rel="stylesheet" href="main.css"><?php
session_start();
$uname = base64_decode(urldecode($_GET["uname"]));
$parts = explode("@", $uname);
$uname1=$parts[0];
if(isset($_GET["msg"])){
$msg = $_GET["msg"]; 
}
if (isset($_SESSION[$uname])) {
    echo "Welcome, {$_SESSION[$uname]}. <br/>";
    $param = urlencode(base64_encode($uname));
    if(isset($_GET["msg"])){
      echo "$msg<br>"; 
   }
      echo "You can edit profile here.<br>";
      $uname_computer_engineering=$uname1.'_CE';
      $uname_information_technology=$uname1.'_IT';
      $uname_mechanical_engineering=$uname1.'_MH';
      $uname_chemical_engineering=$uname1.'_CH';
?>
<form action="process.php" method="POST">
Your Interested courses<br>
  <input class ="ch1" type="checkbox" id="computer_engineering" name="computer_engineering" value="computer_engineering" 
  <?php if (isset($_COOKIE["$uname_computer_engineering"])){
     echo "checked";
     } ?>>
  <label for="computer_engineering">I like computer_engineering</label><br>
  <input class ="ch1" type="checkbox" id="information_technology" name="information_technology" value="information_technology" 
  <?php if (isset($_COOKIE[$uname_information_technology])){
     echo "checked";
   } ?>>
  <label for="information_technology">I like information_technology</label><br>
  <input class ="ch1" type="checkbox" id="mechanical_engineering" name="mechanical_engineering" value="mechanical_engineering" 
  <?php 
  if(isset($_COOKIE["$uname_mechanical_engineering"])){
     echo "checked";
   } ?>>
  <label for="mechanical_engineering">I like mechanical_engineering</label><br>
  <input type="hidden" id="uname" name="uname" value="<?php echo $param; ?>"/>
  <input class ="ch1" type="checkbox" id="chemical_engineering" name="chemical_engineering" value="chemical_engineering" 
  <?php 
  if(isset($_COOKIE["$uname_chemical_engineering"])){
     echo "checked";
   } ?>>
  <label for="chemical_engineering">I like chemical_engineering</label><br>
  <input type="submit" value="Save">
</form>
<?php
echo "You can <a href='logout.php?uname=$param'>logout</a> here. <br/>";
}
else{
   header("Location:login.php?msg='Your seesion has been timed out'");
}

?>