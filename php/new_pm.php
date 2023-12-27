<?php
	
	require("../includes/global.php");

	session_start();

    // sanity checks
	if (empty($_POST['subject']))
		$_POST['subject'] = null;

	// get user
	$to_user = get_user($_POST["to"]);

	// make PM
	$made_pm = make_pm($to_user, $_POST['text'], $_POST['subject']);
	if ($made_pm === false) {
		apologize("Failed to submit post.");
	}

	
	redirect("user.php?u=".$_POST["to"]);
?>