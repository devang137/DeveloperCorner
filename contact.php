<link id="theme-style" rel="stylesheet" href="assets/css/contactt.css">  

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
          Swal.fire({
          type: 'warning',
          title: 'Oops...',
          text: 'Pls Enter Name!',
          });
	        return false;
    	}
    	if (y == "") 
	    {
          Swal.fire({
          type: 'warning',
          title: 'Oops...',
          text: 'Pls Enter Email!',
          });
	        return false;
    	}
    	if (z == "") 
	    {
          Swal.fire({
          type: 'warning',
          title: 'Oops...',
          text: 'Pls Enter Phone Number!',
          });
	        return false;
    	}
	}	
</script>

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
        echo "<script>";
        echo "Swal.fire('Good job!','i will contact you in 1 day!','success')";
        echo "</script>";
        echo '<div class="alert alert-success">';
        echo "New record created successfully";
        echo '</div>';
    } else {
        echo '<div class="alert alert-success">';
        echo "<script>";
        echo "Swal.fire({
              type: 'error',
              title: 'Oops...',
              text: 'Something went wrong!',
              footer: '<a href>Why do I have this issue?</a>'
            })";
        echo "</script>";
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        echo '</div>';
    }
  }
  
?>