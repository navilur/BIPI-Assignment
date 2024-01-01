<?php

//registration for Student
if(isset($_POST['btn_Student'])){
	$name= $_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];
	$cityid=$_POST['cityid'];
	$countryid=$_POST['countryid'];
	$image = $_FILES['image']['name'];
	$nid=$_POST['nid'];
	$blood=$_POST['blood'];
	$education=$_POST['education'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$account=$_POST['account'];
	$roll=$_POST['roll'];
	$reg=$_POST['reg'];
	$session=$_POST['session'];
	$semister=$_POST['semister'];
	$dateofbirth=$_POST['dateofbirth'];
	$year=$_POST['year'];

if(isset($_POST['schoolname'])){
	$schoolname = $_POST['schoolname'];
	$sgroup = $_POST['sgroup'];
	$passingyear = $_POST['passingyear'];
	$gpa = $_POST['gpa'];

}





$sql = "insert into student(name,email,password,contact,address,gender,cityid,countryid,image,nid,blood,fname,mname,BankAccount,roll,reg,session,semister,dateofbirth,year) values('".$name."','".$email."','".$password."','".$contact."','".$address."','".$gender."',".$cityid.",".$countryid.",'".$image."',".$nid.",'".$blood."','".$fname."','".$mname."','".$account."',".$roll.",".$reg.",'".$session."','".$semister."','".$dateofbirth."','".$year."')";



if(insert($sql)){

$sql = "insert into ssc(schoolname,passingyear,gpa,sgroup,studentid) values('".$schoolname."','".$passingyear."','".$gpa."','".$sgroup."',".$_SESSION['lastid'].")";
	insert($sql);
	

	echo '<div style="color:green;border:1px solid green;padding:10px;">Registration Successfully.......</div>';
	$sp = $_FILES['image']['tmp_name'];
	$dp = "apps/studentimg/".$_FILES['image']['name'];
	move_uploaded_file($sp, $dp);

}
else
{
	echo mysql_error();
}




}





//registration for teacher
if(isset($_POST['btn_teacher'])){
	$name= $_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];
	$cityid=$_POST['cityid'];
	$countryid=$_POST['countryid'];
	$image = $_FILES['image']['name'];
	$nid=$_POST['nid'];
	$blood=$_POST['blood'];
	$study=$_POST['study'];
	$type=$_POST['type'];


$sql = "insert into teacher(name,email,password,contact,address,gender,cityid,countryid,image,nid,blood,study,type,admin) values('".$name."','".$email."','".$password."','".$contact."','".$address."','".$gender."',".$cityid.",".$countryid.",'".$image."',".$nid.",'".$blood."','".$study."','".$type."','U')";



if(insert($sql)){
	echo '<div style="color:green;border:1px solid green;padding:10px;">Registration Successfully.......</div>';
	$sp = $_FILES['image']['tmp_name'];
	$dp = "apps/teacherimg/".$_FILES['image']['name'];
	move_uploaded_file($sp, $dp);

}
else
{
	echo mysql_error();
}




}






//start employee ..........

if(isset($_POST['btn_employee'])){
	$name= $_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];
	$cityid=$_POST['cityid'];
	$countryid=$_POST['countryid'];
	$image = $_FILES['image']['name'];
	$nid=$_POST['nid'];
	$blood=$_POST['blood'];
	$study=$_POST['study'];
	$type=$_POST['type'];


$sql = "insert into employee(name,email,password,contact,address,gender,cityid,countryid,image,nid,blood,study,type) values('".$name."','".$email."','".$password."','".$contact."','".$address."','".$gender."',".$cityid.",".$countryid.",'".$image."',".$nid.",'".$blood."','".$study."','".$type."')";



if(insert($sql)){
	echo '<div style="color:green;border:1px solid green;padding:10px;">Registration Successfully.......</div>';
	$sp = $_FILES['image']['tmp_name'];
	$dp = "apps/employeeimg/".$_FILES['image']['name'];
	move_uploaded_file($sp, $dp);

}
else
{
	echo mysql_error();
}




}




?>









<?php

