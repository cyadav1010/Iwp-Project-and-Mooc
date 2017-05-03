<?php 

if ($_REQUEST['mode'] == 'edit')
	
	{
		 require("header.php");
		$servername = "localhost";
$username = "root";
$password = "";
$dbname = "software";
$author = $_COOKIE['userid'];

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = $_REQUEST['id'];
	$sql = "select * from post where id='$id';";


 if ($result = mysqli_query($conn, $sql))
 { 
		while ($row1 = mysqli_fetch_assoc($result)) 
		{ $c = $row1['id'];
			echo '
<div id="divbody">
<div class="addpostdiv">
<form action="?page=addpost&mode=editor&id='.$c.'" method="post">
<table> 
<tr>
<th colspan=2>EDIT POST</th>
</tr>
<tr>
<th>Heading : </th><td><input type="text" name="heading" value="'.$row1['header'].'"></td>
</tr>
<tr>
<th>Content : </th><td><textarea name="content" rows="10" cols="30">'.$row1['content'].'
</textarea></td>
</tr>
<tr>
<th colspan=2><input type="submit" value="+Post"></th>
</tr>


</table>
</form>
</div>	

</div>



</body>
</html>
	
			';
		
		
		}
		
		
 }
		
		
		
	}
	
	
	else if ($_REQUEST['mode'] == 'delete')
		
		{
				$servername = "localhost";
$username = "root";
$password = "";
$dbname = "software";


$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$idd = $_REQUEST['id'];

$sql = "delete from post where id='$idd';";

if (mysqli_query($conn, $sql)) {
		
    
		header('Location: /vitbull?type=3');
} 
else {
	
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

			
			
			
			
			
			
			
			
			
		}
		
			
	else if ($_REQUEST['mode'] == 'editor')
		
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
	$author = $_REQUEST['id'];

$sql = "update post set header='$heading',content='$content' where id='$author';";

if (mysqli_query($conn, $sql)) {
	
       
		header('Location: /vitbull?type=4');
} 

			else {
	
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

			
			
			
			
		}
		
		else
			
		
		{
			
	 require("header.php");
		echo '
<div id="divbody">
<div class="addpostdiv">
<form action="post.php" method="post">
<table> 
<tr>
<th colspan=2>ADD POST</th>
</tr>
<tr>
<th>Heading : </th><td><input type="text" name="heading"></td>
</tr>
<tr>
<th>Content : </th><td><textarea name="content" rows="10" cols="30">
</textarea></td>
</tr>
<tr>
<th colspan=2><input type="submit" value="+Post"></th>
</tr>


</table>
</form>
</div>	

</div>



</body>
</html>
	
			';
			
			
			
		}
		
