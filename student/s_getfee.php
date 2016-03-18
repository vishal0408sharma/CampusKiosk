<?php
$enr=$_SESSION["enroll"];
$query = "SELECT * FROM fee where student_id='$enr'";
//,`last_name`,`gender`,`dob`,`mobile_no`,`batch`,`date_of_adm`, `semester`,`email`,`temp_addr`,`perm_addr`,`fname`,`mname`,`bld_grp`, `branch`,`enroll`, `alter_no`, `pswd` 
$response = mysql_query($query);
if($response==true)
{
	echo '
	<link rel="stylesheet" type="text/css" href="../css/s_css/entry.css">    
<fieldset><legend><div id="myhd">Medical Information</div></legend>
		 <table>
		 <tr>		   <th><div id="dispinfoh">Reciept No.</div></th> 
		 <th><div id="dispinfoh">Semester</div></th> 
		 <th><div id="dispinfoh">Amount</div></th> </tr>';

		while($row = mysql_fetch_array($response)){
echo'<tr>
<td><div id="dispinfo">' . 
		$row['receipt_no'] . '</div></td>
	   
<td><div id="dispinfo">' . 
		$row['sem'] . '</div></td>
		   
	<td><div id="dispinfo">' . 
		$row['amount'] . '</div></td>
	</tr>
	';}	 
	echo '	 </table>
	 </fieldset>';
		

} 
else 
{
	echo "Couldn't issue database query<br />";
}

?>
