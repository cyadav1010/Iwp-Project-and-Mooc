<?php
session_start();
if (isset($_POST['heading']))
{
	
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "software";


$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	$heading = $_POST['heading'];
	$content = $_POST['content'];
	$author = $_SESSION['userid'];

$sql = "insert into post (header,content,author) values ('$heading','$content','$author');";

if (mysqli_query($conn, $sql)) {
	        
	header('Location: /vitbull?type=1');

} 
else {
	
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}


else
{
	
	header('Location: /vitbull?type=2');

}






?>
