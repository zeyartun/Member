<?php
include('header.php');
// echo "<pre>";
// print_r($_SERVER) ;
// echo "</pre>";

if (isset($_POST['submit'])) {
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $POST['passtord'];

	$sql = "INSET INTO user (name,email,password,role) VALUES ('$name','$email','$password','1')";
	mysqli_query($conn,$sql);
	
}
?>

<div class="container mt-3 card p-5">

	<form method="post">
		<div class="form-group">
		    <label>User Name</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter User Name">
		</div>
		<div class="form-group">
		    <label >Email</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" name="email"  placeholder="Enter email">
		</div>
		<div class="form-group">
		    <label>Password</label>
		    <input type="password" class="form-control" id="Password1" name="password" placeholder="Password">
		</div>
		  <button type="submit" name="submit" class="btn btn-primary">Register</button>
	</form>
</div>



<?php

include('footer.php');

?>
