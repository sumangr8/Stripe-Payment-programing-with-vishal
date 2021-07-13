<?php
include("config.php");
\Stripe\Stripe::setVerifySslCerts(false);//only for localhost
$token=$_POST["stripeToken"];
if(isset($_POST["stripeToken"]))
{
	$data=\Stripe\Charge::create(array(
		"amount"=>500,
		"currency"=>"inr",
		"description"=>"Test Discription",
		"source"=>$token

	));
	echo "<pre>";
print_r($data);
}
?>