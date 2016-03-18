<?php
$id=$_SESSION["id"];
$query = "SELECT * FROM teacher where id='$id'";
//,`last_name`,`gender`,`dob`,`mobile_no`,`batch`,`date_of_adm`, `semester`,`email`,`temp_addr`,`perm_addr`,`fname`,`mname`,`bld_grp`, `branch`,`enroll`, `alter_no`, `pswd` 
$response = mysql_query($query);
if($response==true)
{

		$row = mysql_fetch_array($response);
		
		
	echo '
	<link rel="stylesheet" type="text/css" href="../css/f_css/entry.css">    
<fieldset><legend><div id="myhd">Personal Information</div></legend>
		 <table>
<tr>		   <td><div id="dispinfoh">Id</div></td><td><div id="dispinfo">' . $row['id'] . '</div></td></tr>	<tr>   <td><div id="dispinfoh">
	First Name</div></td><td><div id="dispinfo">' . $row['first_name'] . '</div></td></tr>	<tr>   <td><div id="dispinfoh">
	Last Name</div></td><td><div id="dispinfo">' . $row['last_name'] . '</div></td></tr>	<tr>   <td><div id="dispinfoh">
	Gender</div></td><td><div id="dispinfo">' . $row['gender'] . '</div></td></tr>	<tr>   <td><div id="dispinfoh">
	Date of Birth</div></td><td><div id="dispinfo">' . $row['dob'] . '</div></td></tr>	<tr>   <td><div id="dispinfoh">
	Mobile Numbero</div></td><td><div id="dispinfo">' . $row['mobile_no'] . '</div></td></tr>	<tr>   <td><div id="dispinfoh">
	Email</div></td><td><div id="dispinfo">' . $row['email'] . '</div></td></tr>	<tr>   <td><div id="dispinfoh">
	Date of Joining</div></td><td><div id="dispinfo">' . $row['joining_date'] . '</div></td></tr>	<tr>   <td><div id="dispinfoh">
	Temporary Address</div></td><td><div id="dispinfo">' . $row['temp_addr'] . '</div></td></tr>	<tr>   <td><div id="dispinfoh">
	Permanent Address</div></td><td><div id="dispinfo">' . $row['perm_addr'] . '</div></td></tr>	<tr>   <td><div id="dispinfoh">
	Department</div></td><td><div id="dispinfo">' . $row['dept'] . '</div></td></tr>	<tr>   <td><div id="dispinfoh">
	Specialisations</div></td><td><div id="dispinfo">' . $row['specialisations'] . '</div></td></tr>	<tr>   <td><div id="dispinfoh">
	Annual Salary</div></td><td><div id="dispinfo">' . $row['salary'] . '</div></td></tr>	<tr>   <td><div id="dispinfoh">
	Position</div></td><td><div id="dispinfo">' . $row['position'] . '</div></td></tr>	<tr>   <td><div id="dispinfoh">
	Username</div></td><td><div id="dispinfo">' . $row['username']  . '</div></td></tr>
		 
		 </table>
	 </fieldset>';

} 
else 
{
	echo "Couldn't issue database query<br />";
}

?>
