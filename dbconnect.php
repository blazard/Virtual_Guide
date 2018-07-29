<?php 
$dbcnx = mysqli_connect('localhost', 'root', '','virtual');
if (!$dbcnx) {
	exit('<p>Unable to connect to the database server at this time.</p>');
}
if (mysqli_connect_error()) {
	exit('<p>Unable to locate the database at this time.</p>');
}
?>