<!--for deletion of Record -->
<?php
	$operation="";
	$msg="";
	
	if(isset($_GET['operation']))
	{
		$operation=$_GET['operation'];
	}

	
	if(isset($_GET['id']))
		$id=$_GET['id'];

	if($operation=="del")
	{
		$del_sql=mysql_query("DELETE FROM admin WHERE id='$id' ");

		if($del_sql)
			$msg="1 Record Deleted... !";
		else
			$msg="Could not Delete :".mysql_error();	
			
	}
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>View Admins</title>
<link rel="stylesheet" type="text/css" href="css/view_admin.css" />
</head>

<body>
<div id="title" >
<form method="post">

<table width="755">
	<tr>
    	<td width="190px" style="font-size:18px; color:#006; text-indent:30px;">View Admins</td>
        <td>
        	<a href="?tag=user_entry"><input type="button" title="Add new admin" name="addNew" value="Add New" id="button-search" /></a>
        </td>
        <td>
        	<input type="text" name="searchtxt" title="Enter name for search " class="search" autocomplete="off"/>
        </td>
        <td style="float:right">
        	<input type="submit" name="btnsearch" value="Search" id="button-search" title="Search Admin" />
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
	    <th>Admin type</th>
	    <th>User name</th>
	    <th>Password</th>
            <th colspan="2">Operation</th>
        </tr>
       
 
        <?php
	$key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];
	
	if($key !="")
		$sql_sel=mysql_query("SElECT * FROM admin WHERE first_name  like '%$key%' or last_name like '%$key%' or id like '%$key%'");

	else
		 $sql_sel=mysql_query("SELECT * FROM admin");
	
		
       
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
		    <td><?php echo $row['mobile_number'];?></td>
		    <td><?php echo $row['email'];?></td>
		    <td><?php echo $row['type'];?></td>
		    <td><?php echo $row['username'];?></td>
		    <td><?php echo $row['password'];?></td>
                    <td><a href="?tag=user_entry&operation=upd&id=<?php echo $row['id'];?>" title="Update"><img src="image/update.png" /></a></td>
		    <td><a href="?tag=users&operation=del&id=<?php echo $row['id'];?>" title="Delete"><img src="image/delete.png" /></a></td>
		     
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
