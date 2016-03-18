<?php
$enr=$_SESSION["enroll"];
$query = "SELECT * FROM med_info where student_id='$enr'";
//,`last_name`,`gender`,`dob`,`mobile_no`,`batch`,`date_of_adm`, `semester`,`email`,`temp_addr`,`perm_addr`,`fname`,`mname`,`bld_grp`, `branch`,`enroll`, `alter_no`, `pswd` 
$response = mysql_query($query);
if($response==true)
{

		$row = mysql_fetch_array($response);
		$tt=$row['type_of_dis'];
		$t1=$row['disability'];
		if($tt==NULL)
		$tt='NA';
		if($t1=='no')
		$t1='No Disabilities';
	echo '
	<link rel="stylesheet" type="text/css" href="../css/s_css/entry.css">    
<fieldset><legend><div id="myhd">Medical Information</div></legend>
		 <table>
<tr>		   <td><div id="dispinfoh">Disability Status.</div></td> 
<td><div id="dispinfo">' . 
		$t1 . '</div></td>
</tr>
	<tr>		   <td><div id="dispinfoh">Type of Disability</div></td> 
	<td><div id="dispinfo">' . 
		 $tt. '</div></td>
	</tr>
		 
		 </table>
	 </fieldset>';
		

} 
else 
{
	echo "Couldn't issue database query<br />";
}

?>
