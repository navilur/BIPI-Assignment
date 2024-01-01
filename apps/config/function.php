<?php


function getData($sql){
	$a = null;
	$r = mysql_query($sql);
	if(mysql_num_rows($r) > 0){
		while ($data = mysql_fetch_array($r)) {
		$a[] = $data;
		return $a;
				}
	}
	else
	{
		return false;
	}
	

}



function insert($sql){
	if(mysql_query($sql)){
		$_SESSION['lastid']= mysql_insert_id();
		return true;
	}
	return false;
}

function getAutho($sql){
	$r = mysql_query($sql);
	if(mysql_num_rows($r) > 0){
		while($data = mysql_fetch_array($r)){
			$_SESSION['name']= $data['name'];
			$_SESSION['contact']= $data['contact'];
			$_SESSION['image']= $data['image'];
			$_SESSION['type']= $data['type'];
			$_SESSION['admin']= $data['admin'];
		}

		return true;
	}
	return false;

}




?>