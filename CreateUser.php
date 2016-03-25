<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "jballard", "fireball", "jballard");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$user = $_POST["user"];

$query = "SELECT user_id FROM username" ;

$newuser= "INSERT INTO username (user_id) VALUES ('$user')";
if ($user=="") {
  echo "no input bro";
}

else if ($mysqli->query($newuser)=== TRUE) {

    /* fetch associative array */
    // while ($row = $result->fetch_assoc()) {
      printf("username added");
        // printf ("%s (%s)\n", $row["Name"], $row["CountryCode"]);
    // }

    /* free result set */
    $result->free();
}else {
  printf("username already exists");
}

/* close connection */
$mysqli->close();
?>
