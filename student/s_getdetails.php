<?php
$enr=$_SESSION["enroll"];
$query = "SELECT * FROM student where enroll='$enr'";
//,`last_name`,`gender`,`dob`,`mobile_no`,`batch`,`date_of_adm`, `semester`,`email`,`temp_addr`,`perm_addr`,`fname`,`mname`,`bld_grp`, `branch`,`enroll`, `alter_no`, `pswd` 
$response = mysql_query($query);
if($response==true)
{

		$row = mysql_fetch_array($response);
	echo '
	<link rel="stylesheet" type="text/css" href="../css/s_css/entry.css">    
<fieldset><legend><div id="myhd">Personal Information</div></legend>
		 <table>
<tr>		   <td><div id="dispinfoh">Enrollment No.</div></td> 
<td><div id="dispinfo">' . 
		$row['enroll'] . '</div></td>
</tr>
	<tr>		   <td><div id="dispinfoh">First Name</div></td> 
	<td><div id="dispinfo">' . 
		$row['first_name'] . '</div></td>
	</tr>
	<tr>		   <td><div id="dispinfoh">Last Name</div></td> <td><div id="dispinfo">' . 
		$row['last_name'] . '</div></td></tr>
	<tr>		   <td><div id="dispinfoh">Batch</div></td><td><div id="dispinfo">' . 
		$row['batch'] . '</div></td> </tr>
	<tr>		   <td><div id="dispinfoh">Gender</div></td><td><div id="dispinfo">' . 
		$row['gender']. '</div></td> </tr>
	<tr>		   <td><div id="dispinfoh">D.O.B</div></td> <td><div id="dispinfo">' . 
		$row['dob']  . '</div></td></tr>
	<tr>		   <td><div id="dispinfoh">Mobile Number</div></td> <td><div id="dispinfo">' . 
		$row['mobile_no'] . '</div></td></tr>
	<tr>		   <td><div id="dispinfoh">Date of Admission</div></td> <td><div id="dispinfo">' . 
		$row['date_of_adm'] . '</div></td></tr>
	<tr>		   <td><div id="dispinfoh">Semester</div></td><td><div id="dispinfo">' . 
		$row['semester'] . '</div></td> </tr>
	<tr>		   <td><div id="dispinfoh">Email</div></td> <td><div id="dispinfo">' . 
		$row['email'] . '</div></td></tr>
	<tr>		   <td><div id="dispinfoh">Temporary Address</div></td> <td><div id="dispinfo">' . 
		$row['temp_addr'] . '</div></td></tr>
	<tr>		   <td><div id="dispinfoh">Permanent Address</div></td> <td><div id="dispinfo">' . 
		$row['perm_addr'] . '</div></td></tr>
	<tr>		   <td><div id="dispinfoh">Father\'s Name</div></td> <td><div id="dispinfo">' . 
		$row['fname'] . '</div></td></tr>
	<tr>		   <td><div id="dispinfoh">Mother\'s Name</div></td> <td><div id="dispinfo">' . 
		$row['mname'] . '</div></td></tr>
	<tr>		   <td><div id="dispinfoh">Blood Group</div></td> <td><div id="dispinfo">' . 
		$row['bld_grp'] . '</div></td></tr>
	<tr>		   <td><div id="dispinfoh">Branch</div></td> <td><div id="dispinfo">' . 
		$row['branch'] . '</div></td></tr>
	<tr>		   </tr>
		 
		 </table>
	 </fieldset>';
		

} 
else 
{
	echo "Couldn't issue database query<br />";
}

?>