if(isset($_POST['btn_login'])){

	$username = $_POST['username'];
	$password = $_POST['password'];

	if(isset($_POST['selectlogin'])){
	$selectlog = $_POST['selectlogin'];
	}


	if(isset($_POST['selectlogin'])){

		if($selectlog == "Teacher"){
			$sql = "select * from teacher where email = '".$username."' and password ='".$password."'";
			if(getAutho($sql)){
				$_SESSION['Authontication'] = 'teacher';
				echo '<script>
				window.location = "http://localhost/barisal/admin.php"
				</script>';
			}
			else
			{
				echo '<div style="color:red;border:1px solid red;padding:10px;margin:20px auto;width:70%;">Username and password does not match</div>';
			}



		}



		if ($selectlog == "Student") {
			$sql = "select * from student where email = '".$username."' and password ='".$password."'";
			if(getAutho($sql)){
				$_SESSION['Authontication'] = 'student';

				echo '<script>
				window.location = "http://localhost/barisal/admin.php"
				</script>';
			}
			else
			{
				echo '<div style="color:red;border:1px solid red;padding:10px;margin:20px auto;width:70%;">Username and password does not match</div>';
			}
		}




		if($selectlog == "Employee"){
			$sql = "select * from employee where email = '".$username."' and password ='".$password."'";
			if(getAutho($sql)){
				$_SESSION['Authontication'] = 'employee';
				echo '<script>
				window.location = "http://localhost/barisal/admin.php"
				</script>';
			}
			else
			{
				echo '<div style="color:red;border:1px solid red;padding:10px;margin:20px auto;width:70%;">Username and password does not match</div>';
			}
		}


	}
	else
	{
		echo '<div style="color:red;border:1px solid red;padding:10px;margin:20px auto;width:70%;">Pls Select Radio button</div>';
	}


}

?>




<div class="admin-login-left">
	<form action="" method="post">
	<fieldset>
		<legend>Login INFO</legend>
		<div class="user-select">
		<input type="radio" name="selectlogin" value="Teacher">Teacher
		<input type="radio" name="selectlogin" value="Student">Student
		<input type="radio" name="selectlogin" value="Employee">Employee
		</div>
		<br/><br/>
			<lable>Username</lable><br/>
			<input type="text" name="username" placeholder="Enter here............"/> <br/><br/>
			<lable>Password</lable><br/>
			<input type="password" name="password" placeholder="Enter here............"/> <br/><br/>
			<input type="submit" name="btn_login" value="Log In"/>
	</fieldset>
	</form>
</div>


<div class="admin-login-right">

<div class="user-select">
		<input type="radio" name="regis" value="teachar" id="teacher">Teacher
		<input type="radio" name="regis" value="student" id="student">Student
		<input type="radio" name="regis" value="Employee" id="Employee">Employee
</div>


<!--start Stud-->
<div id="studnet_reg">
<form action="" method="post" enctype="multipart/form-data">
   
