<?php
	ob_start();
	include("SessionValidator.php");
	include("Head.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("../Assets/Connection/Connection.php");

if(isset($_POST["btn1"]))
{
	
	$name=$_POST["txtn"];
	$age=$_POST["txtc"];
	$date1=date("Y/m/d");
	
	$ins="insert into tbl_quiz(child_name,child_age,quiz_date,parent_id)values('".$name."','".$age."','".$date1."','".$_SESSION["pid"]."')";

	if($con->query($ins))
	 {
		$_SESSION["ins"]=$ins;
		header("Location:../User/Test.php");
	 }
}
?>
<br /><br /><br /><br /><br />
<div align="center" id="tab">
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="200" border="1">
    <tr>
      <td>Name</td>
      <td><label for="txtn"></label>
      <input type="text" name="txtn" id="txtn" /></td>
    </tr>
    <tr>
      <td>Age</td>
      <td><label for="txtc"></label>
      <input type="text" name="txtc" id="txtc" /></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="btn1" id="btn1" value="Attend" />
   </td>
    </tr>
  </table>
</form>
</div>
</body>
</html>
<?php
  	include("Foot.php");
	ob_flush();
  ?>