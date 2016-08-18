<?php
	


//connect to the MySQL database via MySQLi
function connectToDB()
{
	
}


function closeDB()
{
}


/**
 *
 */
function retrieveContent($id)
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";	
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) 
	{
    	die("Connection failed: " . mysqli_connect_error());
	}
	
	//echo "Connected successfully";

	$sql = "SELECT ID, text FROM text WHERE id = " . $id;
	$result = $conn->query($sql);
    $data = "0 results";

	if ($result->num_rows > 1)
	{
	    $data = $result;
	    /*
	    // output data of each row
	    while($row = $result->fetch_assoc())
	    {
	        "<br/>id: " . $row["ID"] . " - Username: " . $row["username"] . "<br>";
	    }
	    */
	}
	else if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $data = $row["text"];
	}
    $conn->close();


    return $data;
}

?>