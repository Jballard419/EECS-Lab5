
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


$mysqli = new mysqli("mysql.eecs.ku.edu", "jballard", "fireball", "jballard");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT user_id FROM username" ;

if ($result = $mysqli->query($query)) {

  echo "<table>" ;
  echo "<tr>";

    while ($row = $result->fetch_assoc()) {
        echo " <td>" .  $row["user_id"] . "</td>";
        echo "</tr> <tr>";
    }

    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();
?>
