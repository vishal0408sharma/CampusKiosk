<?php
$enr=$_SESSION["enroll"];
$query = "SELECT * FROM marks_theory where student_id='$enr'";
//,`last_name`,`gender`,`dob`,`mobile_no`,`batch`,`date_of_adm`, `semester`,`email`,`temp_addr`,`perm_addr`,`fname`,`mname`,`bld_grp`, `branch`,`enroll`, `alter_no`, `pswd` 
$response = mysql_query($query);
if($response==true)
{?>
	<link rel="stylesheet" type="text/css" href="../css/s_css/entry.css">    
<fieldset><legend><div id="myhd">Marks you Got </div></legend>
		 <table class="example table-autosort:0 " id="TABLE_4"   align="left"  border="0" cellpadding="0" cellspacing="0">
		<thead><a id="myLink" href="javascript:void(0)" onclick="javascript:myLinkButtonClick();"><tr>
		   <th class="filterable table-sortable:default table-sortable" title="Click to sort"  align="left"><div id="dispinfoh">Course</div></th> 
		 <th class="filterable table-sortable:default table-sortable" title="Click to sort"  align="left"><div id="dispinfoh">Marks</div></th> 
		 <th class="filterable table-sortable:default table-sortable" title="Click to sort"  align="left"><div id="dispinfoh">Type</div></th> </tr>
		 
		 <tr>
		<th><div id="dispinfoh"><input name="filter" size="8" onkeyup="Table.filter(this,this)"></div></th>
		<th><div id="dispinfoh"><input name="filter" size="8" onkeyup="Table.filter(this,this)"></div></th>
		<th><div id="dispinfoh"><input name="filter" size="8" onkeyup="Table.filter(this,this)"></div></th></a>
	</tr></thead>
<?php
		while($row = mysql_fetch_array($response)){
		$rw=$row['type'];
		if($rw==1)
		$rw='T1';
		if($rw==2)
		$rw='T2';
		if($rw==3)
		$rw='T3';
echo'<tr>
<td><div id="dispinfo">' . 
		$row['course_id'] . '</div></td>
	   
<td><div id="dispinfo">' . 
		$row['marks_obtained'].'/'.$row['max_marks'] . '</div></td>
		   
  <td><div id="dispinfo">' . 
		$rw . '</div></td>
		 
	
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
