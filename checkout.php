<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  	<style type="text/css">
  		.jumbotron
  		{
  			margin-top: 60px;
  		}
  	</style>
</head>
<body>
	<div class="row">
		<div class="col-sm-4">
			<div class="row" style="margin-top: 60px;">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<center>
						<input type="button" name="" value="Back" onclick="location.href='home.html';" class="btn btn-success" style="font-size: 20px;">
					</center>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="jumbotron" style="padding-top: 25px; padding-bottom: 35px;">
				<form action="pay.php" class="needs-validation" method="post" novalidate>
					<center><h2 style="padding: 5px;">Fill the details</h2></center>
	  				<div class="form-group">
	  					<i class="fas fa-user"></i>
	    				<label for="name">Name:</label>
	    				<input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
	    				<div class="valid-feedback">Valid.</div>
	    				<div class="invalid-feedback">Please fill out this field.</div>
	  				</div>
	  				<div class="form-group">
	  					<i class="fas fa-envelope"></i>
			    		<label for="email">Email:</label>
			    		<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
			    		<div class="valid-feedback">Valid.</div>
			    		<div class="invalid-feedback">Please fill out this field.</div>
	  				</div>
	  				<div class="form-group">
			  			<i class="fas fa-phone-volume"></i>
			    		<label for="contact">Contact:</label>
			    		<input type="text" class="form-control" id="contact" placeholder="Enter number" name="contact" required>
			    		<div class="valid-feedback">Valid.</div>
			    		<div class="invalid-feedback">Please fill out this field.</div>
			  		</div>
			  		<div class="form-group">
			  			<i class="fas fa-rupee-sign"></i>
			    		<label for="amount">Amount:</label>
			    		<input type="text" class="form-control" id="amount" placeholder="Enter amount" name="amount" required>
			    		<div class="valid-feedback">Valid.</div>
			    		<div class="invalid-feedback">Please fill out this field.</div>
			  		</div>
			  		<button type="submit" class="btn btn-success" class="form-control" style="width: 100%; margin-top: 15px;">Proceed to Pay</button>
				</form>
			</div>
		</div>
	</div>

	<script>
		// Disable form submissions if there are invalid fields
		(function() {
  			'use strict';
  			window.addEventListener('load', function() {
    			// Get the forms we want to add validation styles to
   				var forms = document.getElementsByClassName('needs-validation');
   		 		// Loop over them and prevent submission
    			var validation = Array.prototype.filter.call(forms, function(form) {
      				form.addEventListener('submit', function(event) {
        				if (form.checkValidity() === false) {
          					event.preventDefault();
        					event.stopPropagation();
        				}
        				form.classList.add('was-validated');
      				}, false);
   		 		});
  			}, false);
		})();
	</script>

</body>
</html>