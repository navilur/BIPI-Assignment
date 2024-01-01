

<?php

if(isset($_POST['btn'])){
$title = $_POST['title'];
$file = $_FILES['file']['name'];

$ext = explode(".", $file);


if($ext[1] == 'pdf' || $ext[1] == 'PDF')
{
	$sql = "insert into result(title,filename) values('".$title."','".$file."')";
	if(insert($sql)){
		echo 'File Uploaded Successfully......';
		$sp =$_FILES['file']['tmp_name'];
		$dp ='apps/resultfile/'.$_FILES['file']['name'];
		move_uploaded_file($sp,$dp);
	}
	else
	{
		echo 'File Uploaded fail......';
	}
}
else
{
	echo 'invalid File Formate';
}




}

?>







<div class="">
<form action="" method="post" enctype="multipart/form-data">
<fieldset>
	<legend>Result INFO</legend>
	<label>Result Title</label><br/>
	<input type="text" name="title" required="required"><br/><br/>

	<label>Result File</label><br/>
	<input type="file" name="file"><br/><br/>

	<input type="submit" name="btn" value="Uploaded File"/>

</fieldset>

</form>


</div>


