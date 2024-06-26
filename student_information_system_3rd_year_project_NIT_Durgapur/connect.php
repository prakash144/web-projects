<?php
	$con=mysql_connect('localhost','','')or die("Unable to connect remote server");
	mysql_select_db('a4808207_quiz',$con) or die("Unable to connect Database");
?>
<?php

	function save_reg($name,$city,$mail,$pwd)
	{
		$sql="insert into reg values('$name','$city','$mail','$pwd')";
		$n=mysql_query($sql);
		return $n;
	}
	
?>