<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Sign Up Form with live validation</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<form action="#" method="post">
  <h2>Sign Up</h2>
		<p>
			<label for="Email" class="floatLabel">Email</label>
			<input id="Email" name="Email" type="text">
		</p>
		<p>
			<label for="password" class="floatLabel">Password</label>
			<input id="password" name="password" type="password">
			<span>Enter a password longer than 8 characters</span>
		</p>
		<p>
			<label for="confirm_password" class="floatLabel">Confirm Password</label>
			<input id="confirm_password" name="confirm_password" type="password">
			<span>Your passwords do not match</span>
		</p>
		<p>
			<input type="submit" value="Create My Account" id="submit">
		</p>
	</form>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
