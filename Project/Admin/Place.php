
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
$pid="";
$pname="";
$disid="";
 if(isset($_POST["btns"]))
 {
	 $esid=$_POST["txtid"];
$p=$_POST["txtp"];
$dis=$_POST["ddldistrict"];
if($esid!="")
{
$up="update tbl_place set place_name='".$p."', district_id='".$dis."' where place_id='".$esid."'";
$con->query($up);
header("Location:Place.php");
}
else
{
$ins="insert into tbl_place(place_name,district_id)values('".$p."','".$dis."')";
if($con->query($ins))
{
 header("Location:Place.php");
}
else
{
echo "Failed";
}
 }}
 if(isset($_GET["did"]))
 {
$dl="delete  from tbl_place where place_id='".$_GET["did"]."'";
$con->query( $dl);
header("Location:Place.php");
 }
 if(isset($_GET["eid"]))
 {
$sel="select * from tbl_place where place_id='".$_GET["eid"]."'";
$row=$con->query($sel);
$data=$row->fetch_assoc();
$pid=$data["place_id"];
$pname=$data["place_name"];
$disid=$data["district_id"];

 }
?>
<br /><br /><br />
<div align="center" id="tab">
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>District</td>
      <td><label for="txtp"></label>
        <label for="list"></label>
        <select name="ddldistrict" id="list">
          <option>--Select--</option>
          <?php
          $seld="select * from tbl_district";
		  $row1=$con->query($seld);
		  while($data1=$row1->fetch_assoc())
		  {
			  ?>
          <option <?php if($data1["district_id"]==$disid){ echo "Selected";}?> value="<?php echo $data1["district_id"]?>"><?php echo $data1["district_name"]?></option>
          <?php
		  }
		  ?>
         </select>
      </td>
    </tr>
    <tr>
      <td>Place</td>
       <td><label for="txtp"></label>
       <input type="hidden" name="txtid" value="<?php echo $pid ?>" />
      <input type="text" name="txtp" id="txtp" value="<?php echo $pname?>" /></td>
    </tr>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="btns" id="btns" value="Save" />        
      <input type="submit" name="btnc" id="btnc" value="Cancel" /></td>
    </tr>
  </table>
  <table width="200" border="1">
    <tr>
      <td>SL.No</td>
      <td>Place</td>
      <td>District</td>
      <td>Action</td>
    </tr>
    <?php
$sel="select *from tbl_place p inner join tbl_district d on d.district_id=p.district_id";
$row=$con->query($sel);
$i=0;
while($data=$row->fetch_assoc())
{
$i++;
?>
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $data["place_name"]?></td>
      <td><?php echo $data["district_name"]?></td>
      <td><a href="Place.php?did=<?php echo $data["place_id"]?>">Delete</a>/<a href="Place.php?eid=<?php echo $data["place_id"]?>">Edit</a></td>
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