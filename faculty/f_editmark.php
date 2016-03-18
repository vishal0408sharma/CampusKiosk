<!doctype html>
<?php
$id=$_SESSION["id"];$aDoor=array();
		
if(isset($_POST['updateconst']))
  {
		$s_name="";
		$type="";

	if(isset($_POST['sname'])){
		$s_name=$_POST['sname'];}
		
	
		
	if(isset($_POST['type'])){
		$type=$_POST['type'];}
	
	$mrk=$_POST['mrk'];
	$enroll=$_POST['enroll'];
	$tb="marks_lab";
	if($type=='1' || $type=='2' || $type=='3')
		$tb="marks_theory";
	
	$query = "SELECT course_id FROM course where course_name ='$s_name' ";//AND attendance.date LIKE '%{$doa}'";
	$response = mysql_query($query);
	$row = mysql_fetch_array($response);
	$crr=$row['course_id'];
	if($response==true)
	{
	$type=$type%10;
    $tempqry = "update $tb set marks_obtained='$mrk' where course_id='$crr' and type='$type' and student_id='$enroll'";
	$rese = mysql_query($tempqry)OR die("Error:".mysql_error());;
	if($rese==true)
	echo 'done';
	}
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
		   <td><div class="formholder"><input type="text"  name="enroll" placeholder=""></div></td>
		 </tr>
		 
		 <tr>
		   <td><div id="formvalue">Marks:</div></td>
		   <td><div class="formholder"><input type="text"  name="mrk" placeholder=""></div></td>
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