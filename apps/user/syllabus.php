
<div class="notice">
<h1>Syllabus Page</h1>

<hr/>

<table border="0" cellpadding="10" cellspacing="0" width="100%">
	<?php
$sql = "select * from syllbus";
foreach (getData($sql) as $key => $value) {
	echo '<tr>
		<td align="center">'.$value['id'].'</td>
		<td><a href="apps/syllbus/'.$value['filename'].'" target="_blank">'.$value['title'].'</a></td>
		<td><a href="apps/syllbus/'.$value['filename'].'" style="font-size:24px;" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
	</tr>';
}



?>

	





</table>





</div>