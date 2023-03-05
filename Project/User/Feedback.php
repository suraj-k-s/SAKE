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
		$ins = "insert into tbl_feedback(feedback_content,feedback_date,parent_id)values('".$_POST["txtr"]."',curdate(),'".$_SESSION["pid"]."')";
		if($con->query($ins))
		{
			?>
            <script>
			alert("Feedback Sended Successfully");
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
      <td>Feedback</td>
      <td><label for="txtcon"></label>
        <label for="txtr"></label>
      <textarea name="txtr" id="txtr" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="btn1" id="btn1" value="Save" />
      <input type="reset" name="btn2" id="btn2" value="Cancel" /></td>
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