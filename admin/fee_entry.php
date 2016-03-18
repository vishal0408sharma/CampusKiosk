<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Select student to deposit fee</title>
<link rel="stylesheet" type="text/css" href="css/view_admin.css" />
</head>

<body>
<div id="title" >
<form method="post">
<h2><center>Add new Fee record - Choose a Student</center></h2>
<table width="755">
	<tr>
    	<td width="190px" style="font-size:18px; color:#006; text-indent:30px;"></td>
        <td>
        	<a href="?tag=home"><input type="button" title="Cancel" name="cancel" value="Cancel" id="button-search" /></a>
        </td>

        <td>
        	<input type="text" name="searchtxt" title="Enter name or id for search " class="search" autocomplete="off"/>
        </td>
        <td style="float:right">
        	<input type="submit" name="btnsearch" value="Search" id="button-search" title="Search Student" />
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
 	    <th>Enrollment Id</th>
	    <th>Password</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Contact</th>
            <th>Batch</th>
            <th>Year of Admission</th>
            <th>Semester</th>
            <th>E-Mail</th>
	    <th>Current Address</th>
	    <th>Permanent Address</th>
	    <th>Father's Name</th>
	    <th>Mother's Name</th>
	    <th>Blood Group</th>
	    <th>Branch</th>
	    <th>Disability</th>
	    <th>Type of Disability</th>
            <th>Choose</th>
        </tr>
       
 
        <?php
	$key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];
	
	if($key !="")
		$sql_sel=mysql_query("SElECT * FROM student WHERE first_name  like '%$key%' or last_name like '%$key%' or enroll like '%$key%'");

	else
		 $sql_sel=mysql_query("SELECT * FROM student");
	
		
       
    $i=0;
    while($row=mysql_fetch_array($sql_sel))
   {
	    $i++;
	    $color=($i%2==0)?"lightblue":"white";
?>

	      <tr bgcolor="<?php echo $color?>">
		    <td><?php echo $i;?></td>
		     <td><?php echo $row['enroll'];?></td>
		    <td><?php echo $row['pwd'];?></td>
                    <td><?php echo $row['first_name'];?></td>
		    <td><?php echo $row['last_name'];?></td>
		    <td><?php echo $row['gender'];?></td>
		    <td><?php echo $row['dob'];?></td>
		    <td><?php echo $row['mobile_no'];?></td>
		    <td><?php echo $row['batch'];?></td>
		    <td><?php echo $row['date_of_adm'];?></td>
		    <td><?php echo $row['semester'];?></td>
		    <td><?php echo $row['email'];?></td>
		    <td><?php echo $row['temp_addr'];?></td>
		    <td><?php echo $row['perm_addr'];?></td>
		    <td><?php echo $row['fname'];?></td>
		    <td><?php echo $row['mname'];?></td>
		    <td><?php echo $row['bld_grp'];?></td>
		    <td><?php echo $row['branch'];?></td>

<?php
	$sql_sel2=mysql_query("SELECT * FROM med_info WHERE student_id='".$row['enroll']."'");
	$row2=mysql_fetch_array($sql_sel2);
?>

		    <td><?php echo $row2['disability'];?></td>
		    <td><?php echo $row2['type_of_dis'];?></td>


                    <td><a href="?tag=fee_details&student_id=<?php echo $row['enroll'];?>" title="Choose">Choose></a></td>
		
		     
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
