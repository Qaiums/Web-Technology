<?php
$conn= odbc_connect('phporacledata','phporacle','qaium29');

	if (!$conn)
	{
		die ('Error connection !!!');
	}


	$sql= "SELECT * FROM userinfo WHERE lastname='".$_POST['uname']."'";

	$result=odbc_exec($conn, $sql);
	//echo 'DEPARTMENT_ID-------DEPARTMENT_NAME<br/>';

	while ($row=odbc_fetch_array($result)) 
	{

	echo $row['FIRSTNAME'], '--------',$row['LASTNAME'],'<br/>';
	}

	odbc_close($conn);
	?>