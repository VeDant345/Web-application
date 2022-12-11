<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <title>SETUP</title>
    <style>
      body {
          background-image: url(https://img.wallpapersafari.com/desktop/1680/1050/89/56/Ht65S1.jpg); 
          background-repeat: no-repeat;
          background-position: center;
          background-size: cover;
      }

      .container {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
      }
      .image-container {
        text-align: center;
        width: 100%;
      }

      .links-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 20px;
      }

      .link {
        min-width: 50% !important;
      }

      @media (min-width: 1200px) {
        .container {
          max-width: 1140px;
        }
      }
      @media (min-width: 992px) {
        .container {
          max-width: 960px;
        }
      }
      @media (min-width: 768px) {
      .container {
          max-width: 720px;
        }

      .link {
          width: 100%;
        }
      }
      @media (min-width: 576px) {
      .container {
          max-width: 540px;
        }
      }

      .w3-purple, .w3-hover-purple:hover {
        color: #fff!important;
        background-color: black !important;
      }

    </style>
  </head>
  <body class="w3-white">
    <div class="container">
      <div class="image-container">
        <img
          src="https://icons.iconarchive.com/icons/artua/mac/512/Setting-icon.png"
          class="w3-margin"
          alt="Person"
          max-width="100%"
          height="150px"
          style="border-radius: 50%"
        />
        <div>
        <a href="index.html" class="w3-button w3-hover-white w3-large w3-round w3-purple w3-border link" target="_blank"><i class="fab fa-home"></i>Home</a>
  </div>

        <div align="center" style="background-color:yellow;padding:150px;">
    <form method="POST">
      <label style="font-size:24px;font-family:'Georgia'">Create Database:&ensp;</label>
      <input type="submit" name="submit" value="Enter" style="padding:8px;font-family:'Georgia'"></form>
    <form method="POST">
      <label style="font-size:24px;font-family:'Georgia'">Restore Database:</label>
      <input type="submit" name="submit1" value="Enter" style="padding:8px;font-family:'Georgia'"></form>
  </div>
      </div>
    </div>
    <div align="center" style="background-color:yellow;padding:60px;border-radius:0px 0px 80px 80px">
<?php

if (isset($_POST["submit"])) {

   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'root';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysqli_error( $conn));
   }
   else
   echo 'Connected successfully  </br>';
   create_database($conn);
   create_tables($conn, "1ccb8097d0e9ce9f154608be60224c7c");
   mysqli_close($conn);
}
if (isset($_POST["submit1"])) {
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'root';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

   if ($conn) {
   	echo "Connected successfully <br>";
   }
   else {
	die('Could not connect: ' . mysqli_error( $conn));
   }

   remove_database($conn);
   create_database($conn);
   create_tables($conn, "1ccb8097d0e9ce9f154608be60224c7c");
   mysqli_close($conn);
}
function create_database($conn){
   $sql = 'CREATE Database 1ccb8097d0e9ce9f154608be60224c7c';
   $retval = mysqli_query( $conn, $sql);

   if(! $retval ) {
      die('Could not create database: ' . mysqli_error( $conn));
   }

   echo "Database 1ccb8097d0e9ce9f154608be60224c7c created successfully </br>";
}

function create_tables($conn, $db_name){
   $sql = 'CREATE TABLE books( '.
      'number INT NOT NULL , '.
      'bookname VARCHAR(50) NOT NULL, '.
      'authorname VARCHAR(50) NOT NULL)';
   mysqli_select_db($conn,$db_name);
   $retval = mysqli_query( $conn , $sql);

   if(! $retval ) {
      die('Could not create table: ' . mysqli_error( $conn));
   }
    #-------------------------------------------------
   echo "Table books created successfully </br>";

   $sql = 'CREATE TABLE flags( '.
      'flag VARCHAR(50) NOT NULL)';
   mysqli_select_db($conn, $db_name);
   $retval = mysqli_query(  $conn , $sql );

   if(! $retval ) {
      die('Could not create table: ' . mysqli_error( $conn));
   }

   echo "Table flags created successfully </br>";
   #---------------------------------------------------
   $sql = 'CREATE TABLE secret( '.
      'username VARCHAR(56) NOT NULL , '.
      'password VARCHAR(56) NOT NULL)';
   mysqli_select_db($conn,$db_name);
   $retval = mysqli_query(   $conn, $sql );

   if(! $retval ) {
      die('Could not create table: ' . mysqli_error( $conn));
   }

   echo "Table secret created successfully </br>";
   #---------------------------------------------------
   $sql = 'CREATE TABLE users( '.
      'firstname VARCHAR(50) NOT NULL , '.
      'lastname VARCHAR(50) NOT NULL, '.
      'username  VARCHAR(50) NOT NULL, '.
      'password   VARCHAR(50) NOT NULL )';
   mysqli_select_db($conn, $db_name);
   $retval = mysqli_query( $conn , $sql);

   if(! $retval ) {
      die('Could not create table: ' . mysqli_error( $conn));
   }

   echo "Table users created successfully </br>";
   #---------------------------------------------------

   $sql = 'INSERT INTO books (number, bookname, authorname) VALUES (1, "SILMARILLION", "J.R.R TOLKIEN")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO books (number, bookname, authorname) VALUES (2, "DUNE", "FRANK HERBERT")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO books (number, bookname, authorname) VALUES (3, "THE HUNGER GAMES", "SUZANNE COLLINS")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO books (number, bookname, authorname) VALUES (4, "HARRY POTTER \AND THE ORDER OF THE PHONEIX", "J.K ROWLING")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO books (number, bookname, authorname) VALUES (5, "TO KILL A MOCKINGBIRD", "HARPER LEE")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO books (number, bookname, authorname) VALUES (6, "TWILIGHT", "STEPHEINE MEYER")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO books (number, bookname, authorname) VALUES (7, "THE MICE MAN", "GEORGE COCKCROFT")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   #--------------------------------------------------------------------------------------------

   $sql = 'INSERT INTO flags (flag) VALUES ("You hacked me!")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO flags (flag) VALUES ("SQL Injection is easy?")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }

   #----------------------------------------------------------------------------------------------

   $sql = 'INSERT INTO secret (username, password) VALUES ("admin", "password")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }

   #--------------------------------------------------------------------------------------------------

   $sql = 'INSERT INTO users (firstname, lastname, username, password) VALUES ("John","Doe", "Admin", "password")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO users (firstname, lastname, username, password) VALUES ("Alice","Carrol", "Rabbit", "White")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO users (firstname, lastname, username, password) VALUES ("Bruce","Batman", "Alfred", "Batmobile")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO users (firstname, lastname, username, password) VALUES ("Dare","Devil", "HackMe", "IfY0UC4N")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
}

function remove_database($conn){
   $sql = 'DROP DATABASE 1ccb8097d0e9ce9f154608be60224c7c';
   $retval = mysqli_query($conn, $sql);
   if($retval){
   echo "<br>The database deleted successfully.<br>";
   }
   else{
   echo "Error: ".$sql."<br>". mysqli_error($conn);
   }
}
?>
</div>
    <footer class="w3-container w3-center w3-margin-top w3-margin-bottom w3-padding-top-48">
       
    </footer>

  </body>
</html>
