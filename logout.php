<link rel="stylesheet" href="package/dist/sweetalert2.min.css">
<script src="package/dist/sweetalert2.all.min.js"></script>
<?php
	session_start();
	include("session_connect.php");

	unset($_SESSION["id"]); //remove this data

	session_destroy();
?>
<body>
	<script>
		Swal.fire({
			icon: 'success',
			title: 'Logout Successfully',
			showConfirmButton: true,
			confirmButtonText: 'OK'
			}).then((result) => {
			if (result.isConfirmed) {
				window.location.replace("index.php");
			}
			})
	</script>
</body>