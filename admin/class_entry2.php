<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Select faculty</title>
<link rel="stylesheet" type="text/css" href="css/view_admin.css" />
</head>

<body>
<div id="title" >
<form method="post">
<h2><center>Add new Class - choose a faculty</center></h2>
<table width="755">
	<tr>
    	<td width="190px" style="font-size:18px; color:#006; text-indent:30px;">Choose Faculty</td>
        <td>
        	<a href="?tag=home"><input type="button" title="Cancel" name="cancel" value="Cancel" id="button-search" /></a>
        </td>

        <td>
        	<input type="text" name="searchtxt" title="Enter search term" class="search" autocomplete="off"/>
        </td>
        <td style="float:right">
        	<input type="submit" name="btnsearch" value="Search" id="button-search" title="Search teacher" />
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
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Contact</th>
            <th>E-Mail</th>
            <th>Date of Joining</th>
	    <th>Current Address</th>
	    <th>Permanent Address</th>
	    <th>Department</th>
	    <th>Specialisation</th>
	    <th>Salary</th>
	    <th>Position</th>
	    <th>Username</th>
	    <th>Password</th>
            <th>Choose</th>
        </tr>
       
 
        <?php
	$key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];
	
	if($key !="")
		$sql_sel=mysql_query("SElECT * FROM teacher WHERE first_name  like '%$key%' or last_name like '%$key%' or id like '%$key%'");

	else
		 $sql_sel=mysql_query("SELECT * FROM teacher");
	
		
       
    $i=0;
    while($row=mysql_fetch_array($sql_sel))
   {
	    $i++;
	    $color=($i%2==0)?"lightblue":"white";
?>

	      <tr bgcolor="<?php echo $color?>">
		    <td><?php echo $i;?></td>
		    <td><?php echo $row['id'];?></td>
		    <td><?php echo $row['first_name'];?></td>
		    <td><?php echo $row['last_name'];?></td>
		    <td><?php echo $row['gender'];?></td>
		    <td><?php echo $row['dob'];?></td>
		    <td><?php echo $row['mobile_no'];?></td>
		    <td><?php echo $row['email'];?></td>
		    <td><?php echo $row['joining_date'];?></td>
		    <td><?php echo $row['temp_addr'];?></td>
		    <td><?php echo $row['perm_addr'];?></td>
		    <td><?php echo $row['dept'];?></td>
		    <td><?php echo $row['specialisations'];?></td>
		    <td><?php echo $row['salary'];?></td>
		    <td><?php echo $row['position'];?></td>
		    <td><?php echo $row['username'];?></td>
		    <td><?php echo $row['password'];?></td>
		   
		    <td><a href="?tag=class_entry3&course_id=<?php echo $_GET['course_id'];?>&teacher_id=<?php echo $row['id'];?>" title="Choose">Choose</a></td>
		     
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
