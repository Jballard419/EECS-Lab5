
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


$mysqli = new mysqli("mysql.eecs.ku.edu", "jballard", "fireball", "jballard");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$user = $_POST["user"];

$query = "SELECT content FROM Posts WHERE author_id='" . $user . "'";



if ($result = $mysqli->query($query)) {

  echo "<table>" ;
  echo "<tr>";

    while ($row = $result->fetch_assoc()) {
        echo " <td>" .  $row["content"] . "</td>";
        echo "</tr> <tr>";
    }

    /* free result set */
    $result->free();
}else {
  echo "you fail";
}

/* close connection */
$mysqli->close();
?>
