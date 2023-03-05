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
 <body>
<br /><br /><br /><br /><br />
<div align="center" id="tab">  
<form id="form1" name="form1" method="post" action="">
  <table border="1">
    <tr>
    	<td>Sl.No</td>
        <td>Question</td>
        <td>Answer</td>
        <td>Status</td>
        <td>Time</td>
    </tr>
    <?php
include("../Assets/Connection/Connection.php");



$sel="select *from tbl_questionanswer q inner join tbl_answer a on q.answer_id =a.answer_id  inner join tbl_questions qt on q.qstn_id=qt.qstn_id where quiz_id='".$_GET["qid"]."'";
$row=$con->query($sel);
$i=0;
while($data=$row->fetch_assoc())
{
$i++;
?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $data["qstn_content"]?></td>
        <td><?php echo $data["answer_content"]?></td>
        <td><?php echo $data["answer_status"]?></td>
        <td><?php echo $data["qstn_time"]?></td>
    </tr>
    <?php
    }
	$sql = "SELECT * FROM tbl_questionanswer qa INNER JOIN tbl_answer a ON a.answer_id=qa.answer_id INNER JOIN tbl_questions q ON q.qstn_id=qa.qstn_id INNER JOIN tbl_disabilities d ON d.disability_id=q.disability_id WHERE qa.quiz_id='".$_GET["qid"]."' AND qa.qstn_status='false' GROUP BY disability_name ORDER BY COUNT(*) DESC LIMIT 1";
	$rowq=$con->query($sql);
if($dataq=$rowq->fetch_assoc())
{
	?>
    <tr>
    	<td colspan="5" align="right">
        	Chance For <?php echo $dataq["disability_name"] ?>
        </td>
    </tr>
    <?php
}
else
{
	?>
    <tr>
    	<td colspan="5" align="right">
        	Positive Result ☺
        </td>
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