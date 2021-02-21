<?php
	if(isset($_POST['razorpay_payment_id']))
	{
		session_start();
		$name = $_SESSION['name'];
		$payment_id = $_POST['razorpay_payment_id'];
		$apiKey = "Your API Key";
		$keySecret = "Your Key Secret";
		$api_url = "https://$apiKey:$keySecret@api.razorpay.com/v1/payments/:$payment_id";
		$json_data = file_get_contents($api_url);
		$response_data = json_decode($json_data);
		$to = $response_data->email;
		$subject = "Sparks Donation";
		$contact = $response_data->contact;
		$amount = ($response_data->amount) / 100;
		$conn = mysqli_connect('localhost', 'root', 'shrutp', 'payment');
		$conn->query("INSERT into tbl_transactions values ('$name', '$to', '$amount', NOW())");
		$message = "
		<html>
		<head>
			<title>Sparks Payment</title>
		</head>
			<body>
 				<h1>Thank you for joining with us!</h1>
 				<p>You have successfully donated to our campaign.</p>
 				<h3>Payment Details</h3>
        	<table cellspacing='0' style='border: 2px solid #27ae60; width: 300px; height: 200px;'>
            <tr>
                <th>Email:</th><td>$to</td>
            </tr>
            <tr>
                <th>Contact:</th><td>$contact</td>
            </tr>
            <tr>
                <th>Amount:</th><td>	
&#8377; $amount </td>
            </tr>
        </table>
    </thead>
    <tbody>
      
    </tbody>
  </table>
			</body>
		</html>
	";

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers = "Content-type:text/html;charset=UTF-8" . "\r\n";

		mail($to, $subject, $message, $headers);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="6;url=home.html" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<title>Payment Success</title>
	<style type="text/css">
		.container
		{
			margin-top: 150px;
		}
		p
		{
			font-family: 'Open Sans', sans-serif;
			font-size: 18px;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="container" style="border: 1px solid #27ae60;">
				<div class="row" style="background-color: #27ae60; color: white;">
				<div class="col-sm-12">
					<center><h1>Payment Successful</h1></center>
				</div>
			</div>
			
			<div class="row" style="margin: 40px;">
				<div class="col-sm-12">
					<center><label class="fas fa-check fa" style="border: 2px solid #27ae60; border-radius: 100%; font-size: 40px; padding: 10px; color: #27ae60;"></label></center>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-10">
					<center><p>An invoice has been sent to your email</p></center>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<center><p>You will be redirected to home page within few seconds</p></center>
				</div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>