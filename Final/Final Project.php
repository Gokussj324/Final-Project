<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<script type="text/javascript" src="app.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.btn {
  border: none;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
}

.btn:hover {background: #eee;}
.delete {color:red;}
.add {color:dodgerblue;}

.header {
	padding: 30px;
	text-align: center;
	background: #1d69d2;
	color: Black;
  font-size: 20px;
}

.header h1 {
	font-size: 40px;
}
* {
  box-sizing: border-box;
}

.button {
  padding: 10px 15px;
  font-size: 15px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4c71af;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #4c71af}

.button:active {
  background-color: #4c71af;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.footer {
  position: fixed;
  left:0;
  bottom: 0;
  width: 100%;
  background-color: blue;
  color: white;
  text-align: center;
}

#myInput {
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 50%;
  height: 50%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 50%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
</style>
</head>
<body>

<div class="header">
<h1>Workstudy</h1>
<p>Administrator page.</p>
</div>




<div class="footer">
  <p>Keiser Univeristy Latin American Campus</p>
</div>

</body>

<body onload="load()">
<div id="myform">
<b>Student Information</b>
<table id="myTable">
    <tr>
        <td>Name:</td>
        <td><input type="text" id="name"></td>
    </tr>
    <tr>
        <td>ID:</td>
        <td><input type="text" id="id"></td>
    </tr>
    <tr>
        <td>January:</td>
        <td><input type="text" id="january"></td>
    </tr>
    <tr>
        <td>February:</td>
        <td><input type="text" id="february"></td>
    </tr>
    <tr>
        <td>March:</td>
        <td><input type="text" id="march"></td>
    </tr>
    <tr>
        <td>April:</td>
        <td><input type="text" id="april">
        <input type="button" id="add" value="Add" onclick="Javascript:addRow()"></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        
    </tr>
</table>
</div>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<div id="mydata">
<b>Current data in the system ...</b>
<table id="myTableData"  border="1" cellpadding="2" contenteditable="true">
    <tr>
        <td>&nbsp;</td>
        <td><b>Name</b></td>
        <td><b>ID</b></td>
        <td><b>January</b></td>
        <td><b>February</b></td>
        <td><b>March</b></td>
        <td><b>April</b></td>

    </tr>
</table>
&nbsp;


<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "keiserdb";
$prefix = "";


$errors = 0;
$DBConnect = @mysqli_connect("localhost", "root", "keiserdb");
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

if (isset($_POST['april'])) {
  $april = $_POST['april'];

  $sql = "INSERT INTO status(april,hours)
                      VALUES('$april', false)";

  if($db->query($sql) === true){
      echo '<tr>$april</tr>';
  }else{
    die("error adding data: " . $db->error);
  }
  # code...
}

?>
 
</body>
</html>
