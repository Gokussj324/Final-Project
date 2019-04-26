<?php
        include('config.php');
        $get=$_GET['id'];
        $result = mysqli_query($bd,"SELECT * FROM hours where hr_id='$get'");
        
        while($row = mysqli_fetch_array($result))
          {
          $name=$row['name'];
          $id=$row['id'];
          $january=$row['january'];
          $february=$row['february'];
          $march=$row['march'];
          $april=$row['april'];
          }
?> 
<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<!--sa input that accept number only-->
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
   <!--para sa add data sa textbox -->
  <SCRIPT language="javascript">
<!--

function addCombo() {
  var textb = document.getElementById("txtCombo");
  var combo = document.getElementById("combo");
  combo.value=combo.value +textb.value + ", ";
  textb.value = "";
}
//-->
</SCRIPT>
  <!--end-->
<link rel="stylesheet" type="text/css" href="tcal.css" />
  <script type="text/javascript" src="tcal.js"></script> 
<form action="edhrs.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
 Name<br />
  <input name="name" type="text" class="ed" id="name" value="<?php echo $category; ?>" /><input name="id" type="hidden" class="ed" id="name" value="<?php echo $get; ?>" />
  <br />
 ID <br />
    <input name="id" type="text" id="id" class="ed" onkeypress="return isNumberKey(event)" value="<?php echo $id; ?>" />
    <br />
 January<br />
    <input name="january" type="text" id="january" class="ed" onkeypress="return isNumberKey(event)" value="<?php echo $january; ?>" />
    <br />
 February<br />
    <input type="text" name="february" class="tcal" value="<?php echo $february; ?>" />
  <br />
  March<br />
    <input type="text" name="february" class="tcal" value="<?php echo $march; ?>" />
  <br />
  April<br />
    <input type="text" name="february" class="tcal" value="<?php echo $april; ?>" />
  <br />
 
    <input type="submit" name="Submit" value="save" id="button1" />
 
</form>