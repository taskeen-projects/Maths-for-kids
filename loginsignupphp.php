<?php

	$con =mysqli_connect('localhost','root','','a');
	
	if (!$con)
	{
		echo 'Not Connected To Server';
	}
	
	if (!mysqli_select_db($con,'a'))
	{
		echo 'Database Not Selected';
	}

	
    $Email_Address = $_POST['Email'];
	$Phone_Number = $_POST['Phonenumber'];
	$Password = $_POST['Password'];
	//$hashed = hash("sha512",$Password);
	
    mysqli_query($con,"INSERT INTO b( email, phoneno, password) VALUES ('$Email_Address','$Phone_Number','$Password')");
				
	if(mysqli_affected_rows($con) > 0){
	
    header("Location: ../web/maths/maths.html");
    } else {
	echo "NOT Inserted<br />";
	echo mysqli_error ($con);
}
//	header("refresh:2; url=http://localhost/login/signup.html");
    $con->close();




    
?>