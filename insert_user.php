<?php
include("db_connection.php");

function check_username($handler, $username)
{
    $stmt = $handler->prepare("SELECT 1 FROM users WHERE username=?");
    $stmt->execute([$username]);
    return $stmt->fetchColumn();
}

function introducere_date($handler, $data)
{
    if (check_username($handler, $data['username']))
    {
        echo "<script>alert('Username is already taken!'); window.location.href = 'register.php';</script>";
    }
    else
    {
        $sql = "INSERT INTO users (username, pass) VALUES (?,?)";
        $stmt = $handler->prepare($sql);
        $stmt->execute([$data['username'], $data['pass']]);
        echo "<script>alert('Register succesful!'); window.location.href = 'register.php';</script>";
    }
}

if(isset($_POST))
{
    introducere_date($dbh, $_POST);
}
else
{
    header("location: register.php");
}
?>