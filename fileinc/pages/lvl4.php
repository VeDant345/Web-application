<html>  
   <head>
      <meta charset="utf-8">
      <style>
		body {
  background-image: url(https://i.stack.imgur.com/QONBQ.png);
}
.button {
  background-color: rgba(39, 114, 176, 0.829); 
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
      <title> Level 4 </title>
   </head>

   <body>
      
      <div>
      <button class="button button1" name="homeButton" onclick="location.href='../../index.html';"><strong>Home Page</strong></button>
      <button class="button button2" name="mainButton" onclick="location.href='fileinc2.html';"><strong>Main Page</strong></button>    
      </div>
      
      <div align="center"><b><h3>This is Level 4</h3></b></div>
      <div align="center">
      <a href=lvl4.php?file=1.php><button>Button</button></a>
      <a href=lvl4.php?file=2.php><button>The Other Button!</button></a>
      </div>
      
      <?php     
        echo "</br></br>";

        if (isset( $_GET[ 'file' ])) 
        {
          $secure4 = $_GET[ 'file' ];
         
            if ($secure4!="1.php" && $secure4!="2.php") 
            {
              $secure4=substr($secure4, 0,-4);
            }
            
            if (isset($secure4)) 
            {        
              include($secure4);              
            }
        }              
      ?>
   </body>
</html>
