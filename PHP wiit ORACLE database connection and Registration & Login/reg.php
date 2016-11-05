

		<?php

		?>

		<center>
		<form name="myForm" action="checkreg.php" method="post">
		<h1>Your info to send</h1>
		<pre>
		First Name : <input value="" type="text" name="fname" required/><br>
      Last Name & Username : <input value="" type="text" name="lname" required/><br>
		 Date Of Birth : <input value="" type="date" name="dob" required/><br>
		 <input type="radio" name="gender" value="male" required />male  <input type="radio" name="gender" value="female" required />female <br>
	      Phone Number : <input value="" type="text" name="pno"/><br>
		      Email : <input value="" type="text" name="mail" required/> <br>
		    Address : <input value="" type="text" name="address" required/> <br>
		 Your City : <select  name="city" required><br>
			<option value="none">Select City</option>
			<option value="dhaka">Dhaka</option>
			<option value="chittagong">Chittagong</option>
		</select><br>
		   Password  : <input type="password" name="pass" required />  <br>
	  Confirm Password : <input type="password" name="pass2" required /><br>
		    Profile Picture: <input type="file" name="myfile" /><br>
		 <input type="submit"  value="Login"/><br>
		</pre>
		</form>
		</center>
