
<div class="notice">
<h1>Result Page</h1>

<hr/>

<table border="0" cellpadding="10" cellspacing="0" width="100%">
	<tr>
		<th width="10%">Sl</th>
		<th width="50%">Syllabus</th>
		<th width="40%"></th>
	</tr>


<?php
$sql = "select * from result";
foreach (getData($sql) as $key => $value) {
	echo '<tr>
		<td align="center">'.$value['id'].'</td>
		<td><a href="apps/resultfile/'.$value['filename'].'" target="_blank">'.$value['title'].'</a></td>
		<td><a href="apps/resultfile/'.$value['filename'].'" style="font-size:24px;" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
	</tr>';
}



?>







	


	





</table>





</div>