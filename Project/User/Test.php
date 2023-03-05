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



$sql = "select * from tbl_questions";
$temp = array();
$result = $con->query($sql);
$count = mysqli_num_rows($result);
while($row=$result->fetch_assoc()) {
	
    $temp[] = $row;
	
}



if(isset($_POST["btn_reset"]))
{    
	$_SESSION['count']=0;
	header("Location:Test.php");
}



if(isset($_POST["btn_submit"]))
{
	
	//Insert Query
	$sel="SELECT max(quiz_id) as qid from tbl_quiz where parent_id='".$_SESSION["pid"]."'";
	$row=$con->query($sel);
	$data=$row->fetch_assoc();
	
	$qid=$data["qid"];
	
	$qstnid=$_POST["txthidden"];
	$ans=$_POST["answer"];
	$stat = "false";
	$sqlqry = "SELECT * FROM tbl_answer WHERE answer_status='true' AND qstn_id='".$qstnid."' ";
	$rowa=$con->query($sqlqry);
	$dataa=$rowa->fetch_assoc();
	$dat = $dataa["answer_id"];
	if($ans==$dat)
	{
		$stat = "true";
	}
	
	
	$ins="insert into tbl_questionanswer(qstn_status,qstn_id,answer_id,quiz_id,qstn_time)values('".$stat."','".$qstnid."','".$ans."','".$qid."',curtime())";
	if($con->query($ins))
	{
	
	
  
			if(isset($_SESSION['count']))
			{
				if($_SESSION["count"] < $count-1 )
				{
					$_SESSION['count'] = $_SESSION['count']+1;
					//header("Location:Test.php");
				}
				else 
				{
						?>
						<script>
						alert('Quize Completed See The Result');
						window.location="Result.php?qid=<?php echo $qid; ?>";
						</script>
						<?php

				}
			}
	
	}	
}
else
	{
		$_SESSION['count']=0;
		
	}



$enCode = json_encode($temp);

$deCode = json_decode($enCode, true);







	?>
    
  
 <body>
<br /><br /><br /><br /><br />
<div align="center" id="tab">   
    
    <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="200" border="1">
    <tr>
    <input type="hidden" name="txthidden" value="<?php echo $deCode[$_SESSION['count']]["qstn_id"];?>">
    	<td colspan="2"><p style="width:250px;text-align:center"> <img src="../Assets/Files/QusetionFile/<?php echo $deCode[$_SESSION['count']]["qstn_file"];?> "  /></p><br />
        <p style="width:500px"><?php echo $deCode[$_SESSION['count']]["qstn_content"];?></p>
    
    </tr>
    <?php
	$i=0;
	$sel1=" select * from tbl_answer where qstn_id='".$deCode[$_SESSION['count']]['qstn_id']."'";
	$row1=$con->query($sel1);
	while($data1=$row1->fetch_assoc())
	{
		$i++;

?>

    
    <tr>
      <td><?php echo $i?></td>
      <td><input type="radio" name="answer" id="answer" value="<?php echo $data1["answer_id"] ;?>" />
      
      <?php echo $data1["answer_content"]?></td>
    </tr>
    
    <?php
}

	?>
    <tr>
      <td><input type="submit" name="btn_reset" id="btn_reset" value="Reset" /></td>
      
      <td>
      <input type="submit" name="btn_submit" id="btn_submit" value="<?php if($_SESSION['count']==$count - 1){ echo "Complete"; }else{ echo "Next"; }?>" />
     
      
      
      
      
      </td>
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