<!doctype html>
<?php
$id=$_SESSION["id"];$aDoor=array();
		
if(isset($_POST['updateconst']))
  {
  $enr = $_POST['enr'];
  $sname = $_POST['sname'];
  $doa= $_POST['doa'];
  $time = $_POST['time'];
  $atn = $_POST['atn'];
  $time.=":00";
    $tempqry = "update attendance set
attendance='$atn' where course_id='$sname' and
date='$doa' and
time='$time' and
student_id='$enr'";
	$rese = mysql_query($tempqry)OR die("Error:".mysql_error());;
	if($rese==true)
	echo 'done';
	}
  
 
  else{
		

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

 
<form method="POST">
      <fieldset>
	 <legend><div id="myhd">Edit Values :</div></legend>
		 <table>
	     <tr>
		   <td><div id="formvalue">Subject Name:</div></td>
		   <td><div class="formholder"><input type="text"  name="sname" placeholder=""></div></td>
		 </tr>

		<tr>
		   <td><div id="formvalue">Enrollment No.:</div></td>
		   <td><div class="formholder"><input type="text"  name="enr" placeholder=""></div></td>
		 </tr>
            
		 

            <tr>
		   <td><div id="formvalue">Date of Attendance: </div></td>
		   <td><div class="formholder"><input type="date"  name="doa" ></div></td>
		 </tr>
		  <tr>
		   <td><div id="formvalue">Time of Attendance: </div></td>
		   <td><div class="formholder"><input type="time"  name="time" ></div></td>
		 </tr>
		 
		 <tr>
		   <td><div id="formvalue">Attendance:</div></td>
		   <td><div class="formholder"><input type="text"  name="atn" placeholder=""></div></td>
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
	<input type="submit" name="updateconst" value="Update" id="button-in"  />
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