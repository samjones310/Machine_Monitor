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
    $name= mysqli_real_escape_string($conn,$_POST['name']); 
    $email = mysqli_real_escape_string($conn,$_POST['email']); 
	$phone = mysqli_real_escape_string($conn,$_POST['phone']);
	$org= mysqli_real_escape_string($conn,$_POST['organise']);
	$ref= mysqli_real_escape_string($conn,$_POST['refnum']); 	
	
   $sql= "INSERT INTO newcustomer (NAME,EMAIL,PHONE,ORGANISATION,REFERENCE) VALUES ('$name','$email','$phone','$org','$ref');";
 
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