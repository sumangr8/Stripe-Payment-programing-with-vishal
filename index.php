<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form method="post" action="submit.php">
	<script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="<?php echo $Publishablekey; ?>" data-amount="500" data-name="Theequicom" data-description="Test Description" data-image="theequicom.jpg" data-currency="inr" data-email="suman@gmail.com" ></script>
</form>
</body>
</html>