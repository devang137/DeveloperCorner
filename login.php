<?php
	 session_start();
      include("connection.php");

        if(isset($_POST['submit'])) 
        {
            $name = mysqli_real_escape_string($connection,$_POST['user']);
            $pwd = mysqli_real_escape_string($connection,$_POST['pass']);               

            $sql="SELECT * FROM singup where email='$name' and pass='$pwd'";

            $result=mysqli_query($connection,$sql);
            $data=mysqli_fetch_array($result,MYSQLI_BOTH);
            
              if($data['email']==$name and $data['pass']==$pwd )
              { 
                header('Location:index.php');
              }
              else
              {
                echo "Login Fail";
              }
      }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <style type="text/css">
    * {
      box-sizing: border-box;
      margin: 0;
    }

    body {
      height: 100vh;  
      background-position:
        top 10px left 10px,
        top 10px right 10px,
        bottom 10px right 10px,
        bottom 10px left 10px;
      background-size: 86px;
      background-repeat: no-repeat;
      background-image:
        url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/angles-top-left.svg),
        url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/angles-top-right.svg),
        url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/angles-bottom-right.svg),
        url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/angles-bottom-left.svg);
       background-color: #20c997;
    }

    h1 {
      font-size: 50px;
      text-align: center;
      white-space: nowrap;
    }
    h1 span {
      font-family: cursive;
      position: relative;
    }
    h1 span::before,
    h1 span::after {
      vertical-align: middle;
      display: inline-block;
      content: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/squiggle.svg);
    }
    h1 span::after {
      transform: scaleX(-1);
    }

  </style>
</head>
<body>
	<center>
	<form  method="POST">
		<div class="main">
			 <h1><span>Login</span></h1>
			<div class="sub">
				<input type="text" name="user" placeholder="Username"> <br><br>
				<input type="text" name="pass" placeholder="Password"> <br><br>
				<input type="submit" name="submit" value="Login">	
				<input type="button" onClick="location.href='singup.php'" value='Sing Up'> <br><br>
				<a href="email/forgotpass.php"><b> Forget Pass </b></a>

			</div>
		</div>
	</form>
	</center>
</body>
</html>