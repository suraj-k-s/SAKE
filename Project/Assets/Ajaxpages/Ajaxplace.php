<option>---select---</option>
<?php
include("../Connection/Connection.php");
	$sel="select * from tbl_place where district_id='".$_GET["did"]."'";
	$row=$con->query($sel);
	while($data1=$row->fetch_assoc())
	{
	?>
	<option value="<?php echo $data1["place_id"]?>"><?php echo $data1["place_name"]?></option>
              <?php
		  }
		  ?>
		  ?> 