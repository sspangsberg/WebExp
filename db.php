<?php
	


//connect to the MySQL database via MySQLi
function connectToDB()
{
	
}


function closeDB()
{
}	


function retrieveUsers()
{
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "test";	
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) 
	{
    	die("Connection failed: " . mysqli_connect_error());
	}
	
	echo "Connected successfully";

	$sql = "SELECT ID, username FROM User";
	$result = $conn->query($sql);


	if ($result->num_rows > 0) 
	{
	    // output data of each row
	    while($row = $result->fetch_assoc()) 
	    {
	        echo "<br/>id: " . $row["ID"] . " - Username: " . $row["username"] . "<br>";
	    }
	} 
	else 
	{
	    echo "0 results";
	}

	$conn->close();
}

?>