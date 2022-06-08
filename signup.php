<link rel="stylesheet" href="main.css">
<?php 
$errors = [];
$inputs = [];
include "validation.php";
?>
<form class="f1" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <header>
        <h1>Details of student for addmision</h1>
    </header>
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Full Name" value="<?php echo $inputs['name'] ?? '' ?>">
        <font1><?php echo $errors['name'] ?? '' ?></font1>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" placeholder="Email Address" value="<?php echo $inputs['email'] ?? '' ?>">
        <font1><?php echo $errors['email'] ?? '' ?></font1>
    </div>
    <div>
        <label for="boardro">board roll number:</label>
        <input type="text" name="boardro" id="boardro" placeholder="Your correct board roll number" value="<?php echo $inputs['boardro'] ?? '' ?>">
        <font1><?php echo $errors['boardro'] ?? '' ?></font1>
    </div>
    <div>
        <label for="gujcetro">gujcet roll number:</label>
        <input type="text" name="gujcetro" id="gujcetro" placeholder="Your correct gujcet roll number" value="<?php echo $inputs['gujcetro'] ?? '' ?>">
        <font1><?php echo $errors['gujcetro'] ?? '' ?></font1>
    </div>
    <div>
        <label for="gujcettotal">gujcet Total marks:</label>
        <input type="text" name="gujcettotal" id="gujcettotal" placeholder="Your gujcet total marks" value="<?php echo $inputs['gujcettotal'] ?? '' ?>">
        <font1><?php echo $errors['gujcettotal'] ?? '' ?></font1>
    </div>
    <div>
        <label for="password">password:</label>
        <input type="password" name="password" id="password" placeholder="Your password">
        <font1><?php echo $errors['password'] ?? '' ?></font1>
    </div>
    <div>
        <label for="password1">Confirm password:</label>
        <input type="password" name="password1" id="password1" placeholder="Your password">
        <font1><?php echo $errors['password1'] ?? '' ?></font1>
    </div>
    <button type="submit">Submit Details</button>
</form>
