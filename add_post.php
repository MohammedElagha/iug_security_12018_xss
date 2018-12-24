<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<input type="text" name="post">
		<button type="submit">Add Post</button>
	</form>
</body>
</html>


<?php

include_once('connection.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$post = $_POST['post'];		// <script>any JavaScript code</script>

	$query = "insert into posts (post) values ('$post')";
	$result = mysqli_query($conn, $query);
}

?>