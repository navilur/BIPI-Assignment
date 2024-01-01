

<?php

if(isset($_POST['btn'])){
	$year = $_POST['year'];
	$reg = $_POST['reg'];

	$sql = "select * from student where reg = '".$reg."' and year ='".$year."'";

if(getData($sql)){
	echo '<table border="1" cellpadding="10" cellspacing="0">';
	foreach (getData($sql) as $value) {
		echo '<tr>
			<td>Name</td>
			<td>:</td>
			<td>'.$value['name'].'</td>
		</tr>';


		echo '<tr>
			<td>Contact</td>
			<td>:</td>
			<td>'.$value['contact'].'</td>
		</tr>';
		
	}


echo '</table>';
}
else
{
	echo '<h1>Result not Found</h1>';
}

}

?>