<?php
session_start();

if(isset($_SESSION["user_id"]))
{
	echo "<script>alert('Already logged in!'); window.location.href = 'index.php';</script>";
}
?>

<!doctype html>

<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="style.css" rel="stylesheet">

	<title>Login</title>
</head>

<body>
	<div class="navbar">
        <div class="dropdown">
            <button class="dropbtn">Account</button>
            <div class="dropdown-content">
                <?php
                    if(isset($_SESSION["user_id"]))
                    {
                        echo '<a>Username: ' . $_SESSION["user_name"] .'</a>';
                        echo '<a href="logout.php">Logout</a>';
                    }
                    else
                    {
                        echo '<a>Not logged in</a>';
                        echo '<a href="login_page.php">Login</a>';
                    }
                ?>
            </div>
          </div>
        <a href="index.php">Product</a>
        <a href="contacts.php">Producer contacts</a>
    </div>

	<center>
	<div class="form-container">
		<div class="divider"></div>
		<form name="login" action="login.php" onsubmit="return validate()" method="POST">
			<div class="title">Login to an existing account</div>
			<table>
				<tr>
					<td>
						<label for="username">Username:</label>
					</td>
					<td>
						<input name="username" id="username" type="text" value=""/>
					</td>
				</tr>
				<tr>
					<td>
						<label for="pass">Password:</label>
					</td>
					<td>
						<input name="pass" id="pass" type="password" value=""/>
					</td>
				</tr>
			</table>
			<input name="send" type="submit" value="Login"/>
		</form>
		<div class="divider"></div>
	</div>
	<div class="notice">Don't have an account? Create one <a href="register.php">here</a>.</div>
	</center>

	<script>
		function validate()
		{
			var username = document.login.username.value;
			var pass = document.login.pass.value;
			
			if (username.length == "" && pass.length == "")
			{
				alert("Username and Password fields are empty!");  
				return false;  
			}
			else
			{
				if (username.length == "")
				{
					alert("Username field is empty!");
					return false;
				}
				if (pass.length == "")
				{
					alert("Password field is empty!");
					return false;
				}
			}
		}
	</script>
</body>
</html>