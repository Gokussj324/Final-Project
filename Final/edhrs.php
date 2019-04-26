<?php
include('config.php');
			
			$name=$_POST['name'];
			$id=$_POST['id'];
			$january=$_POST['january'];
			$february=$_POST['february'];
			$march=$_POST['march'];
			$april=$_POST['april'];
			

			
			$update=mysqli_query($bd,"INSERT INTO hours (name, id, january, february, march, april)
VALUES
('$name','$id','$january','$february','$march','$april')");
			
			exit();
		
			
	}


?>