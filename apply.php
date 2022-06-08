<h2><br>APPLY NOW</h2>
<link rel="stylesheet" href="main.css">
<?php

$sql = "SELECT `student_id` FROM `student_info` WHERE email='" . $uname . "'";
$result1 = mysqli_query($link, $sql);
$result = mysqli_fetch_array($result1);
$s_id = $result['student_id'];
$sql = "SELECT * FROM `approved_req` WHERE student_id='" . $s_id . "'";
$result1 = mysqli_query($link, $sql);
if (mysqli_num_rows($result1) > 0)
{
    $result = mysqli_fetch_array($result1);
    echo "<larg>CONGRATULATIONS🤩</larg><br> you have approved for addmission<br>your course is:-"." ";
    echo "<larg>".$result['course']."</larg>";
    echo "<br>on date and time:-";
    echo "<larg>".$result['time']."</larg>";
    echo "<br>contact our college administration for further
   inqiuriy<br>your approved application number is:- ";
    echo "<larg>".$result['application_number']."</larg>";
    echo "<br>";
    echo "our office contanct number:-<larg>999999999</larg>" . "<br>";
    echo "if you do not want your addmission";
    ?><a href="cancle.php?uname=<?php echo $param; ?>&appl_num=<?php echo $result['application_number']; ?>">CANCEL NOW<br></a><?php  
}
else
{
   echo "<h3>if you will apply for more than one course its on admin hand which one to choose so apply carefully</h3>";
    echo "<br>Computer Enginnering";
    $sql = "SELECT course FROM rejected_req INNER JOIN student_info USING (student_id) WHERE email='" . $uname . "' AND course='CE'";
    $result1 = mysqli_query($link, $sql);
    if (mysqli_num_rows($result1) > 0)
    {
        echo " <p class='red'> You have been rejected for this course by admin</p><br>";
    }
    else
    {
        $sql = "SELECT course FROM applicatiions INNER JOIN student_info USING (student_id) WHERE email='" . $uname . "' AND course='CE'";
        $result1 = mysqli_query($link, $sql);
        if (mysqli_num_rows($result1) > 0)
        {
            echo "     You have already applied for this course wait for admin responce<br>";
        }
        else
        {
            $seats = "SELECT `filled_seat`FROM `courses` WHERE course='CE'";
            if (150 != $seats)
            {
               ?><a href="request.php?msg=CE&uname=<?php echo $param; ?>"> Apply now!!</a><br> <?php
            }
            else
            {
                echo "No seats available for this course🙁🤕";
            }
        }
    }
    echo "<br>Information Technology";
    $sql = "SELECT course FROM rejected_req INNER JOIN student_info USING (student_id) WHERE email='" . $uname . "' AND course='IT'";
    $result1 = mysqli_query($link, $sql);
    if (mysqli_num_rows($result1) > 0)
    {
      echo " <p class='red'> You have been rejected for this course by admin</p><br>";
    }
    else
    {
        $sql = "SELECT course FROM applicatiions INNER JOIN student_info USING (student_id) WHERE email='" . $uname . "' AND course='IT'";
        $result1 = mysqli_query($link, $sql);
        if (mysqli_num_rows($result1) > 0)
        {
            echo "    You have already applied for this course wait for admin responce<br>";
        }
        else
        {
            $seats = "SELECT `filled_seat`FROM `courses` WHERE course='IT'";
            if (150 != $seats)
            {
               ?><a href="request.php?msg=IT&uname=<?php echo $param; ?>"> Apply now!!</a> <br><?php
            }
            else
            {
                echo "No seats available for this course🙁🤕";
            }
        }
    }

    echo "<br>Mechanical Engineering";
    $sql = "SELECT course FROM rejected_req INNER JOIN student_info USING (student_id) WHERE email='" . $uname . "' AND course='MH'";
    $result1 = mysqli_query($link, $sql);
    if (mysqli_num_rows($result1) > 0)
    {
      echo " <p class='red'> You have been rejected for this course by admin</p><br>";
    }
    else
    {
        $sql = "SELECT course FROM applicatiions INNER JOIN student_info USING (student_id) WHERE email='" . $uname . "' AND course='MH'";
        $result1 = mysqli_query($link, $sql);
        if (mysqli_num_rows($result1) > 0)
        {
            echo "      You have already applied for this course wait for admin responce<br>";
        }
        else
        {
            $seats = "SELECT `filled_seat`FROM `courses` WHERE course='MH'";
            if (150 != $seats)
            {
               ?><a href="request.php?msg=MH&uname=<?php echo $param; ?>"> Apply now!!</a> <br><?php
            }
            else
            {
                echo "No seats available for this course🙁🤕";
            }
        }
    }
    echo "<br>Chemical Enginnering";
    $sql = "SELECT course FROM rejected_req INNER JOIN student_info USING (student_id) WHERE email='" . $uname . "' AND course='CH'";
    $result1 = mysqli_query($link, $sql);
    if (mysqli_num_rows($result1) > 0)
    {
      echo " <p class='red'> You have been rejected for this course by admin</p><br>";
    }
    else
    {
        $sql = "SELECT course FROM applicatiions INNER JOIN student_info USING (student_id) WHERE email='" . $uname . "' AND course='CH'";
        $result1 = mysqli_query($link, $sql);
        if (mysqli_num_rows($result1) > 0)
        {
            echo "    You have already applied for this course wait for admin responce<br>";
        }
        else
        {
            $seats = "SELECT `filled_seat`FROM `courses` WHERE course='CH'";
            if (150 != $seats)
            {
               ?><a href="request.php?msg=CH&uname=<?php echo $param; ?>"> Apply now!!</a> <br><?php
            }
            else
            {
                echo "No seats available for this course🙁🤕";
            }
        }
    }
}
?>
<br>
