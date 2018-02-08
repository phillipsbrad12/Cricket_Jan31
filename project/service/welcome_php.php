<?php
$servername = "localhost";
$username = "cricketSql";
$password = "Cricket22!";
$dbname = "cricketdb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO PLAYER (ID, FIRSTNAME, LASTNAME)
    VALUES (4, 'John', 'Doe')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;


//try {
//    $result = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
//    $result->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$sql = "SELECT * FROM PLAYER"
    //$sql = "INSERT INTO MyGuests (firstname, lastname, email)
    //VALUES ('John', 'Doe', 'john@example.com')";
    // use exec() because no results are returned
    //$result->mysql_query($sql);
//if(!$result) {
//	echo 'Could not reun query: ' . mysql_error();
//	exit;
//}
//	$row = mysql_fetch_row($result);
//    echo $row[0];
//	echo $row[1];
//    }
//catch(PDOException $e)
//    {
//    echo $sql . "<br>" . $e->getMessage();
//    }

//$conn = null;
//?>
