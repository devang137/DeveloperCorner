<?php 
	
	include ("connection.php");
	$q =mysqli_query($connection,"select * from contact")or die(mysqli_error($connection));
	
	echo "<table>";
	echo "<tr><td>".'Id'."</td><td>".'Username'.'</td><td>'.'Email'."</td><td>".'phone'."</td></tr>";
	
	// $row = mysqli_fetch_array($q);
		if ($q -> num_rows >0) {
			while ($row=$q->fetch_assoc()) {
			 	
				echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["email"]."</td><td>".$row["phn"]."</td></tr>";

			}
			echo "</table>";
		}
		else{
			echo "0 result";
		}
		$connection->close();

?>