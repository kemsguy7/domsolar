<?php

//This script deletes the orders from the database 
	require_once("../../config.php");

	if(isset($_GET['id'])) {

		$query = query("DELETE FROM users WHERE user_id ="  . escape_string($_GET['id']) . " ");
		confirm($query);

		set_message("User Deleted Succesfully");
		redirect("../../../public/admin/index.php?users"); //redirec 3 folders back to the orders page in the admin panel

	} else {
		redirect("../../../public/admin/index.php?users");
	}
?>