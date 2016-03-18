<!--for deletion of Record -->
<?php
	$operation="";
	$msg="";

	if(isset($_GET['operation']))
	{
		$operation=$_GET['operation'];
	}
	
	
	if($operation=="del")
	{
					
		$teacher_id=$_GET['teacher_id'];
		$time=$_GET['time'];
		$day=$_GET['day'];

		$del_sql=mysql_query("DELETE FROM timetable WHERE teacher_id='$teacher_id' AND time='$time' AND day='$day' ");



		if($del_sql==true)
			$msg="1 Record Deleted... !";
		else
			$msg="Could not Delete :".mysql_error();	
			
		print $msg;
	}
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>View classes</title>
<link rel="stylesheet" type="text/css" href="css/view_admin.css" />
</head>

<body>
<div id="title" >
<form method="post">

<table width="755">
	<tr>
    	<td width="190px" style="font-size:18px; color:#006; text-indent:30px;">View classes</td>
        <td>
        	<a href="?tag=class_entry"><input type="button" title="Add new class" name="addNew" value="Add New" id="button-search" /></a>
        </td>
        <td>
        	<input type="text" name="searchtxt" title="Enter search term" class="search" autocomplete="off"/>
        </td>
        <td style="float:right">
        	<input type="submit" name="btnsearch" value="Search" id="button-search" title="Search classes" />
        </td>
    </tr>

</table>
</form>
</div><!--- end of style_div -->

<br />


<div id="list-table">
<form method="post">

    <table border="1" width="2000px" align="center" cellpadding="3" class="mytable" cellspacing="0">
        <tr>
            <th>S.No.</th>
            <th>Course Id</th>
            <th>Teacher Id</th>
            <th>Venue</th>
            <th>Time</th>
            <th>Day</th>
            <th>Batch</th>
            <th>Semester</th>
            <th>Operation</th>
        </tr>
       
 
        <?php
	$key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];
	
	if($key !="")
		$sql_sel=mysql_query("SElECT * FROM timetable WHERE course_id  like '%$key%' or teacher_id like '%$key%' or sem like '%$key%' or batch like '%$key%' or venue like '%$key%' ");

	else
		 $sql_sel=mysql_query("SELECT * FROM timetable");
	
		
       
    $i=0;
    while($row=mysql_fetch_array($sql_sel))
   {
	    $i++;
	    $color=($i%2==0)?"lightblue":"white";
?>

	      <tr bgcolor="<?php echo $color?>">
		    <td><?php echo $i;?></td>
		    <td><?php echo $row['course_id'];?></td>
		    <td><?php echo $row['teacher_id'];?></td>
		    <td><?php echo $row['venue'];?></td>
		    <td><?php echo $row['time'];?></td>
		    <td><?php echo $row['day'];?></td>
		    <td><?php echo $row['batch'];?></td>
		    <td><?php echo $row['sem'];?></td>

		    <td><a href="?tag=classes&operation=del&teacher_id=<?php echo $row['teacher_id'];?>&time=<?php echo $row['time'];?>&day=<?php echo $row['day'];?>" title="Delete"><img src="image/delete.png" /></a></td>
		     
		</tr>
<?php	

    }
	
// ----- for search studnens------	
		
	
?>
    </table>
</form>
</div>
</body>
</html>
