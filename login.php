<!Doctype html>

<html lang="en-US">

<head>
 <meta charset="UTF-8">
 <title>CampusKiosk</title>
 <link rel="stylesheet" type="text/css" href="css/login.css" >

<?php
		session_start();
		if(!isset($_SESSION["notvalid"]))
		$_SESSION["notvalid"]="notset";
		
		if(isset($_SESSION["notvalid"]))
		{if($_SESSION["notvalid"]=="notvalid")
		{ 
			?>
			<script>
				alert("incorrect username or password");
			</script>
			<?php 
			unset($_SESSION["notvalid"]);
		} 
		}
		
?>

</head>
  
<body>

  <header>
     <table  height="130px" width="100%">
	     
		 <tr>
	       <td width="9%"><img src="images/Logo-jiit.png"></img></td>
	       <td><div class="title"><h2>KALAM INSTITUTE OF ENGINEERING AND TECHNOLOGY</h2></div></td>
	     </tr>
	     
	 </table>
  </header>
  
  
  <section>
     <table width="100%" height="470px">
	     <tr>
             <td width="15%"><aside></aside></td>
	         <td width="70%"><div class="login_space">
			 <article>
	 <table  width="100%" height="470px" >
	     <tr>		 
     		 <td width="40%">
			    <p>Login to your Account</p>
			   <form action="loginvalid.php" method="POST" accept-charset="UTF-8"
                  enctype="application/x-www-form-urlencoded" autocomplete="off" >
				  <div class="formholder">
				  <select name="member" id="selectionType">
                  <option value="admin" selected>Admin</option>
                  <option value="teacher">Faculty</option>
                  <option value="student" >Student</option>
                  </select></div>
				
				    <div class="formholder"><input type="ID" name="userId" placeholder="USERNAME/ENROLL"></div>
				    <div class="formholder"><input type="password" name="psw" placeholder="PASSWORD"></div>
				  <br>
				   
				  <div class="formholder"><input type="submit" value="SUBMIT"></div>
				  <br>
				  <div class="formholder"><input type="forget_password" value="Forget Password"></div>
			   </form>
			 </td>
             <td width="60%">
			    <div class="photos">
		     
			   </div>
             </td>			 
	     </tr>		   
	 </table>		   
			 </article></div>
			 </td>
			 <td width="15%"><aside></aside></td>
	     </tr> 
	 </table>
  </section>
  
</body>

</html>
