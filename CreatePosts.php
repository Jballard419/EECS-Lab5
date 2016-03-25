<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "jballard", "fireball", "jballard");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$user = $_POST["user"];
$comment = $_POST["comment"];

$validuser = "SELECT user_id FROM username WHERE user_id='" . $user . "'";

if (mysqli_num_rows($mysqli->query($validuser))== 0) {
  echo "Invalid username";
break;
}else {
  echo "welcome <br>";
  echo $user;
}


$info= "INSERT INTO Posts (author_id,content) VALUES ('" . $user . "','" . $comment. "')";

if ($comment=="") {
  echo " nothing written, which is diffrent then writing nothing";
}
else if ($mysqli->query($info)== TRUE) {


      printf("conent added");


} else {
  echo "oops";
}
 ?>
