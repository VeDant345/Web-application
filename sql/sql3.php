<!DOCTYPE html>
<html>
<head>
	<title>SQL Injection</title>
	<style>
		body {
  background-image: url(https://cdn0.tnwcdn.com/wp-content/blogs.dir/1/files/2015/04/colortheory.jpg);
}
.button {
  background-color:rgba(176, 39, 169, 0.623); /* Green */
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button1:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
</head>
<body>

<div>
<button class="button button1" name="homeButton" onclick="location.href='../index.html';"><strong>Home Page</strong></button>
      <button class="button button2" name="mainButton" onclick="location.href='sqlmainpage2.html';"><strong>Main Page</strong></button>
	</div>

	<div align="center">
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" >
		<p>Give me book's number and I give you book's name in my library.</p>
		Book's number : <input type="text" name="number">
		<input type="submit" name="submit" value="Submit">
		<!-- <p>//Is this same with the level 2?</p>-->
	</form>
	</div>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$db = "1ccb8097d0e9ce9f154608be60224c7c";

	// Create connection
	$conn = new mysqli($servername, $username, $password,$db);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	//echo "Connected successfully";
	if(isset($_POST["submit"])){
		$number = $_POST['number'];
		$query = "SELECT bookname,authorname FROM books WHERE number = '$number'"; //Is this same with the level 2?
		$result = mysqli_query($conn,$query);

		if (!$result) { //Check result
		    $message  = 'Invalid query: ' . mysql_error() . "\n";
		    $message .= 'Whole query: ' . $query;
		    die($message);
		}

		while ($row = mysqli_fetch_assoc($result)) {
			echo "<hr>";
		    echo $row['bookname']." ----> ".$row['authorname'];    
		}

		if(mysqli_num_rows($result) <= 0)
			echo "0 result";
      
	}
?> 

</body>
</html>