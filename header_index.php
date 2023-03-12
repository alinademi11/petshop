<!DOCTYPE html>
<html>
<head>
<style>
*{margin:0%;}
#header{background:#351c4e;width:100%;height:150px;text-shadow: 5px 5px 5px #c926ed;box-shadow: 3px 3px 3px #000;}
#header img{height:150px}
#header h1{text-align:center;margin-top:-110px;color:#fff;}
#header ul li{float:right;margin-right:40px;font-size:24px;color:red;list-style-type:circle;margin-top:-20px;}
#header ul li a{color:white;text-decoration:none;}
</style>
</head>
<body>
<div id="header">
	<a href="index.php"><img style="123.png"></a>
	<h1>Зоомагазин</h1>
	
	
	
	<ul><?php 
	include("db.php");
						
				
	if(!isset($_COOKIE['usernameget']))
				{
					echo"<li><a href='login_pet.php'>Вход</a></li>
					<li><a href='newuser.php'>Регистрация</a></li>";
				}
				
				if(isset($_COOKIE['usernameget']))
				{
					
					$query=$con->prepare("select *from newuser where username='".$_COOKIE['usernameget']."'");
						$query->execute();
				
						$row=$query->fetch();
						
						$query21=$con->prepare("select *from addcart where  user_id='".$row['id']."' order by 1 desc");
						$query21->execute();
						$rcount=$query21->rowCount();
					echo"<li><a href='logout.php'>Logout</a></li>
						<li><a href='myaccount.php'>Account</a></li>
							<li><a href='carttable.php'>Cart (<b style='color:yellow;'>$rcount</b>)</a></li>";
				}
				
				?>
				
	</ul>
	<?php
	if(isset($_COOKIE['usernameget']))
				{
						echo"<h2 style='border-radius:4px;padding:10px;float:right;margin-right:-310px;margin-top:35px;color:#fff;border:1px solid aquamarine;'>Welcome ".$_COOKIE['usernameget']."</h2>";
				}?>
				<form method="post">
		<input type="text" name="search1" required style="margin-left:100px;margin-top:10px;width:300px;height:40px;border-radius:4px;border:1px solid #c438d1;">
		<input type="submit" name="search" value="Найти" style="position:relative;margin-left:10px;margin-top:-40px;width:70px;height:40px;border-radius:4px;border:1px solid #c438d1;background:#fff;color:#c438d1;">
	</form>
</div>
</body>
</html>
<?php

	if(isset($_POST['search']))
	{
		$keyword=$_POST['search1'];
		header("location:search.php?keyword=$keyword");
	}


?>