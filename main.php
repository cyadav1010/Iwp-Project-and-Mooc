<?php require("header.php");?>
<?php

if ($_REQUEST['type1'] == 1)
{
		
	echo "<script>alert('Wrong Username/Password Combination');</script>";
}
else if ($_REQUEST['type1'] == 2)
{
		echo "<script>alert('Registered Successfully');</script>";
	
}

else if ($_REQUEST['type1'] == 3)
{
		echo "<script>alert('Deleted Successfully');</script>";	
	
}

else if ($_REQUEST['type1'] == 4)
{
		echo "<script>alert('Edited Successfully');</script>";	
	
}



?>
<div id="divbody">
<div id="mainloginform">
<form action="login.php" method="post" onsubmit="return validateloginform()" id="loginform" style="float:left; margin-right:10px;">
<table class="logintable">
<thead>
<tr><th colspan=2>Login</th>
</thead>
<tbody>
<tr><td>Username : </td><td><input id="logintext" name='userid' type="text"></td><td><span id="span1"></span></td></tr>
<tr><td>Password : </td><td><input id="loginpassword" name = 'pass' type="password"></td><td><span id="span2"></span></td></tr>
<tr><td><input type="checkbox" id="logincheck" name="logincheck" ><label for="logincheck">Remember Me</label></td><td><input style="float:right" type="submit" value="Login"></td>
</tbody>





</table>
</form>
<form action="reg" method="post" enctype="multipart/form-data">
<table class="reg">
<tr>
<th colspan=2>Registration</th>
</tr>
<tr>
<td>Name</td>
<td><input type="text" name="name" required></td>
</tr>

<tr>
<td>User-ID</td>
<td><input type="text" name="userid" required></td>
</tr>


<tr>
<td>Password</td>
<td><input type="password" name="pass" required></td>
</tr>

<tr>
<td>E-Mail</td>
<td><input type="email" name="email" required></td>
</tr>

<tr>
<td>Image</td>
<td><input type="file" name="image" required></td>
</tr>

<tr>
<td></td>
<td><input type="reset"><input type="submit" value="Register"></td>
</tr>



</table>
</form>


</div>


</div>



</body>
</html>
