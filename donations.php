<!DOCTYPE html>
<html>
<head>
	<title>Donations</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<style type="text/css">
		.well
		{
			margin-top: 100px;
			background-color: white;
		}
	</style>
</head>
<body>
	<div class="row">
		<div class="col-sm-3">
			<div class="row" style="margin-top: 80px;">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<center>
						<input type="button" name="" value="Back" onclick="location.href='home.html';" class="btn btn-primary" style="font-size: 18px;">
					</center>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="well">
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<center><h1>Donations Details</h1></center>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-10">
						<table class="table table-hover" style="font-size: 16px;">
    						<thead>
      							<tr>
									<th>Donar</th>
									<th>Email</th>
									<th>Amount</th>
									<th>Date</th>
								</tr>
    						</thead>
    						<tbody>
      							<?php
      								$conn = mysqli_connect('localhost', 'root', 'shrutp', 'payment');
      								$select = "SELECT * FROM tbl_transactions";
      								$result = $conn->query($select);

      								if($result->num_rows > 0)
      								{
      									while($row = $result->fetch_assoc())
      									{
      										echo "<tr><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["amount"] . "</td><td>" . $row["date"] . "</td></tr>";
      									}
      								}
      							?>
    						</tbody>
  						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>