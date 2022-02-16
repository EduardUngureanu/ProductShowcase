<?php
    try
    {
        $dbh = new PDO('mysql: host=localhost; dbname=project_db', 'root', '');
    }
    catch (PDOException $e)
    {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
?>