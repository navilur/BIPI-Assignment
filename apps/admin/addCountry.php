
<?php
$ename = "";
if(isset($_POST['btn'])){
	$name =  $_POST['cname'];
	$command = " insert into country(name) values('".$name."')";
	

	if($name != ""){
		if(mysql_query($command)){
		echo '<span style="color:blue;font-size:16px;font-weight:bolder;margin-left:100px;">Data Saved Successfully.......</span>';
		}
		else
		{
			echo '<span style="color:red;font-size:16px;font-weight:bolder;margin-left:100px;">Data Saved Fail.......</span>';
		}
	}
	else
	{
		$ename = '<span style="color:red;font-size:30px;">*</span>';
	}


}


?>









<div class="admin-panel-form">
<form action="" method="post">
	<fieldset>
	<legend>Country INFO</legend>

	<label>Name</label><br>
	<input type="text" name="cname" placeholder="Enter here.......">
	<?php echo $ename;?>
	<br><br>
	<input type="submit" name="btn" value="Data Saved">

	</fieldset>
</form>

</div>