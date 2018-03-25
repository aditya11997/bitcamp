
<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="customer_register.php" enctype="multipart/form-data">
	
		

		<div class="input-group">
			<label >Customer Name</label>
			<input type="text" name="c_name"  required  pattern="[A-Za-z]+\s[A-Za-z]+" aria-required="true" aria-describedby="name-format">
			<span id="name-format" class="help">Format: firstname lastname</span>
		</div>
		<div class="input-group">
			<label >Customer Email</label>
			<input type="email" name="c_email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" >
		</div>
		<div class="input-group">
			<label for="password"> Customer Password</label>
			<input type="password" name="c_pass" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" >
			<span id="name-format" class="help"><p style="width: 80;align-content: right;">Must contain at least one number and one uppercase and lowercase letter, and at least 5 or more characters"<P></span>
		</div>
		<div class="input-group">
			<label >Customer Image</label>
			<input type="file" name="c_image" required  >
		</div>
		<div class="input-group">
			<label for="c_password">Customer Country</label>
			<select name="c_country" required >
				<option>Select a Country</option>
				<option>India</option>
				<option>Japan</option>
				<option>China</option>
				<option>UK</option>
				<option>USA</option>
				<option>Egypt</option>
				
			</select>
		</div>
		<div class="input-group">
			<label >Customer City</label>
			<input type="text" name="c_city"  required pattern="[A-Za-z]{3,6}+" >
			<span id="name-format" class="help">Must contain at least 3 or 6 characters"</span>
		</div>
		<div class="input-group">
			<label >Customer Contact</label>
			<input type="text" name="c_contact"  required pattern="[0-9]{10}" >
		</div>
		<div class="input-group">
			<label >Customer Address</label>
			<input type="text" name="c_address" required pattern="[A-Za-z0-9./]{12,50}+" >
			<span id="name-format" class="help">must contain at least 12 or 50 characters</span>
			
		</div>
		
		
		
		
		
		<div class="input-group">
			<button type="submit" class="btn" name="register" value="Create Account">Register</button>
		</div>
		
	</form>
</body>
</html>
