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
 if(isset($_POST["btn1"]))
 {
	 $qfile=$_FILES["fileqs"]["name"];
	$temp=$_FILES["fileqs"]["tmp_name"];
	move_uploaded_file($temp,"../Assets/Files/QusetionFile/".$qfile);
$p=$_POST["txta"];
$disid=$_POST["lst1"];

if($pid!="")
{
$up="update tbl_questions set qstn_content'".$p."' where qstn_id='".$pid."'";
$con->query($up);
header("Location:Questions.php");
}
else
{
$ins="insert into tbl_questions(qstn_content,disability_id,qstn_file)values('".$p."','".$disid."','".$qfile."')";
echo $ins;
if($con->query($ins))
{
 header("Location:Questions.php");
}
else
{
echo "Failed";
}
 }}
 if(isset($_GET["did"]))
 {
$dl="delete  from tbl_questions where qstn_id='".$_GET["did"]."'";
$con->query( $dl);
header("Location:Questions.php");
 }
 
?>
<br /><br /><br />
<div align="center" id="tab">
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="252" border="1">
    <tr>
      <td width="177">Question Content</td>
      <td width="59"><label for="txta"></label>
        <label for="txta"></label>
        <textarea name="txta" id="txta" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>Disabilities</td>
      <td><label for="lst1"></label>
        <select name="lst1" id="lst1">
          <option>--Select--</option>
          <?php
          $seld="select * from tbl_disabilities";
		  $row1=$con->query($seld);
		  while($data1=$row1->fetch_assoc())
		  {
			  ?>
          <option value="<?php echo $data1["disability_id"]?>"><?php echo $data1["disability_name"]?></option>
          <?php
		  }
		  ?>
        </select></td>
    </tr>
    <tr>
      <td>Question file</td>
      <td>
        <input type="file" name="fileqs" id="fl1" /></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="btn1" id="btn1" value="Save" />
        <input type="reset" name="btn2" id="btn2" value="Cancel" /></td>
    </tr>
  </table>
  <table width="200" border="1">
    <tr>
      <td>Sl.No</td>
      <td>Content</td>
      <td>Disability</td>
      <td> File </td>
      <td>Action</td>
    </tr>
    <?php
$sel="select *from tbl_questions p inner join tbl_disabilities d on d.disability_id=p.disability_id";
$row=$con->query($sel);
$i=0;
while($data=$row->fetch_assoc())
{
$i++;
?>
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $data["qstn_content"]?></td>
      <td><?php echo $data["disability_name"]?></td>
      <td><img src="../Assets/Files/QusetionFile/<?php echo $data["qstn_file"]?>" width="120" height="120" /></td>
      <td><a href="Questions.php?did=<?php echo $data["qstn_id"]?>">Delete</a>/<a href="Answers.php?eid=<?php echo $data["qstn_id"]?>">Status</a></td>
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