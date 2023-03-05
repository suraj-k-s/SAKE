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
//echo $_GET["eid"];
$eid="";
$eid=$_GET["eid"];
$cid="";
$cname="";
 if(isset($_POST["btn1"]))
 {
	 $ctr=$_POST["txta"];
	 $rid=$_POST["rg"];
	 $qid=$_POST["txt_id"];
	 $ins="insert into tbl_answer(qstn_id,answer_content,answer_status)values('".$qid."','".$ctr."','".$rid."')";
	 //echo $ins;
	 if($con->query($ins))
	 {
		  header("Location:Questions.php");
		
	 }
	 else
	 {
		 echo "Failed";
	 }
	 
 }
 if(isset($_GET["did"]))
 {
	 $del="delete  from tbl_answer where answer_id='".$_GET["did"]."'";
	 $con->query($del);
	 header("Location:Answers.php");
 }

?>
<br /><br /><br /><br /><br />
<div align="center" id="tab">
<form id="form1" name="form1" method="post" action="">
  <table width="333" border="1">
    <tr>
      <td width="190">Answer</td>
      <td colspan="2"><label for="txta"></label>
        <label for="txta"></label>
      <textarea name="txta" id="txta" cols="45" rows="5"></textarea>
     <input type="hidden" name="txt_id" value="<?php echo $eid?>" id="rd1" /> 
      </td>
    </tr>
    <tr>
      <td>Status</td>
      <td width="63"><p>
        <label>
          <input type="radio" name="rg" value="True" id="rd1" />
          True</label>
        <br />
      </p></td>
      <td width="58"><p>
        <label>
          <input type="radio" name="rg" value="False" id="rd2" />
          False</label>
        <br />
      </p></td>
    </tr>
    <tr>
      <td colspan="3"><input type="submit" name="btn1" id="btn1" value="Submit" /></td>
    </tr>
  </table>
  <table width="200" border="1">
    <tr>
      <td>Sl No</td>
      <td>Answer</td>
      <td>Status</td>
      <td>Action</td>
    </tr>
    <tr>
      <?php
	$sel="select * from tbl_answer where qstn_id='".$eid."'";
	$row=$con->query($sel);
	$i=0;
	while($data=$row->fetch_assoc())
	{
		$i++;
	?>	
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $data["answer_content"]?></td>
      <td><?php echo $data["answer_status"]?></td>
      <td><a href="Answers.php?did=<?php echo $data["answer_id"]?>">Delete</a></td>
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