<?php
	$apiKey = "Your API Key"; 
	$name =  $_POST['name'];
	$email =  $_POST['email'];
	$contact = $_POST['contact'];
	$amount = $_POST['amount'];
	session_start();
	$_SESSION['name'] = $name;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pay</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.0.js"></script>
	<style type="text/css">
		#rzp-button1
		{
			display: none;
		}
	</style>
</head>
<body>
	<button id="rzp-button1">Pay</button>
	<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
	<script>
		var name = "<?php echo $name; ?>";
		var email = "<?php echo $email; ?>";
		var contact = "<?php echo $contact; ?>";
		$(document).ready(function() {
			$('#rzp-button1').click();	
		});
		var options = 
		{    
			"key": "<?php echo $apiKey; ?>",   
			"amount": "<?php echo $amount * 100; ?>", 
			"currency": "INR",    
			"name": "Sparks Payment",    
			"description": "Help Society",    
			"image": "https://dewey.tailorbrands.com/production/brand_version_mockup_image/502/4684898502_6de7bf66-2fa1-4906-b1fd-2b52e4ec503b.png?cb=1613742836",   
			"callback_url": "success.php",    
			"modal": {
    		    "ondismiss": function(){
            		console.log("Checkout form closed");
            		alert("Payment Cancelled");
            		window.location = "checkout.php";
        		}
    		},  
			"prefill": {        
				"name": name,        
				"email": email,        
				"contact": contact},    
			"notes": {        
				"address": "Razorpay Corporate Office"    
			},    
			"theme": {        
				"color": "#3399cc"    
		}};
		var rzp1 = new Razorpay(options);
		document.getElementById('rzp-button1').onclick = function(e){    
			rzp1.open();    
			e.preventDefault();
		}
	</script>
</body>
</html>