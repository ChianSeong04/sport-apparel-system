<?php
session_start();
include("session_connect.php");

unset($_SESSION["id"]); //remove this data

session_destroy();
?>

	<script>
	alert("Log Out Successfully!!");
	</script>

<?php
header("location:index.php");
?>