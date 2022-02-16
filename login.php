<?php
include("db_connection.php");

session_start();

function login($handler, $data)
{
    $username = strip_tags($data["username"]);
	$password = strip_tags($data["pass"]);

    $stmt = $handler->prepare("SELECT * FROM users WHERE username=?");
    $stmt->execute([$username]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($stmt->rowCount() > 0)
    {
        if ($password == $row["pass"])
        {
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["user_name"] = $row["username"];
            $_SESSION["admin"] = $row["admin"];
            echo "<script>window.location.href = 'index.php';</script>";
        }
        else
        {
            echo "<script>alert('Wrong password!'); window.location.href = 'login_page.php';</script>";
        }
    }
    else
    {
        echo "<script>alert('There is no account with this username!'); window.location.href = 'login_page.php';</script>";
    }
}

if(isset($_POST))
{
    login($dbh, $_POST);
}
else
{
    header("location: login_page.php");
}
?>