<?php
ob_start();
include("SessionValidator.php");
include("Head.php");
include("../Assets/Connection/Connection.php");
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST["btn1"]))
{
	$up="update tbl_complaint set complaint_reply='".$_POST["txtr"]."',complaint_status='1' where complaint_id ='".$_POST["txthidden"]."'";
	if($con->query($up))
	{
		?>
        <script>
        alert("Reply Sended");
        location.href="Viewcomplaint.php";
		</script>
        <?php
	}
	else
	{
		?>
        <script>
        alert("Failed");
       
		</script>
        <?php
	}
	
}
?>
<br /><br /><br />
<div align="center" id="tab">
<form id="form1" name="form1" method="post" action="">
  <table width="338" border="1">
    <tr>
      <td>Reply Content</td>
      <td><label for="txtcon"></label>
        <label for="txtr"></label>
        <input type="hidden" name="txthidden" value="<?php echo $_GET["eid"];?>" />
      <textarea name="txtr" id="txtr" cols="45" rows="5"></textarea></td>
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