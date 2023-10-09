<!DOCTYPE html>
<html>
<head>
	<title>STUDENT LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style-login.css">
</head>
<body>
     <form action="student-login.php" method="post">
     	<h2>STUDENT LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
		
     </form>
	 <div>
	 <p style="color:white">Not a a member? 
  	</p>
	 
	 <a class="btn btn-warning btn-lg" href="register.php" role="button">Register</a></div>
</body>
</html>