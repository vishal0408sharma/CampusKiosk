<!doctype html>
<?php
$id=$_SESSION["id"];$aDoor=array();
?>
<?php
//input type="checkbox" name="formDoor[]" value="E" />Elliot House

?>




<?php
if(isset($_GET['addmarks']) )
{
		/*if(empty($s_name))
		$sname="%";
		if(empty($atnval))
		$atnval="%";
		if(empty($doa))
		$doa="%";*/
		
		$btch="";
		$s_name="";
		$sem="";
		$type="";
	if(isset($_GET['batch'])){
		$btch=$_GET['batch'];}
		
		
	if(isset($_GET['sname'])){
		$s_name=$_GET['sname'];}
		
	if(isset($_GET['sem'])){
		$sem=$_GET['sem'];}
		
	if(isset($_GET['type'])){
		$type=$_GET['type'];}
		
		
	
	$query = "SELECT * FROM student
	JOIN course where course_name ='$s_name' and
	student.batch LIKE '%{$btch}' and student.semester LIKE '%{$sem}'";//AND attendance.date LIKE '%{$doa}'";
	$crr="";
	$response = mysql_query($query);
	if($response==true)
	{
		
		
		
if(isset($_POST['done']))
  {
  $crr=$_POST['crtt'];
  $maxmrk=20;
	$tb="marks_lab";
	if($type=='1' || $type=='2' || $type=='3')
		$tb="marks_theory";
	if($type=='t3')
	$maxmrk=35;
	
	while($row = mysql_fetch_array($response))
	{
	$w1=$row['enroll'];
	
	$err=$_POST[$w1];
	$type=$type%10;
	$tempqry = "insert into `$tb` (`course_id`, `student_id`, `max_marks`, `marks_obtained`,  `type`, `backlog`) values('$crr','$w1','$maxmrk','$err','$type','n')";
	$rese = mysql_query($tempqry)OR die("Error:".mysql_error());;
	if($rese!=true)
	{
	echo "Couldn't issue database query<br />";
	echo mysqli_errno($tempqry);
    }
	}
  
  
  }
		
		
		
		
		
		
		?>
		
		
		
		<link rel="stylesheet" type="text/css" href="../css/f_css/entry.css">    
		
		<div class="formholder">
		<form method="POST" action="#">
	<input align = "left" type="submit" name="done" value="Submit Marks" id="button-in"></div></br></br>
	<table class="example table-autosort:0 table-stripeclass:alternate table-stripeclass:alternate" id="TABLE_4"   align="left" cellspacing="15" cellpadding="17">
		<thead><a id="myLink" href="javascript:void(0)" onclick="javascript:myLinkButtonClick();"><tr>
		<th ><h2>Marks</h2></th>
		<th class="filterable table-sortable:numeric table-sortable" title="Click to sort"><h2>Enrollment No.</h2></th>
<th class="filterable table-sortable:default table-sortable" title="Click to sort"      align="left"><h2>Student's Name</h2></th>
<th class="filterable table-sortable:default table-sortable" title="Click to sort"     align="left"><h2>Batch</h2></th>
</tr>


<tr>
		<th> </th>
		<th><input name="filter" size="8" onkeyup="Table.filter(this,this)"></th>
		<th><input name="filter" size="8" onkeyup="Table.filter(this,this)"></th>
		<th><input name="filter" size="8" onkeyup="Table.filter(this,this)"></th></a>
	</tr>





</thead>
<?php
			while($row = mysql_fetch_array($response))
			{
			echo '<tr  >';
			//<a href="javascript:window.location.href=window.location.href"  onclick="?ln=2" title="Update">	
		
			?>
			<td>
			<input type=hidden name="crtt" value="<?php echo $row['course_id'];?>">
			<input type="text" name="<?php echo $row['enroll'];?>">		
	</a></td>
				
			<?php
				echo ' <td align="left">' . 
				$row['enroll'] . '</td><td align="left">' .  
$row['first_name'] . $row['last_name'].'</td><td align="left">' .  
$row['batch'] . '</td><td align="left">';

				
				
			}

		echo '</table>';
		echo "<br>";
} 
else 
{
	echo "Couldn't issue database query<br />";
}}else{
?>

<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/s_css/entry.css">    

</head>
<body>
  <article>
	
	<table>	
	<tr>
	
	
	<td>        
	
	</td>
	<td>
		<div class="formholder"><a href="?tag=getatn">
                	<input type="submit" name="rf" value="Refresh" id="button-in"  /></a>
       		</div>
	</td>
	</tr>
	</table>



<body>
  <article>
	<div id="query_title"></div>

 
<form method="GET">
      <input type="hidden" name="tag" value="addmarks" /> 
	 <fieldset>
	 <legend><div id="myhd">Add Values :</div></legend>
		 <table>
	     <tr>
		   <td><div id="formvalue">Subject Name:</div></td>
		   <td><div class="formholder"><input type="text"  name="sname" placeholder=""></div></td>
		 </tr>


		  <tr>
		   <td><div id="formvalue">Batch: </div></td>
		   <td><div class="formholder"><select name="batch" id="batch">
                  <option value="f1" >F1</option>
				  <option value="f2" >F2</option>
				  <option value="f3" >F3</option>
				  <option value="f4" >F4</option>
				  <option value="f5" >F5</option>
                  </select></div></td>
		 </tr>
		 
		 
		 <tr>
		   <td><div id="formvalue">Semester: </div></td>
		   <td><div class="formholder"><select name="sem" id="sem">
                  <option value="1" >1</option>
				  <option value="2" >2</option>
				  <option value="3" >3</option>
				  <option value="4" >4</option>
				  <option value="5" >5</option>
				  <option value="6" >6</option>
				  <option value="7" >7</option>
				  <option value="8" >8</option>
                  </select></div></td>
		 </tr>
		 
		 
		 <tr>
		   <td><div id="formvalue">Type: </div></td>
		   <td><div class="formholder"><select name="type" id="type">
                  <option value="1" >T1</option>
				  <option value="2" >T2</option>
				  <option value="3" >T3</option>
				  <option value="11" >V1</option>
				  <option value="12" >V2</option>
                  </select></div></td>
		 </tr>
		 
		

			</table>
      </fieldset>
	  <br>
       
	   
	   <div class="formholder">
	   
	   <table>
	<tr>
	<td>
	<a href="?tag=home"> 
	<input type="button" value="Cancel" >
	</a>
	</td>
	<td>	 
	<input type="submit" name="addmarks" value="Add Constraint" id="button-in"  />
	</td>	
	</tr>
	</table>
	</div>
  </form>      
<br><br>
  </article>
</body>
</html>
			
            

<?php 
}?>