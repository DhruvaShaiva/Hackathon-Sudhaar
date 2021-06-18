<?php

$servername='localhost';
$user = 'root';
$password = '';
$database = 'sudhaar';

$connect = new mysqli($servername, $user, $password, $database);

//$sql = "CREATE TABLE Complaints( ReferenceId INT unsigned NOT NULL AUTO_INCREMENT,
//        Pincode INT(6) NOT NULL,             
//  Lane VARCHAR(50) NOT NULL, Area VARCHAR(50) NOT NULL, Landmark VARCHAR(200), Image MEDIUMBLOB, Description LONGTEXT NOT NULL,
//  Email VARCHAR(40) NOT NULL, PRIMARY KEY (ReferenceId) )";
//
//if (mysqli_query($connect, $sql)) {
//  echo "Table created successfully";
//} else {
//  echo "Error creating table: " . mysqli_error($connect);
//}

// create a variable
$category=$_REQUEST['category'];
$lane=$_REQUEST['lane'];
$area=$_REQUEST['area'];
$landmark=$_REQUEST['landmark'];
$city=$_REQUEST['city'];
$pincode=$_REQUEST['pincode'];
$description=$_REQUEST['description'];
$img=NULL;

if(!empty($_FILES["image"]["name"])) {          
    $image = $_FILES['image']['tmp_name']; 
    $img = addslashes(file_get_contents($image)); 
}
$mail=$_POST['mail'];

//Execute the query


mysqli_query($connect,"INSERT INTO Complaints (Category, Lane, Area, Landmark, Pincode, Description, Image, Email)
		        VALUES ('$category','$lane','$area', '$landmark', '$city', '$pincode','$description','$img', '$mail')");
				
	if(mysqli_affected_rows($connect) > 0){
	echo "<p>Complaint Registered Successfully</p>";
} else {
	echo "Unable to Registerter Complaint<br />";
	echo mysqli_error ($connect);
}
?>