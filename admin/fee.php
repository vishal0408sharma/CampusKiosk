<!--for deletion of Record -->
<?php
	$operation="";
	$msg="";
	
	if(isset($_GET['operation']))
	{
		$operation=$_GET['operation'];
	}

	
	if(isset($_GET['receipt_id']))
		$id=$_GET['receipt_id'];

	if($operation=="del")
	{
		$del_sql=mysql_query("DELETE FROM fee WHERE receipt_no='$id' ");

		if($del_sql)
			$msg="1 Record Deleted... !";
		else
			$msg="Could not Delete :".mysql_error();	
			
	}
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>View courses</title>
<link rel="stylesheet" type="text/css" href="css/view_admin.css" />
</head>

<body>
<div id="title" >
<form method="post">

<table width="755">
	<tr>
    	<td width="190px" style="font-size:18px; color:#006; text-indent:30px;">View fee receipts</td>
        <td>
        	<a href="?tag=fee_entry"><input type="button" title="Deposit fee" name="addNew" value="Add New" id="button-search" /></a>
        </td>
        <td>
        	<input type="text" name="searchtxt" title="Enter search term" class="search" autocomplete="off"/>
        </td>
        <td style="float:right">
        	<input type="submit" name="btnsearch" value="Search" id="button-search" title="Search course" />
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
            <th>Student Id</th>
            <th>Receipt number</th>
            <th>Semester</th>
            <th>Amount</th>
            <th>Operation</th>
        </tr>
       
 
        <?php
	$key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];
	
	if($key !="")
		$sql_sel=mysql_query("SElECT * FROM fee WHERE student_id like '%$key%' or receipt_no like '%$key%' or sem like '%$key%' ");

	else
		 $sql_sel=mysql_query("SELECT * FROM fee");
	
		
       
    $i=0;
    while($row=mysql_fetch_array($sql_sel))
   {
	    $i++;
	    $color=($i%2==0)?"lightblue":"white";
?>

	      <tr bgcolor="<?php echo $color?>">
		    <td><?php echo $i;?></td>
		    <td><?php echo $row['student_id'];?></td>
		    <td><?php echo $row['receipt_no'];?></td>
		    <td><?php echo $row['sem'];?></td>
		    <td><?php echo $row['amount'];?></td>
		    <td><a href="?tag=courses&operation=del&course_id=<?php echo $row['receipt_no'];?>" title="Delete"><img src="image/delete.png" /></a></td>
		     
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