<fieldset>
	<legend>studnet Registration INFO</legend>
		



    <table>

	<tr>
		<td>Name:</td>
		<td>:</td>
		<td><input type="text" name="name" placeholder="Enter here...."/></td>		
	</tr>

	
	<tr>
		<td>Email</td>
		<td>:</td>
		<td><input type="text" name="email" placeholder="Enter here...."/></td>		
	</tr>
	
	
	<tr>
		<td>Password</td>
		<td>:</td>
		<td><input type="password" name="password" placeholder="Enter here...."/></td>		
	</tr>
	
	
	<tr>
		<td>Contact</td>
		<td>:</td>
		<td><input type="text" name="contact" placeholder="Enter here...."/></td>		
	</tr>

	<tr>
		<td>Roll:</td>
		<td>:</td>
		<td><input type="number" name="roll" placeholder="Enter here...."/></td>		
	</tr>

	
	<tr>
		<td>Reg</td>
		<td>:</td>
		<td><input type="number" name="reg" placeholder="Enter here...."/></td>		
	</tr>
	
	
	<tr>
		<td>Father Name</td>
		<td>:</td>
		<td><input type="text" name="fname" placeholder="Enter here...."/></td>		
	</tr>
	
	
	<tr>
		<td>Mother Name</td>
		<td>:</td>
		<td><input type="text" name="mname" placeholder="Enter here...."/></td>		
	</tr>

	<tr>
		<td>Session</td>
		<td>:</td>
		<td><input type="text" name="session" placeholder="Enter here...."/></td>		
	</tr>
	
	
	<tr>
		<td>Semister</td>
		<td>:</td>
		<td><input type="text" name="semister" placeholder="Enter here...."/></td>		
	</tr>
	
	
	<tr>
		<td>Date of Birth</td>
		<td>:</td>
		<td><input type="text" id="datepicker" name="dateofbirth" placeholder="Enter here...."/></td>		
	</tr>

	
	
	<tr>
		<td>N id</td>
		<td>:</td>
		<td><input type="number" name="nid" placeholder="Enter here...."/></td>		
	</tr>
	
	
	<tr>
		<td>Blood</td>
		<td>:</td>
		<td><input type="text" name="blood" placeholder="Enter here...."/></td>		
	</tr>



	<tr>
		<td>Bank Acc</td>
		<td>:</td>
		<td><input type="number" name="account" placeholder="Enter here...."/></td>		
	</tr>


	
	<tr>
		<td>Addres</td>
		<td>:</td>
		<td><textarea name="address"></textarea></td>		
	</tr>
	
	<tr>
		<td>Gender</td>
		<td>:</td>		
		<td>
			<input type="radio" name="gender" value="male"/>Male
			<input type="radio" name="gender" value="female"/>Female		</td>		
	</tr>
	
	
	<tr>
		<td>Eduction</td>
		<td>:</td>
		<td>
			<input type="checkbox" id ="btn_SSC" name="education" value="SSC"/>SSC
			<input type="checkbox" id ="btn_HSC" name="education" value="HSC"/>HSC
			</td>		
	</tr>


	<tr>
		<td></td>
		<td></td>
		<td>
		<div id="SSC">
				<input type="text" name="schoolname" placeholder="Enter School Name.."><br/>
				<input type="text" name="passingyear" placeholder="enter passing year.."><br/>
				<input type="text" name="gpa" placeholder="enter GPA..."><br/>
				<input type="text" placeholder="enter Group name.." name="sgroup"><br/>
		</div></td>
	</tr>
	
	
	
	<tr>
		<td>Country</td>
		<td>:</td>
		<td>
			<select name="countryid">
				<option value="0">Select</option>				
				<?php
				$sql = "select * from country";
				foreach (getData($sql) as  $value) {
					echo '<option value="'.$value['id'].'">'.$value['name'].'</option>';
				}

				?>
				
			</select></td>		
	</tr>
	
	
	<tr>
		<td>City</td>
		<td>:</td>
		<td>
			<select name="cityid">
				<option value="0">Select</option>				
				<?php
				$sql = "select * from city";
				foreach (getData($sql) as  $value) {
					echo '<option value="'.$value['id'].'">'.$value['name'].'</option>';
				}

				?>
								
			</select>		</td>		
	</tr>


	<tr>
		<td>Year</td>
		<td>:</td>
		<td>
			<select name="year">				
				<option value="2016">2016</option>
				<option value="2015">2015</option>
				<option value="2014">2014</option>
				<option value="2013">2013</option>
				<option value="2012">2012</option>
				<option value="2011">2011</option>
			</select>		</td>		
	</tr>


	<tr>
		<td>Image</td>
		<td>:</td>
		<td><input type="file" name="image">
			</td>		
	</tr>
	
	<tr>
		<td><input type="submit" name="btn_Student" value="Register"/></td>
	</tr>

</table>

</fieldset>

</form>
</div>

<!--end Stud-->







<!--start Stud-->
<div id="Teacher_reg">
<form action="" method="post" enctype="multipart/form-data">
   
