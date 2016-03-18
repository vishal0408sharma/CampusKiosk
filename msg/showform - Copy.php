<!doctype html>
<?php	

$table="msg_";
$table.=$_SESSION["whoami"];
	
	
$ides=10;
$operation="";
	if(isset($_GET['operation']))
	{
		$operation=$_GET['operation'];
	}

	
	if(isset($_GET['ms']))
		$cx=$_GET['ms'];

	if($operation=="del")
	{
		$tempqry = "delete from msg_student where msg_id='$cx'";
	$response = mysql_query($tempqry);
	if($response!=true)
	{
	echo "Could not Delete :".mysql_error();	
    }
	
			
	}
	
	if($operation=="upd")
	{
		$tempqry = "select readcheck from msg_student  where msg_id='$cx'";
		$response = mysql_query($tempqry);
		$row = mysql_fetch_array($response);
		if($row['readcheck']=='y')
		$tempqry = "Update msg_student set readcheck='n' where msg_id='$cx'";
		else
		$tempqry = "Update msg_student set readcheck='y' where msg_id='$cx'";
	$response = mysql_query($tempqry);
	if($response!=true)
	{
	echo "Could not Delete :".mysql_error();	
    }
	
			
	}
	
?>
<?php
//input type="checkbox" name="formDoor[]" value="E" />Elliot House
  if(isset($_POST['delete']))
  {
  if(isset($_POST['chk']))
  $aDoor = $_POST['chk'];
  if(empty($aDoor)) 
  {
    echo("You didn't select any Message.");
	echo "<a href='?tag=showmsg'>go back</a>";
  } 
  else
  {
    $N = count($aDoor);
    for($i=0; $i < $N; $i++)
    {
	$cx=$aDoor[$i];
	$tempqry = "delete from msg_student where msg_id='$cx'";
	$response = mysql_query($tempqry);
	if($response!=true)
	{
	echo "Couldn't issue database query<br />";
    }
	}
	echo "<a href='?tag=showmsg'>go back</a>";
  }
  }
  else{
?>


<?php
	if( $_SESSION["whoami"]=='student')
	{
$enr=$_SESSION["enroll"];
$query = "select * from msg_student where receiver_id='$enr'";
}
else if( $_SESSION["whoami"]=='teacher')
	{
	$tempid=$_SESSION["id"];
$query = "select * from msg_teacher where receiver_id='$tempid'";
}
	$response = mysql_query($query);
	if($response==true)
	{
		?> 
		
		<form method="POST" action="#">
	<input align = "left" type="submit" name="delete" value="Delete" id="button-in">
	<table class="example table-autosort:0 table-stripeclass:alternate table-stripeclass:alternate" id="TABLE_4"   align="left" cellspacing="15" cellpadding="17">
		<thead><a id="myLink" href="javascript:void(0)" onclick="javascript:myLinkButtonClick();"><tr>
		<th ><h2>Selections</h2></th>
		<th class="filterable table-sortable:numeric table-sortable" title="Click to sort"><h2>Sender's Id</h2></th>
<th class="filterable table-sortable:default table-sortable" title="Click to sort"      align="left"><h2>Sender's Type</h2></th>
<th class="filterable table-sortable:default table-sortable" title="Click to sort"     align="left"><h2>Subject</h2></th>
<th class="filterable table-sortable:default table-sortable" title="Click to sort"     align="left"><h2>Time</h2></th>
<th class="filterable table-sortable:default table-sortable" title="Click to sort"     align="left"><h2>Read Status</h2></th>
</tr>


<tr>
		<th>Filter:</th>
		<th><input name="filter" size="8" onkeyup="Table.filter(this,this)"></th>
		<th><select onchange="Table.filter(this,this)"><option value="">All</option><option value="s">s</option><option value="t">t</option><option value="a">a</option></select></th>
		<th><input href="javascript:void(0)" onchange="javascript:myLinkButtonClick();"name="filter" size="8" onkeyup="Table.filter(this,this)"></th>
		<th><select onchange="Table.filter(this,this)"><option value="function(){return true;}">All</option><option value="function(val){return parseFloat(val.replace(/\$/,''))>1;}">&gt; $1</option><option value="function(val){return parseFloat(val.replace(/\$/,''))<=1;}">&lt;= $1</option></select></th>
		<th><select onchange="Table.filter(this,this)"><option value="">All</option><option value="y">y</option><option value="n">n</option></select></th>
		</a>
	</tr>





</thead><?php
			while($row = mysql_fetch_array($response))
			{
			
			if($row['readcheck']=='n') 
				{echo '<tr  >';} 
			else
			echo '<tr style="font-weight:bold;background-color:#FFFF00">';
			?>
				<td><a href=#><input type="checkbox" name="chk[]" value="<?php echo $row['msg_id'];?>">      </a></td>
				
			<?php
				echo ' <td align="left">' . 
				$row['sender_id'] . '</td><td align="left">' .  
$row['sender_type'] . '</td><td align="left">' .  
$row['subject'] . '</td><td align="left">' .  
$row['entrytime'] . '</td><td align="left">' .  
$row['readcheck'] . '</td><td align="left">';

				?>
				
				<td><a href="?tag=showmsg&operation=upd&ms=<?php echo $row['msg_id'];?>" 
				title="Update">
				<?php if($row['readcheck']=='y') 
				{?>
				<img src="../images/y.ico" />
				<?php 
				} 
				else 
				{?>
				<img src="../images/n.ico" />
				<?php
				}?>
				</a></td>
		    <td><a href="?tag=showmsg&operation=del&ms=<?php echo $row['msg_id'];?>" title="Delete"><img src="../images/del.ico" /></a></td>
			<td><a href="#" onClick='alert("<?php echo 'Message is: '.$row['msg'];?>")' >Show Message</a></td></tr>
		     <?php
				
			}

		echo '</table>';
		$ides++;
		echo "<br>";
} 
else 
{
	echo "Couldn't issue database query<br />";
}
}
?>