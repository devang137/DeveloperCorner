<?php
//Contact form
  include('connection.php');
  if(isset($_POST['contact-submit']))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phn=$_POST['no'];
    // $mas=$POST['comments'];

    $sql="INSERT INTO `contact`(`username`,`email`,`phn`) VALUES ('$name','$email','$phn')";

    if (mysqli_query($connection, $sql)) { 
        echo '<div class="alert alert-success">';
        echo "New record created successfully";
        echo '</div>';
    } else {
        echo '<div class="alert alert-success">';
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        echo '</div>';
    }
  }
  
?>
<link id="theme-style" rel="stylesheet" href="assets/css/contactt.css">  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="contact1">  
  <form id="contact" name="contact" method="post">
    <fieldset>
      <input placeholder="Your name" type="text" name="name">
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" name="email">
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="tel" name="no">
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." name="comments"></textarea>
    </fieldset>
    <fieldset>

      <button name="contact-submit" type="submit" id="contact-submit" data-submit="...Sending" onclick="return validateForm();">Submit</button>

    </fieldset>
  </form>
</div>

<script>
	function validateForm() 
	{
	    var x = document.forms["contact"]["name"].value;
	    var y = document.forms["contact"]["email"].value;
	    var z = document.forms["contact"]["no"].value;
	    if (x == "") 
	    {
	        alert("Pls Enter Name");
	        return false;
    	}
    	if (y == "") 
	    {
	        alert("Pls Enter Email");
	        return false;
    	}
    	if (z == "") 
	    {
	        alert("Pls Enter Phone Number");
	        return false;
    	}
	}	
</script>