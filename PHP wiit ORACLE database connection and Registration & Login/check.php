<center>
<?php
	session_start();
	//$user = $result;
	//$pass= $result2;
	$username=$_POST['uname'];
	$password=$_POST['pass'];
	$v=0;
$conn= odbc_connect('phporacledata','phporacle','qaium29');

	if (!$conn)
	{
		die ('Error connection !!!');
	}


	$plsql= "SELECT * FROM userinfo WHERE LastName='".$_POST['uname']."' AND Pass='".$_POST['pass']."'";

	//echo $plsql;
	echo nl2br("\n");

	

	$result=odbc_exec($conn, $plsql);


	if ($row =odbc_fetch_array($result))
	{
     echo "<h3>Welcome to your account.</h3>";
   
	echo "Name :     ",$row['FIRSTNAME'],' ',$row['LASTNAME'];
	echo nl2br("\n");
	echo "Email :    ",$row['EMAIL'];
	echo nl2br("\n");
	echo "Mobile :   ",$row['MOBILE'];
	echo nl2br("\n");
	echo "Date Of Birth :    ",$row['DATEOFBIRTH'];
	echo nl2br("\n");
	echo "Address :   ",$row['ADDRESS'];
	echo nl2br("\n");
	echo "City :    ",$row['CITY'];
	echo nl2br("\n");
	echo "Password :    ",$row['PASS'];
	echo nl2br("\n");
	echo "Profile picture :    ",$row['PROFILEPICTURE'];
	echo nl2br("\n");
	echo "Gender :    ",$row['GENDER'];
	echo nl2br("\n");
	echo "ID :    ",$row['SERIAL'];
    
   
	}

	else
	{
		echo" Wrong username or password !!!";
	}
	

	echo"\n";
	///echo $result ;
    odbc_close($conn);
		?>
		</center>
		
	