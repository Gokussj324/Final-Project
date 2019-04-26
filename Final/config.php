<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "keiserdb";
$prefix = "";


$errors = 0;
$DBConnect = @mysqli_connect("localhost", "root", "");
if ($DBConnect === FALSE) {
    $bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
   mysqli_select_db($bd,$mysql_database) or die("Could not select database");
} 
else {
     $DBName = "keiserdb";
     $result = @mysqli_select_db($DBConnect,$DBName);
     if ($result === FALSE) {
          echo "<p>Unable to select the database. " .
               "Error code " . mysqli_errno($DBConnect) . 
               ": " . mysqli_error($DBConnect) . "</p>\n";
          ++$errors;
     }
}

?>