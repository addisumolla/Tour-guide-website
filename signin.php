<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>sign in</title>
	<style type="text/css">
		.login:hover{
			opacity: 0.4;
		}
		.reset:hover{
			opacity: 0.5;
		}

	</style> 
	<script type="text/javascript">
function validate()
{
//validate user name
if(document.form1.username.value=="")
{ 
alert("please provide your user name");
document.form1.username.focus();
return false;
}
var x=document.form1.email.value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("please provide a valid email address");
  document.form1.email.focus();
  return false;
  }
  //validate passsword
if(document.form1.password.value=="")
{
alert("please provide your password");
document.form1.password.focus();
return false;
}
}
</script>        
	<style type="text/css">
		a:link{
			color: yellow;
		}
		a:visited{
			color: yellow;
		}
		a:hover{
			color: red;
		}
		
	</style>

</head>
<body style="background-image: url('image/1pro.jpg');background-size: cover;">
	
            
	<table style="background-image: url('image/d6.jfif');" width="100%"height="10%">
		<tr>
			<td width="33%"style="font-size: 250%;text-align: center;"><a href="home.php">Home</a></td>
			<td width="33%"style="font-size: 250%;text-align: center;"><a href="contact.php">Contact Us</a></td>
			<td width="33%"style="font-size: 250%;text-align: center;"><a href="about.php">About Developer</a></td>
		</tr>
	
	</table>
	<form style="background-image: url('image/download.jfif');margin-left: 670px;margin-right:2px;margin-top: 150px;background-size: cover" action="lal.php"method="post" name="form1"onsubmit="return(validate())";>
		<legend style="margin-left: 220px;font-size: 250%;"><mark style="color: red;background-color: blue;">login form</mark></legend>
		
			<p><label style="font-size: 33px;width: 30%;background-color: gray;color: black;">User name:
				<input type="text" name="username" placeholder="">
			</label></p>
			<p><label style="font-size: 33px;background-color: blue;color: white;">Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<input type="Email" name="email" placeholder="">
			</label></p>
			<p><label style="font-size: 33px;background-color: lightskyblue;color: black;">Password:&nbsp
				<input type="Password" name="password" placeholder="">
			</label></p>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input class="login" style="font-size:160%;background-color: blue;color: white;border: none;border-radius: 18px;width: 100px;" type="submit" name="" placeholder="" value="login">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input class="reset" style="font-size:160%; background-color: red;border: none;border-radius: 18px;width: 100px;" type="reset" name="" placeholder="" value="reset">

		
	</form>


</body>
</html>