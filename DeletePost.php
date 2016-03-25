<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "jballard", "fireball", "jballard");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$id = $_POST['id'];

if(empty($id))
  {
    echo("You didn't select any buildings.");
  }
  for ($i=0; $i < count($id) ; $i++) {

    $query = "DELETE FROM Posts WHERE post_id='" . $id[$i] . "'";

    // echo  " . $query. " ;

    if ($mysqli->query($query)== TRUE) {


         echo"<br> Post deleted </br>";


   } else {
     echo "oops";
   }

}
// if (mysqli_num_rows($mysqli->query($query))== 0) {
//
// $info= "INSERT INTO Posts (author_id,content) VALUES ('" . $user . "','" . $comment. "')";
//

 ?>
