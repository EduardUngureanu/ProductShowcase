<?php
include("db_connection.php");

function introducere_date($handler, $data)
{
    $sql = "INSERT INTO contacts (name, role, email, phone) VALUES (?,?,?,?)";
    $stmt = $handler->prepare($sql);
    $stmt->execute([$data['name'], $data['role'], $data['email'], $data['phone']]);
    echo "<script>alert('Entry added succesfully!'); window.location.href = 'contacts.php';</script>";
}

if(isset($_POST))
{
    introducere_date($dbh, $_POST);
}
else
{
    header("location: contacts.php");
}
?>