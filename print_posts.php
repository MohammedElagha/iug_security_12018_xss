<?php

include_once('connection.php');

$query = "select * from posts";
$result = mysqli_query($conn, $query);

while($row = $result->fetch_assoc()) {
	echo $row["post"];
}

?>