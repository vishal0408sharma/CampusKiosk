<?php
 require("database/dbconnection.php");
 session_start();
 $login_type=$_POST["member"];
 $_SESSION["whoami"]= $login_type;
 $uname=$_POST["userId"];
 $pass=$_POST["psw"];

if($login_type=="student")
{
 $sql="select * from $login_type where enroll='$uname' and pwd='$pass'";
}
else{
 $sql="select * from $login_type where username='".mysql_real_escape_string($uname)."' and password='".mysql_real_escape_string($pass)."'";
} $res= mysql_query($sql);

 if($row=mysql_fetch_assoc($res))
 { 
	$_SESSION["iamin"]=$row["username"]; 

	if($login_type=="admin")
        {
		$_SESSION["id"]=$row["id"];
                $_SESSION["admintype"]=$row["type"];
                $_SESSION["adminid"]=$row["id"];
		header("Location: admin/adminhome.php");   			
	}
	else if($login_type=="teacher")
	{	$_SESSION["id"]=$row["id"];
		$_SESSION["username"]=$row["username"];
		header("Location: faculty/facultyhome.php");   					
	}

	else if($login_type=="student")
	{	$_SESSION["enroll"]=$row["enroll"];
	
	
	?>
			<script>
				alert("crt");
			</script>
			<?php
		header("Location: student/studenthome.php");   			
	}
   

		$_SESSION["notvalid"]="valid";
 }


 else
 {
	$_SESSION["notvalid"]="notvalid";
	header("Location: login.php");
 }

?>

