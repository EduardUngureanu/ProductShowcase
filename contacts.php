<?php
    include("db_connection.php");

    session_start();

    function generate_table($data)
    {
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Job</th><th>Email</th><th>Phone number</th></tr>";
     
        foreach($data as $row)
        {
            echo "<tr>";

            echo "<td class='ID'>" . $row[0] . "</td>";
            echo "<td>" . $row[1] . "</td>";
            echo "<td>" . $row[2] . "</td>";
            echo "<td>" . $row[3] . "</td>";
            echo "<td>" . $row[4] . "</td>";

            echo "</tr>";
        }
    
        echo "</table>";
    }

    function print_all($handler)
    {
        $sth = $handler->prepare("SELECT * FROM contacts");
        $sth->execute();
        $results = $sth->fetchAll();
        generate_table($results);
    }

    function print_specific($handler, $key)
    {
        $sth = $handler->prepare("SELECT * FROM contacts WHERE id LIKE '%$key%' OR name LIKE '%$key%' OR role LIKE '%$key%' OR email LIKE '%$key%' OR phone LIKE '%$key%'");
        $sth->execute();
        $results = $sth->fetchAll();
        generate_table($results);
    }
?>

<!doctype html>

<html lang="en">
<head>
	<meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="style.css" rel="stylesheet">

    <title>Producer contacts</title>
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

    <div class="search">
        <form name="search" action="contacts.php" method="POST">
            <table>
                <tr>
                    <td>
                        <input name="search_key" id="search_key" type="text" value="">
                    </td>
                    <td>
                        <input name="send" type="submit" value="Search"/>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <div class='add'>
    <?php
        if(isset($_SESSION["admin"]))
        {
            if($_SESSION["admin"] == 1)
            {
                echo "<form name='add_entry' onsubmit='return validate()' action='insert_contact.php' method='POST'><table>";
                    echo "<td><input name='name' id='name' type='text' placeholder='Name' value=''></td>";
                    echo "<td><input name='role' id='role' type='text' placeholder='Job' value=''></td>";
                    echo "<td><input name='email' id='email' placeholder='Email' type='text' value=''></td>";
                    echo "<td><input name='phone' id='phone' placeholder='Phone' type='text' value=''></td>";
                    echo "<td><input name='send' type='submit' value='Add'></td></tr>";
                echo "</table></form>";
            }
        }
    ?>
    </div>

    <div class="results">
        <div class="divider"></div>
        <?php
            if (isset($_POST["search_key"]))
            {
                $key = strip_tags($_POST["search_key"]);
                print_specific($dbh, $key);
            }
            else
            {
                print_all($dbh);
            }
        ?>
        <div class="divider"></div>
    </div>

    <script>
		function validate()
		{
			var name = document.add_entry.name.value;
			var role = document.add_entry.role.value;
            var email = document.add_entry.email.value;
            var phone = document.add_entry.phone.value;
			
			if (name.length == "" || role.length == "" || email.length == "" || phone.length == "")
			{
				alert("All fields must be filled!");  
				return false;  
			}
		}
	</script>
</body>
</html>