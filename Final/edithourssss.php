<?php
include('config.php');
			

			$name=$_POST['namee'];
			$id=$_POST['id'];
			$january=$_POST['january'];
			$february=$_POST['february'];
			$march=$_POST['march'];
			$april=$_POST['april'];
			

			
			$update=mysqli_query($bd,"UPDATE hour SET name='$name', id='$id', january='$january', february='$february', march='$march', april='$april', content='$location' where min_id='$id'");
			
			exit();
		
			
	}


?>
