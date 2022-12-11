<!DOCTYPE html>
<html>
<head>
<style>
		body {
  background-image: url(https://www.zingerbug.com/Backgrounds/background_images/yellow_and_green_gradient.jpg);
}
.button {
  background-color:  rgba(112, 176, 39, 0.877) ; 
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
      <button class="button button2" name="mainButton" onclick="location.href='fileupl2.html';"><strong>Main Page</strong></button>
</div>

<div align="center">
<form action="" method="post" enctype="multipart/form-data">
   <br>
    <b>Select image : </b> 
    <input type="file" name="file" id="file" style="border: solid;">
    <input type="submit" value="Submit" name="submit">
</form>
</div>
<?php

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["file"]["name"]);
	
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
    echo "File uploaded /uploads/".$_FILES["file"]["name"];
}
?>
</body>
</html>