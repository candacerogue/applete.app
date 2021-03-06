<?php

	// Put your MailChimp API and audience ID here
	$api_key = getenv('api_key');
	$audience_id = getenv('audience_id');

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
