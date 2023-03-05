

<?php
	ob_start();
	include("Head.php");

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<script src="../Assets/JQ/jQuery.js"></script>

<script>
function getPlace(did)
{

	$.ajax({
	  url:"../Assets/Ajaxpages/Ajaxplace.php?did="+did,
	  success: function(html){
		$("#listp").html(html);
	  }
	});
}
</script>
<?php
include("../Assets/Connection/Connection.php");
if(isset($_POST["btnreg"]))
{
	
	$name=$_POST["txtname"];
	$contact=$_POST["txtcontact"];
	$email=$_POST["txtemail"];
	$addr=$_POST["txtaddress"];
	$place=$_POST["listp"];
	
	$photo=$_FILES["Fphoto"]["name"];
	$temp=$_FILES["Fphoto"]["tmp_name"];
	
	$proof=$_FILES["Fproof"]["name"];
	$temp1=$_FILES["Fproof"]["tmp_name"];
	
	$pass=$_POST["txtpass"];
	$cpass=$_POST["txtcpass"];
	if($pass==$cpass)
	{
		
	$ins="insert into tbl_parent(parent_name,parent_contact,parent_email,parent_photo,parent_proof,parent_address,place_id,parent_password)values('".$name."','".$contact."','".$email."','".$photo."','".$proof."','".$addr."','".$place."','".$pass."')";
	
	if($con->query($ins))
	 {
		  header("Location:Newparent.php");
	 }
	}
}
?>
<br /><br /><br /><br /><br />
<div align="center" id="tab">
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="339" border="1">
    <tr>
      <td width="159">Name</td>
      <td width="168"><label for="txtname"></label>
      <input type="text" name="txtname" id="txtname" /></td>
    </tr>
    <tr>
      <td>Contact</td>
      <td><label for="txtcontact"></label>
      <input type="text" name="txtcontact" id="txtcontact" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="txtemail"></label>
      <input type="text" name="txtemail" id="txtemail" /></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><label for="txtaddress"></label>
      <input type="text" name="txtaddress" id="txtaddress" /></td>
    </tr>
    <tr>
      <td>District</td>
      <td><label for="listd"></label>
        <select name="listd" id="listd" onchange="getPlace(this.value)">
          <option>--Select--</option>
          <?php
          $seld="select * from tbl_district";
		  $row1=$con->query($seld);
		  while($data1=$row1->fetch_assoc())
		  {
			  ?>
          <option value="<?php echo $data1["district_id"]?>"><?php echo $data1["district_name"]?></option>
          <?php
		  }
		  ?>
      </select></td>
    </tr>
    <tr>
      <td>Place</td>
      <td><label for="listp"></label>
        <select name="listp" id="listp">
          <option>--Select--</option>
           
      </select></td>
    </tr>
    <tr>
      <td>Photo</td>
      <td><label for="Fphoto"></label>
      <input type="file" name="Fphoto" id="fphoto" /></td>
    </tr>
    <tr>
      <td>Proof</td>
      <td><label for="Fproof"></label>
      <input type="file" name="Fproof" id="fproof" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="txtpass"></label>
      <input type="text" name="txtpass" id="txtpass" /></td>
    </tr>
    <tr>
      <td>Confirm Password</td>
      <td><label for="txtcpass"></label>
      <input type="text" name="txtcpass" id="txtcpass" /></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="btnreg" id="btnreg" value="Register" />
      <input type="submit" name="btncan" id="btncan" value="Cancel" /></td>
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