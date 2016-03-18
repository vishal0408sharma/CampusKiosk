<!doctype html>
<?php
$id=$_SESSION["id"];$aDoor=array();
?>
<?php
//input type="checkbox" name="formDoor[]" value="E" />Elliot House

?>




<?php
if(isset($_GET['addconst']) )
{
		/*if(empty($s_name))
		$sname="%";
		if(empty($atnval))
		$atnval="%";
		if(empty($doa))
		$doa="%";*/
		
		$btch="";
		$s_name="";
		$doa="";
	if(isset($_GET['bname'])){
		$btch=$_GET['bname'];}
		
		
	if(isset($_GET['sname'])){
		$s_name=$_GET['sname'];}
		
		
	if(isset($_GET['doa'])){
		$doa=$_GET['doa'];}
	if(isset($_GET['time'])){
		$time=$_GET['time'];
		$time.=":00";
		}	
	
	$query = "SELECT enroll,batch,first_name,last_name,t2.course_id as csid FROM student
	JOIN crs_teach_stud as t1 
	JOIN course as t2 
ON t1.teacher_id='$id'  and t2.course_id=t1.course_id and t2.course_name LIKE '%{$s_name}' and student.batch LIKE '%{$btch}'";//AND attendance.date LIKE '%{$doa}'";
	
	$response = mysql_query($query);
	if($response==true)
	{
		
		
		
if(isset($_POST['done']))
  {
  
if(isset($_POST['chk']))
  $aDoor = $_POST['chk'];
  
    $N = count($aDoor);
	while($row = mysql_fetch_array($response))
	{
	$crss=$row['csid'];
	$w1=$row['enroll'];
	$pr='y';
	if(!empty($aDoor)){ 
	if (in_array($w1, $aDoor))
	$pr='n';}
	//insert into attendance values('10B121','2014-02-02','14:02:00',993478,'y','n','n','0')
	$tempqry = "insert into attendance values('$crss','$doa','$time',$w1,'$pr','n','n','0')";
	$rese = mysql_query($tempqry)OR die("Error:".mysql_error());;
	if($rese!=true)
	{
	/*echo $crss;
	echo $w1;
	echo $doa;*/
	echo $time;
	echo "Couldn't issue database query<br />";
	echo mysqli_errno($tempqry);
    }
	}
  
  
  }
		
		
		
		
		
		
		?>
		
		<link rel="stylesheet" type="text/css" href="../css/f_css/entry.css">    
		<div class="formholder">
		
		<form method="POST" action="#">
	<input align = "left" type="submit" name="done" value="Submit the Values" id="button-in"></div></br></br>
	<table class="example table-autosort:0 table-stripeclass:alternate table-stripeclass:alternate" id="TABLE_4"   align="left" cellspacing="15" cellpadding="17">
		<thead><a id="myLink" href="javascript:void(0)" onclick="javascript:myLinkButtonClick();"><tr>
		<th ><h2>Selections</h2></th>
		<th class="filterable table-sortable:numeric table-sortable" title="Click to sort"><h2>Enrollment No.</h2></th>
<th class="filterable table-sortable:default table-sortable" title="Click to sort"      align="left"><h2>Student's Name</h2></th>
<th class="filterable table-sortable:default table-sortable" title="Click to sort"     align="left"><h2>Batch</h2></th>
</tr>


<tr>
		<th>Filter:</th>
		<th><input name="filter" size="8" onkeyup="Table.filter(this,this)"></th>
		<th><input name="filter" size="8" onkeyup="Table.filter(this,this)"></th>
		<th><input name="filter" size="8" onkeyup="Table.filter(this,this)"></th>
		</a>
	</tr>





</thead>
<?php
			while($row = mysql_fetch_array($response))
			{
			echo '<tr  >';
			//<a href="javascript:window.location.href=window.location.href"  onclick="?ln=2" title="Update">	
		
			?>
			<td>
			<input type="checkbox" name="chk[]" value="<?php echo $row['enroll'];?>">		
	</a></td>
				
			<?php
				echo ' <td align="left">' . 
				$row['enroll'] . '</td><td align="left">' .  
$row['first_name'] . $row['last_name'].'</td><td align="left">' .  
$row['batch'] . '</td>';

				
				
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
      <input type="hidden" name="tag" value="markatn" /> 
	 <fieldset>
	 <legend><div id="myhd">Add Values :</div></legend>
		 <table>
	     <tr>
		   <td><div id="formvalue">Subject Name:</div></td>
		   <td><div class="formholder"><input type="text"  name="sname" placeholder=""></div></td>
		 </tr>

		
            
			<tr>
		   <td><div id="formvalue">Batch:</div></td>
		   <td><div class="formholder"><input type="text"  name="bname" placeholder=""></div></td>
		 </tr>

            <tr>
		   <td><div id="formvalue">Date of Attendance: </div></td>
		   <td><div class="formholder"><input type="date"  name="doa" ></div></td>
		 </tr>
		  <tr>
		   <td><div id="formvalue">Time of Attendance: </div></td>
		   <td><div class="formholder"><input type="time"  name="time" ></div></td>
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
	<input type="submit" name="addconst" value="Add Constraint" id="button-in"  />
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