<?php
	#Add Stripe file
	require_once('init.php');
	if ($_POST) {
	  Stripe::setApiKey("sk_test_8M4LiC91VUzF2BT31CEhSGWk");
	  $error = '';
	  $success = '';
	  try {
	    if (!isset($_POST['stripeToken']))
	      throw new Exception("The Stripe Token was not generated correctly");
	    Stripe_Charge::create(array("amount" => 10,
	                                "currency" => "usd",
	                                "card" => $_POST['stripeToken']));
	    $success = 'Your payment was successful.';
	  }
	  catch (Exception $e) {
	    $error = $e->getMessage();
	  }
	}
?>