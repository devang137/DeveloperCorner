<link id="theme-style" rel="stylesheet" href="assets/css/sing.css">
<link rel="shortcut icon" href="favicon.ico">  

<form action="login.php" method="POST">
	<div id="login-box">
	  	<div class="left">
		    <h1>Sign up</h1>
		    
			    <input type="text" name="username" placeholder="Username" />
			    <input type="text" name="email" placeholder="E-mail" />
			    <input type="password" name="password" placeholder="Password" />
			    <input type="password" name="password2" placeholder="Retype password" />
			    
			    <input type="submit" name="submit" value="submit" />
	  	</div>

	  	<div class="right">
		    <span class="loginwith">Sign in with<br />social network</span>
		    
		    <button class="social-signin facebook">Log in with facebook</button>
		    <button class="social-signin twitter">Log in with Twitter</button>
		    <button class="social-signin google">Log in with Google+</button>
	  	</div>
			<div class="or">OR</div>
	</div>
</form>

	<?php
		include('connection.php');
		if(isset($_POST['submit']))
		{
			$name=$_POST['username'];
			$email=$_POST['email'];
			$pass=$_POST['password'];

			$sql="INSERT INTO singup(name,email,pass)VALUES('$name','$email','$pass')";

			if (mysqli_query($connection, $sql)) 
			{ 
	    		echo "New record created successfully";
			} 
			else 
			{
	   		   echo "Error: " . $sql . "<br>" . mysqli_error($connection);
			}
		}
	?>