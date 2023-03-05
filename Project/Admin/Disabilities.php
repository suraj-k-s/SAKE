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
$cid="";
$cname="";
 if(isset($_POST["btn1"]))
 {
	 $ctr=$_POST["txtd"];
	 if($_POST["txtid"]!="")
	 {
		 $up="update tbl_disabilities set disability_name='".$ctr."' where disability_id='".$_POST["txtid"]."'";
		 echo $up;
		 $con->query($up);
	 header("Location:Disabilities.php");
	 }
	 else
	 {
	 $ins="insert into tbl_disabilities(disability_name)values('".$ctr."')";
	 if($con->query($ins))
	 {
		  header("Location:Disabilities.php");
	 }
	 else
	 {
		 echo "Failed";
	 }
	 }
 }
 if(isset($_GET["did"]))
 {
	 $del="delete  from tbl_disabilities where disability_id='".$_GET["did"]."'";
	 $con->query($del);
	 header("Location:Disabilities.php");
 }
 if (isset($_GET["eid"]))
 {
	 $sel1="select * from tbl_disabilities where disability_id='".$_GET["eid"]."'";
	 $row1=$con->query($sel1);
	 $data1=$row1->fetch_assoc();
	 $cid=$data1["disability_id"];
	 $cname=$data1["disability_name"];
 }
?>
<br /><br /><br />
<div align="center" id="tab">
<form id="form1" name="form1" method="post" action="">
<input type="hidden" name="txtid" value="<?php echo $cid?>" />
  <table width="200" border="1">
    <tr>
      <td>Disability</td>
      <td><label for="txt_disability"></label>
      <input type="text" name="txtd" id="txtd" value="<?php echo $cname?>" /></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="btn1" id="btn1" value="Save" />
      <input type="submit" name="btn2" id="btn2" value="Cancel" /></td>
    </tr>
  </table>
  <table width="217" border="1">
    <tr>
      <td width="43">Sl No</td>
      <td width="81">Disability Name</td>
      <td width="71">Action</td>
    </tr>
     <?php
	$sel="select * from tbl_disabilities";
	$row=$con->query($sel);
	$i=0;
	while($data=$row->fetch_assoc())
	{
		$i++;
	?>	
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $data["disability_name"]?></td>
      <td><a href="Disabilities.php?did=<?php echo $data["disability_id"]?>">Delete</a>/<a href="Disabilities.php?eid=<?php echo $data["disability_id"]?>">Edit</a></td>
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