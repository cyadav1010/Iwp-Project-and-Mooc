<?php

if (isset($_POST['name']))
{
	
		
		$servername = "localhost";
$username = "root";
$password = "";
$dbname = "software";


$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	$name = ucfirst($_POST['name']);
	$pass = md5($_POST['pass']);
	$userid = $_POST['userid'];
	$email = $_POST['email'];
	$filename = $_FILES['image']['name'];
	$filetemp = $_FILES['image']['tmp_name'];
	$filetype = $_FILES['image']['type'];
	$target = 'upload/images/';
	
	
	if ($filetype == 'image/jpeg')
	$type = '.jpg';
	else if ($filetype == 'image/png') 
	$type = '.png';
	else if ($filetype == 'image/gif') 
	$type = '.gif';
	else
	{
		die("Error : Wrong File Format <br> Upload only jpg and png");
	}
	
	
	$image = $target . $userid . $type;
	if(!move_uploaded_file($filetemp,$image))
	die("$filetemp <br> $image");
	
$sql = "select * from user where username='$userid';";
$result = mysqli_query($conn, $sql);

 if (mysqli_fetch_row($result) > 0)
 {
 require('main.php');
 }
 else
 {
    

	$sql = "insert into user (name,username,password,email,image) values ('$name','$userid','$pass','$email','$image');";

if (mysqli_query($conn, $sql)) {
	header('Location: /vitbull?type1=2');
        
} 
else {
	
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}
}

else
{
header('Location: /vitbull');

}






?>
