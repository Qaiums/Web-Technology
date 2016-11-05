<br/><br/><br/><br/>
 <center><h2> Successfully Registred...</h2>
 <br/><br/>
 <input type="button" onclick="location.href='login.php';" value=" Goto Login "/></center>
<?php 
session_start();
	
	$firstname=$_POST['fname'];
	$lastname=$_POST['lname'];
	$email=$_POST['mail'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$phone=$_POST['pno'];
	$city=$_POST['city'];
	$pw=$_POST['pass'];
	$pp=$_POST['myfile'];

	$conn= odbc_connect('phporacledata','phporacle','qaium29');

	if (!$conn)
	{
		die ('Error connection !!!');
	}


	$plsql= "insert into userinfo (serial,firstname,lastname,email,mobile,dateofbirth,gender,address,city,pass,profilepicture)
             values(serial.nextval,'".$_POST['fname']."','".$_POST['lname']."','".$_POST['mail']."','".$_POST['pno']."','".$_POST['dob']."','".$_POST['gender']."','".$_POST['address']."','".$_POST['city']."','".$_POST['pass']."',
                 '".$_POST['myfile']."') ";

    //echo $plsql;
    $result=odbc_exec($conn, $plsql);
    //echo $result;



	odbc_close($conn);

?>