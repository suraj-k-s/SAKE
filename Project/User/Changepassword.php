
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
	$sel="select * from tbl_parent where parent_id='".$_SESSION["pid"]."' and parent_password='".$_POST["txt1"]."'";
    $row=$con->query($sel);
    if($data=$row->fetch_assoc())
	{
	
	if($_POST["txt2"]==$_POST["txt3"])
	{
	$up="update tbl_parent set parent_password='".$_POST["txt2"]."' where parent_id='".$_SESSION["pid"]."'";
	echo $up;
    $con->query($up);
	}
	}
}
?>
<br /><br /><br />
<div align="center" id="tab">
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>Current Password</td>
      <td><label for="txt1"></label>
      <input type="text" name="txt1" id="txt1"/></td>
    </tr>
    <tr>
      <td>New Password</td>
      <td><label for="txt2"></label>
      <input type="text" name="txt2" id="txt2" /></td>
    </tr>
    <tr>
      <td>Confirm Password</td>
      <td><label for="txt3"></label>
      <input type="text" name="txt3" id="txt3" /></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="btn1" id="btn1" value="Save" />
      <input type="submit" name="btn2" id="btn2" value="Cancel" /></td>
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