<fieldset>
	<legend>Teacher Registration INFO</legend>
		



    <table>

	<tr>
		<td>Name:</td>
		<td>:</td>
		<td><input type="text" name="name" placeholder="Enter here...."/></td>		
	</tr>

	
	<tr>
		<td>Email</td>
		<td>:</td>
		<td><input type="text" name="email" placeholder="Enter here...."/></td>		
	</tr>
	
	
	<tr>
		<td>Password</td>
		<td>:</td>
		<td><input type="text" name="password" placeholder="Enter here...."/></td>		
	</tr>
	
	
	<tr>
		<td>Contact</td>
		<td>:</td>
		<td><input type="text" name="contact" placeholder="Enter here...."/></td>		
	</tr>


	<tr>
		<td>Addres</td>
		<td>:</td>
		<td><textarea name="address"></textarea></td>		
	</tr>
	
	<tr>
		<td>Gender</td>
		<td>:</td>		
		<td>
			<input type="radio" name="gender" value="male"/>Male
			<input type="radio" name="gender" value="female"/>Female		</td>		
	</tr>


	





	
	<tr>
		<td>N id</td>
		<td>:</td>
		<td><input type="number" name="nid" placeholder="Enter here...."/></td>		
	</tr>
	
	
	<tr>
		<td>Blood</td>
		<td>:</td>
		<td><input type="text" name="blood" placeholder="Enter here...."/></td>		
	</tr>



	<tr>
		<td>Study</td>
		<td>:</td>
		<td><input type="text" name="study" placeholder="Enter here...."/></td>		
	</tr>


	

	
	
	<tr>
		<td>Type</td>
		<td>:</td>
		<td>
			<input type="text" name="type" placeholder="Enter here........" />
			</td>		
	</tr>
	
	
	
	<tr>
		<td>Country</td>
		<td>:</td>
		<td>
			<select name="countryid">
				<option>Select</option>				
			<?php
			$sql = "select * from country";
			foreach (getData($sql) as  $value) {
				echo '<option value="'.$value['id'].'">'.$value['name'].'</option>';
			}
			?>
				
			</select>		
			</td>		
	</tr>
	
	
	<tr>
		<td>City</td>
		<td>:</td>
		<td>
			<select name="cityid">
			<option value="0">Select</option>';
			<?php
			$sql = "select * from city";
			foreach (getData($sql) as  $value) {
				echo '<option value="'.$value['id'].'">'.$value['name'].'</option>';
			}
			?>
								
			</select>		
			</td>		
	</tr>


	<tr>
		<td>Image</td>
		<td>:</td>
		<td>
			<input type="file" name="image">	

		</td>		
	</tr>
	
	<tr>
		<td><input type="submit" name="btn_teacher" value="Register"/></td>
	</tr>

</table>

</fieldset>

</form>
</div>

<!--end Stud-->







<!--start Stud-->
<div id="Employee_reg">
<form action="" method="post" enctype="multipart/form-data">
   
<fieldset>
	<legend>Teacher Registration INFO</legend>
		



    <table>

	<tr>
		<td>Name:</td>
		<td>:</td>
		<td><input type="text" name="name" placeholder="Enter here...."/></td>		
	</tr>

	
	<tr>
		<td>Email</td>
		<td>:</td>
		<td><input type="text" name="email" placeholder="Enter here...."/></td>		
	</tr>
	
	
	<tr>
		<td>Password</td>
		<td>:</td>
		<td><input type="text" name="password" placeholder="Enter here...."/></td>		
	</tr>
	
	
	<tr>
		<td>Contact</td>
		<td>:</td>
		<td><input type="text" name="contact" placeholder="Enter here...."/></td>		
	</tr>


	<tr>
		<td>Addres</td>
		<td>:</td>
		<td><textarea name="address"></textarea></td>		
	</tr>
	
	<tr>
		<td>Gender</td>
		<td>:</td>		
		<td>
			<input type="radio" name="gender" value="male"/>Male
			<input type="radio" name="gender" value="female"/>Female		</td>		
	</tr>


	





	
	<tr>
		<td>N id</td>
		<td>:</td>
		<td><input type="number" name="nid" placeholder="Enter here...."/></td>		
	</tr>
	
	
	<tr>
		<td>Blood</td>
		<td>:</td>
		<td><input type="text" name="blood" placeholder="Enter here...."/></td>		
	</tr>



	<tr>
		<td>Study</td>
		<td>:</td>
		<td><input type="text" name="study" placeholder="Enter here...."/></td>		
	</tr>


	

	
	
	<tr>
		<td>Type</td>
		<td>:</td>
		<td>
			<input type="text" name="type" placeholder="Enter here........" />
			</td>		
	</tr>
	
	
	
	<tr>
		<td>Country</td>
		<td>:</td>
		<td>
			<select name="countryid">
				<option>Select</option>				
			<?php
			$sql = "select * from country";
			foreach (getData($sql) as  $value) {
				echo '<option value="'.$value['id'].'">'.$value['name'].'</option>';
			}
			?>
				
			</select>		
			</td>		
	</tr>
	
	
	<tr>
		<td>City</td>
		<td>:</td>
		<td>
			<select name="cityid">
			<option value="0">Select</option>';
			<?php
			$sql = "select * from city";
			foreach (getData($sql) as  $value) {
				echo '<option value="'.$value['id'].'">'.$value['name'].'</option>';
			}
			?>
								
			</select>		
			</td>		
	</tr>


	<tr>
		<td>Image</td>
		<td>:</td>
		<td>
			<input type="file" name="image">	

		</td>		
	</tr>
	
	<tr>
		<td><input type="submit" name="btn_employee" value="Register"/></td>
	</tr>

</table>

</fieldset>

</form>
</div>

<!--end Stud-->


</div>