<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>contact us</title>
	<style type="text/css">
		a:link{
			color: yellow;
			
		}
		a:visited{
			color:red ;
		}
		a:hover{
			color: cyan;
		}
		body{
			background-image: url('image/pro14.jpg');
			background-repeat: repeat;
			background-size: cover;
		}
	</style>
</head>
<body>

	<table style="background-image: url('image/wp4312403.jpg');" width="100%"height="10%">
		<tr>
			<td width="33%"style="font-size: 250%;text-align: center;"><a href="home.php">Home</a></td>
			
			<td width="33%"style="font-size: 250%;text-align: center;"><a href="about.php">About Developer</a></td>
		</tr>
	</table>
	<p style="font-size: 150%; background-color:gray;color: black;">
		Questions about one of our posts, a place we have been or just a general inquiry for us please feel free to ask. <br>Comments or have something you want to share with us we would be delighted to hear from you.
	</p>
	<form action="insert.php" name="form" method="post"   style="background-color:;">
		<p><label style="font-size:250%;">Name:
			<input type="text" name="Name" required>
			
		</label></p>
		<p><label style="font-size:250%;">Email:
			<input type="email" name="Email" required>
			
		</label></p>
		<p style="background-color:darkcyan;"><label style="font-size:150%;"><p style="background-color:yellow;font-size: 180%;color: black;width: 200px;">Message:</p></label>
		<textarea style="background-color:darkgrey;color:black;font-size:;" name="comment"rows="10"cols="80"> comment here
			
		</textarea></p>
		<input style="font-size:120%;background-color: blue;color: white;" type="submit" name="add" value="Contact us">
	</form>
	<p style="font-size:150%; background-color: tomato;width: 500px;">You Can Also Contact Us On Social Media:</p>
	<div style="background-color:gray;">
	<a style="font-size: 150%;padding-left: 7%;margin-top: 1px;" href="https://www.facebook.com/"><img src="image/fc.jpg"width="60px"height="60px"></a>
	<a style="font-size: 150%;padding-left:7% ;" href="https://www.telegram.com/"><img src="image/tel.jpg"width="60px"height="60px"></a>
	<a style="font-size: 150%;padding-left: 7%;" href="https://www.whatsapp.com/"><img src="image/wht.jpg"width="60px"height="60px"></a>
	<a style="font-size: 150%;padding-left: 7%;" href="http://www.tiktook.com/"><img src="image/tik.jpg"width="60px"height="60px"></a>
	<a style="font-size: 150%;padding-left: 7%;" href="http://www.instagram.com/"><img src="image/ins.jpg"width="60px"height="60px"></a>
	<a style="font-size: 150%;padding-left: 7%;" href="http://www.twitter.com/"><img src="image/tw.jpg"width="60px"height="60px"></a>
	<a style="font-size: 150%;padding-left: 7%;" href="http://www.imo.com/"><img src="image/im.png"width="60px"height="60px"></a>
</div>
	

</body>
</html>