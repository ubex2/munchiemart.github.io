<!DOCTYPE html>
<html lang="en-us">
  <head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-181062980-1"></script>
		<script>
  			window.dataLayer = window.dataLayer || [];
			  function gtag(){
				  dataLayer.push(arguments);
				}
  				gtag('js', new Date());	
  				gtag('config', 'UA-181062980-1');
		</script>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Munchie Mart | Company Login</title>
		<link rel="favicon" type = "text/css" href = "images/favicon.ico" 
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
  </head>
	<body>
	  <div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Company Login</h2>
				<p>Please enter your email and password.</p>
				<form action="" method="post">
					<div class="form-group">
						<label>Email Address</label>
						<input type="email" name="email" class="form-control" required />
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required />
					</div>
					<div class="form-group">
						<label>Email Address</label>
						<input type="submit" name="submit" class="btn btn-primary" value="Submit">
					</div>
					<p>Don't have an account? <a href="register.php">Register here</a>.</p>
				</form>
			</div>
        </div>
	</div>
	</body>
</html>