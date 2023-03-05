

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

$sel="select * from tbl_parent where parent_id='".$_SESSION["pid"]."'";
$row=$con->query($sel);
$data=$row->fetch_assoc();
?>
<br /><br /><br /><br /><br />
<div align="center" id="tab">
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>Name</td>
      <td><label for="txtn"></label>
      <?php echo $data["parent_name"]?></td>
    </tr>
    <tr>
      <td>Contact</td>
      <td><label for="txtc"></label>
      <?php echo $data["parent_contact"]?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="txte"></label>
      <?php echo $data["parent_email"]?></td>
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