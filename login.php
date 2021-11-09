
<?php
if(isset($_POST['btnLogin']))
{
	$us = $_POST['txtUsername'];
	$us =pg_real_escape_string($conn,$us);
	$pa = $_POST['txtPass'];

	if($us == "")
	{
		echo "<script>alert('Enter username please')</script>";
	}
	if($pa == "")
	{
		echo "<script>alert('Enter password please')</script>";
	}	
	else
	{
		include_once("connection.php");
		$pass = md5($pa);
		$res = pg_query($conn, "SELECT username, password, state FROM customer WHERE username='$us' AND password='$pass'")
		or die(pg_errormessage($conn));
		$row = pg_fetch_array($res,NULL, PGSQL_ASSOC);
		if(pg_num_rows($res)==1)
			{	
				$_SESSION["us"] = $us;
				$_SESSION["admin"] = $row["state"];
				echo '<meta http-equiv="refresh" content="0;URL=index.php"/>'; 
			}
		else
		{
			echo "<script>alert('Username or password is incorrect, please enter again!')</script>";
		}
	}
}
?>
<div class="container">
	<h2 align = "center">Login</h2>
	<form id="login" name="login" method="POST">
	<div class="form-group">
		<label for="txtEmail">Username:</label>
		<input type="text" name="txtUsername" id="txtUsername" class="form-control" placeholder="Enter uesrname">
	</div>
	<div class="form-group">
		<label for="txtPass">Password:</label>
		<input type="password" name="txtPass" id="txtPass" class="form-control" placeholder="Enter password">
	</div>
	<button type="submit" name="btnLogin" class="btn btn-primary" id="btnLogin" value="Login">Login</button>
	<button type="button" name="btnCancel" class="btn btn-danger" id="btnLogin" onclick="window.location='index.php'">Cancel</button>
	<div class="container signin">
    <br><p>Do not have an account? <a href="?page=register">Sign up</a>.</p>
    </div>
	</form>
</div>	