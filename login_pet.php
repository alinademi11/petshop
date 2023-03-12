<?php
if(isset($_POST['clickk']))
{
	 
	$_COOKIE["email"]="";
	$_COOKIE["pass"]="";
	

	
}
	if(isset($_POST['login']))
	{
		include("db.php");
		$a=1;
		$b=1;
		$email=$_POST['email'];
		$pass=$_POST['password'];
		
		if($email=="admin" and $pass=="admin")	
		{
			header("location:viewallpetdetails.php");
			$a=$a+1;
		}
		
		if($a==1)
		{
			$userlogin=$con->prepare("select * from newuser where username='$email' and password='$pass' ");
			
			$userlogin->execute();
			
			$row_check=$userlogin->rowCount();
			
			if($row_check==1)
				
			{
			
				if(isset($_POST['remember']))
				{
					setcookie('email',$email,time()+60*60*7);
					setcookie('pass',$pass,time()+60*60*7);
					
					
				}
				
					setcookie('usernameget',$email,time()+60*60*7);
					
					
					
					
					header("location:index.php");
				
				
			}
		}

		if($a==1)
		{
			echo "<h1>Логин или пароль неправилен</h1>";
		}
	}








?>

<!DOCTYPE html>
<html>
	<head>
		
		
		
		
			<title></title>
	<style>
	
	
body{	
		background-repeat:no-repeat;
		background-size: 100% 680px;}
	.container
	{
	   
		width:500px;
		height: 450px;
		text-align: center;
		background-image:url("z2.jpg");
		border-radius: 4px;
		margin:0 auto;
		margin-top:100px;
		opacity:0.9;
		
		
		
	}
	
	
	
	
	

	input[type="password"]:focus
			{
				
				width:50%;
				border:2px solid aquamarine;
				background-color:white;
			}	
			
			input[type="button"]:focus
			{
				width:20%;
				border:2px solid aquamarine;
				background-color:#0000CD;
			}	
	.form-input::before
	{
		content:"\f007";
		position:absolute;
		font-family:"FontAwesome";
		color:2F4F4F;
		padding-left:3px;
		
		padding-top:1px;
		font-size:30px;
		
		
	}
	.form-input1::before
	{
		content:"\f007";
		position:absolute;
		font-family:"FontAwesome";
		color:2F4F4F;
		padding-left:3px;
		
		padding-top:1px;
		font-size:30px;
		
		
	}
	
	.form-input:nth-child(2)::before
	{
		content:"\f023";
		
	}
	
	.form-input:nth-child(3)::before
	{
		content:"\f0a9";
		color:000000;
		padding-left:100px;
		
		padding-top:6px;
		cursor:pointer;
	}
	
	.form-input1:last-child::before
	{
		content:"\f234";
		color:000000;
		padding-left:115px;
		
		padding-top:4px;
		cursor:pointer;
	}
	
	
	
	
	
	
	a
	{
		color:#40E0D0;
		cursor:pointer;
		margin-left:-230px;
		
	}
	
	.text-danger
	{
		align:center;
		margin-top:110px;
	}
	body
	{
		margin:0 auto;
		background-image:url("z22.jpg");
		background-repeat:no-repeat;
		background-size: 100% 1080px;
		
	}
	.container img
	{
	border-radius:60px;
		border:none;
		width:120px;
		height: 120px;
		margin-top:20px;
		margin-bottom:20px;
		opacity:1.5;
		
	}



.usname{
	width:170px;
		height: 33px;
		
		font-size:18px;
		background-color:#031220;
		padding-left:5px;
		margin-top: 155px;
		color:rgb(212, 37, 236);

}

.pass{
	width:170px;
		height: 33px;
		font-size:18px;
		background-color:#031220;
		padding-left:5px;
		margin-top: 15px;
		color:rgb(212, 37, 236);
		
}


	

	
		input[type="text"]:focus
			{
				width:170px;
				
		height: 33px;
				border:2px solid purple;
				background-color:white;
				color:#000;
			}	
			input[type="password"]:focus
			{
				width:170px;
		height: 33px;
				border:2px solid purple;
				background-color:white;
				color:#000;
			}	
			
		.btn-login
		{
		width:75px;height:30px;;
		
		cursor:pointer;
		color:white;
		
		border-radius:4px;
		border:1px solid #0000A0;
		background-color:#031220;
		background-bottom: 4px solid #9933FF;
		margin-bottom:20px;
		font-weight:bold;
		background:#9933FF;
		font-size:15px;
		
		
	}
	input[type="submit"]:hover
			{
					color:#031220;
				border:1px solid white;
				background-color:#9933FF;
			}
			
	.btn-newuser
	{
		padding:10px;
		cursor:pointer;
		color:white;
		border-radius:4px;
			border:1px solid #0000A0;
		
		
		
		
		margin-right:-120px;
		margin-left:430px;
		font-size:15px;
			background:#9933FF;
		
		font-weight:bold;
		width:100px;height:30px;line-height:10px;
		margin-top:-90px;
		
	}
	input[type="button"]:hover
			{
					color:#031220;
				border:1px solid white;
				background-color:#9933FF;
			}
	#clr{cursor:pointer;margin-top:-235px;color:#fff;float:right;margin-right:80px;text-decoration:none;font-weight:bold;font-size:20px;background:transparent;border:none;}
	
	input[type="checkbox"]
	{
		margin-bottom:20px;
		cursor:pointer;
		
		
	}

	h1{color:#fff;background:#400040;text-align:center;}
	</style>
	</head>
	
	<body>
	
				
	
			
				
				
	<div class="container">
		
				<form  method="post">
						<input type="text" name="email" id="email" class="usname" required placeholder="&#x263A; Enter Username" ><br><br>
						<input type="password" name="password" id="pass" class="pass" required placeholder="&#x263A; Enter Password" ><br><br>
						
						
						<input type="checkbox" name="remember" value="1"><b style="color:#fff;">Запомнить</b><br/>
						<input type="submit" name="login" value="Войти &#x27A8;" class="btn-login"><br/><br/>
						<button id="clr"  name="clickk"></button>

					<br>
						<a style="text-decoration:none;" href="newuser.php"><input   type="button"   value="&#x263B;NewUser"  class="btn-newuser" ></a>
				
				</form>
	</div>
	
	
	
	</body>
</html>
<?php
if(isset($_COOKIE['email'])and isset($_COOKIE['pass']))
{
	$email=$_COOKIE['email'];
	$pass=$_COOKIE['pass'];
	
	echo $email;
	
	echo"<script>
	
	
	document.getElementById('email').value='$email';
		document.getElementById('pass').value='$pass';
	
	
	</script>";
	
	
}


?>






