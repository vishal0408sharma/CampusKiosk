<html lang="en">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/Student_entry.css">    
</head>
<body>

<article>

<div id="query_title"></div>

<br>
	 <fieldset>
	 <legend>Personal Information</legend>
		 <table>

<?php

	$sql_sel=mysql_query("SElECT * FROM admin WHERE id='".$_SESSION["adminid"]."' ");
	$row=mysql_fetch_array($sql_sel);
?>

<br>

                 <tr>
		   <td><div id="formvalue">user id:</div></td>
		   <td><?php echo $row['id'];?></td>                   
		 </tr>

                <tr>
		   <td><div id="formvalue">first name</div></td>
		    <td><?php echo $row['first_name'];?></td>
		 </tr>

                <tr>
		   <td><div id="formvalue">Last name</div></td>
		    <td><?php echo $row['last_name'];?></td>
                 </tr>

		 <tr>
		   <td><div id="formvalue">gender:</td>
		    <td><?php echo $row['gender'];?></td>
                 </td>

		 <tr>
		   <td><div id="formvalue">date of birth:</td>
		   <td><?php echo $row['dob'];?></td>
		 </tr>

		 <tr>
		   <td><div id="formvalue">contact no. :</td>
		   <td><?php echo $row['mobile_number'];?></td>
		 </tr>


                 <tr>
		   <td><div id="formvalue">email_id:</td>
		   <td><?php echo $row['email'];?></td>
		 </tr>

		<tr>
		   <td><div id="formvalue">Type:</td>
		    <td><?php echo $row['type'];?></td>
		 </tr>

                 <tr>
		   <td><div id="formvalue">Username:</td>
		    <td><?php echo $row['username'];?></td>
		 </tr>


		 
		 </table>
<br>	
 </fieldset>
	 
<br><br><br><br>
	 
	</div>
      

  </article>

</body>
</html>
