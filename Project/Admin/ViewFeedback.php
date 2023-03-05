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


<br /><br /><br />
<div align="center" id="tab">
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>Sl No</td>
      <td>Parent</td>
      <td>Content</td>
      <td>Date</td>
    </tr>
    </tr>
  <?php
include("../Assets/Connection/Connection.php");



$sel="select * from tbl_feedback c inner join tbl_parent p on c.parent_id=p.parent_id";
$row=$con->query($sel);
$i=0;

while($data=$row->fetch_assoc())
{
$i++;
?>
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $data["parent_name"]?></td>
      <td><?php echo $data["feedback_content"]?></td>
      <td><?php echo $data["feedback_date"]?></td>
    </tr>
    <?php
}
?>
  </table>
</form>
</div>
</body>
</html>
<?php
				include("Foot.php");
				ob_flush();
				?>