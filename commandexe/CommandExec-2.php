<html>
  <head>
  <style>
		body {
  background-image: url(https://cdn.wallpapersafari.com/91/23/FgBrSc.png);
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
    <title>CommandExec-2</title>
  </head>
  <body>
    <div>
    <button class="button button1" name="homeButton" onclick="location.href='../index.html';"><strong>Home Page</strong></button>
      <button class="button button2" name="mainButton" onclick="location.href='commandexec1.html';"><strong>Main Page</strong></button>
   
      <h1 align="center">I think there is a vuln here!</h1>
    <form align="center" action="CommandExec-2.php" method="$_GET">
      <label align="center">Name:</label>
      <input align="center" type="text" name="typeBox" value=""><br>
      <input align="center" type="submit" value="Submit">
    </form>
  
  <div align="center">
    <?php
    if(isset($_GET["typeBox"])){
      $target =$_GET["typeBox"];
      $substitutions = array('&&' => '',';'  => '','/' => '','\\' => '' );
      $target = str_replace(array_keys($substitutions),$substitutions,$target);
      echo shell_exec($target);
      if($_GET["typeBox"] == "Trochilidae")
        echo "Welldone! You did great job.";
    }

    ?>
  </div>
  </body>
</html>