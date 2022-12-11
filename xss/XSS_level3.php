<!DOCTYPE html>
<html>
<head>
	<title>XSS 3</title>
   <style>
		body {
  background-image: url(https://htmlcolorcodes.com/assets/images/html-color-codes-color-tutorials.jpg);
}
.button {
  background-color:rgba(176, 39, 39, 0.979);
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; 
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
      <button class="button button2" name="mainButton" onclick="location.href='xssmainpage2.html';"><strong>Main Page</strong></button>
	</div>
<div align="center">
<form method="GET" action="" name="form">
   <p>Your name:<input type="text" name="username"></p>
   <input type="submit" name="submit" value="Submit">
</form>
	</div>
<?php 
if (isset($_GET["username"])) {
	$user = preg_replace("/<(.*)[S,s](.*)[C,c](.*)[R,r](.*)[I,i](.*)[P,p](.*)[T,t]>/i", "", $_GET["username"]);
	echo "Your name is "."$user";
}
 ?>


</body>
</html>