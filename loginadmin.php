 <?php
   session_start();
  
 $error='';
if(isset($_POST['submit']))
{
	if(empty($_POST['username']))
	{
		echo "<script>
alert('Username cannot be blank. Fill username field.');
window.location.href='loginadmin.php';
</script>";
    }

    else
       if(empty($_POST['password']))
  {
    echo "<script>
alert('Password cannot be blank. Fill password field.');
window.location.href='loginadmin.php';
</script>";
    }
    else 
      if((empty($_POST['username']))&&(empty($_POST['password'])))
  {
    echo "<script>
alert('Fill username and password fields.');
window.location.href='loginadmin.php';
</script>";
  }
	  
	else{	

$myusername=$_POST['username'];
$mypassword=$_POST['password'];
 
   if (($myusername=="admin")&&($mypassword=="admin"))
   {
   header("location:admin.php");
   }
   
  else{
   echo '<span style="color:RED; text align: CENTER;">Invalid Username or password!</span>';
   }
   }
  }

?>

<html>
 <head>
 <title>Login as Admin</title>

  <style type="text/css">
     
		.box{
	   border:black solid 1.5px;
	   width: 250px;
	   height: 35px;
	   font-size:18px;
	   
	}
	
	.button {
    background-color: 800000;
    border: 1 px black;
    color: white;
    padding: 12px 28px;
	  border-radius: 4px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
   
	width: 150px;

	font-size: 15px;
	
	-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.button:hover {
    background-color: 85CD00;
    color: black;
}

body{
	background-color: #ddd
}
	
 label {
            font-weight:bold;
            width:100px;
            font-size:18px;
         }
	
fieldset {
    background-color:  white;
    border:  2px solid #ccc;
    margin:  0.5em 0;
    padding:  0em;
}
img{
	position:absolute; TOP:16px; LEFT:260px; WIDTH:60px; HEIGHT:60px" src="metro_logo.png"
}
h2 { color:000000; 
font-size:50px;
text-decoration: underline;
margin-left: 80px;
 }
 h3{ color:white; 
font-size:45px;

 }
	  
	</style>
	  
      </head>
  <body>	
      <div align="center";>
	   <img src="metro_logo.png" alt="logo" style="float:left; margin:0px 15px 15px 0px; cursor:pointer; cursor:hand; border:0 width:70px;height:70px;">
<strong><b><h2> Delhi Metro Rail Corporation</h2></b></strong>

      <div style="width:600px; border: 5px;" align="center">
      <div style= "background-color:black; font-size:10px; color:white; padding:0.1px;"
    <b><h3>Admin Login</h3></b></div>
   
       <fieldset>
	   <form action=" " method="post">
      <label><br/><br/>Username: </label>
	    <input type="text" name="username" class="box"/><br/><br/>
      <label><br/>Password: </label>
	     <input type="password" name="password" class="box"/><br/><br/>
      
	  <br/><button class="button" type="submit" name="submit">Submit</button>
    </fieldset>
      </form>
   
      <div style="font-size:11px; color:#cc0000; margin-top:10px"></div>
   
      </div>
      </div>
      </div>
  
      </body>
      </html>