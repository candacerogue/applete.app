<?php

	// Put your MailChimp API and audience ID here
	$api_key = 'fdd0ac155fa51ee394c1840ed6d0a2fc-us17';
	$audience_id = 'd38700636c';

	// Let's start by including the MailChimp API wrapper
	include('./inc/MailChimp.php');
	// Then call/use the class
	use \DrewM\MailChimp\MailChimp;
	$MailChimp = new MailChimp($api_key);
	$result = $MailChimp->post("lists/$audience_id/members", [
            'email_address' => $_POST["mc-email"],
            'status'        => 'subscribed',
        ]);

	if ($MailChimp->success()) {
		// Success message
		echo "Thanks for subscribe.";
	} else {
		// Display error
		echo "Already subscribed Or something error.";
	}
?>
