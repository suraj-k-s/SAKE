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
<br /><br /><br /><br /><br />
<div align="center" id="tab">
<table border="1">
  <tr>
    <td>Sl.No</td>
    <td>Child</td>
    <td>Age</td>
    <td>Date</td>
    <td>Action</td>
  </tr>
  <?php
include("../Assets/Connection/Connection.php");



$sel="select * from tbl_quiz where parent_id='".$_SESSION["pid"]."'";
$row=$con->query($sel);
$i=0;


while($data=$row->fetch_assoc())
{
$i++;
?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $data["child_name"] ?></td>
    <td><?php echo $data["child_age"] ?></td>
    <td><?php echo $data["quiz_date"] ?></td>
    <td><a href="Result.php?qid=<?php echo $data["quiz_id"] ?>">Result</a></td>
  </tr>
  <?php
}
  
  ?>
</table>
</div>
</body>
</html>
<?php
  	include("Foot.php");
	ob_flush();
  ?>