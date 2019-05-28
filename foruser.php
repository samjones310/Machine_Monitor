<?php
session_start();
//if(isset($_POST["submit"])){
     $servername = "localhost";
$username = "id4216850_sam";
$password = "Samjones310@";
$dbname = "id4216850_details";

    // Create connection
    $conn=new mysqli($servername, $username, $password, $dbname);

    //Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $cust= mysqli_real_escape_string($conn,$_POST['custid']); 
    $email = mysqli_real_escape_string($conn,$_POST['email']); 
	
   $sql= "INSERT INTO forgot (ID,EMAIL) VALUES ('$cust','$email');";
 
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
			?>
		
	      <script>
         window.location = "index.html";
</script>
    <?php
		}

 else {
    echo "0 results";
}
 
	?>