<?php
if(isset($_GET['id']))
	{
		
			include("db.php");
			$petid=$_GET['id'];
			$query=$con->prepare("select *from petdetails where pet_id='$petid'");
			
			$query->execute();
			$row=$query->fetch();
	}
?>
<html>
<head>
<style>
#mainact{width:1000px;height:auto;background:#fffff;margin-left:160px;box-shadow:5px 5px 5px #400040;border:2px solid #400040;}

#mainact h1{text-align:center;color:#fff;background:#400040;border-radius:4px;border:2px solid #fff;}
#mainact table{margin-left:200px;}
#mainact table tr td{font-size:25px;padding:5px;font-weight:bold;}
#mainact table tr td input{font-size:20px;padding:5px;width:300px;height:40px;border-radius:4px;border:2px solid aquamarine;margin-left:50px;}

</style>


</head>
<body>
<form method="post" enctype="multipart/form-data">
<div id="mainact">
	<h1>Изменение деталей</h1>
	<table>
	<tr>
	<td>Введите название:</td>
	<td><input type="text" name="petname" placeholder="Введите название" value="<?php echo "".$row['pet_name']."";?>"></td>
	</tr>
	<tr>
	<td>Введите категорию:</td>
	<td><input type="text" name="pettype" placeholder="Введите категорию" value="<?php echo "".$row['pet_type']."";?>"></td>
	</tr>
	<tr>
	<td>Введите вес:</td>
	<td><input type="text" name="petcolor" placeholder="Введите вес" value="<?php echo "".$row['pet_color']."";?>"></td>
	</tr>
	<tr>
	<td>Введите стоимость:</td>
	<td><input type="text" name="petrate" placeholder="Введите стоимость" value="<?php echo "".$row['pet_rate']."";?>"></td>
	</tr>
	<tr>
	<td>Введите описание:</td>
	<td><input type="text" name="petkeyword" placeholder="Введите описание" value="<?php echo "".$row['pet_keywords']."";?>"></td>
	</tr>
	
	<tr>
	<td>Введите img1 :</td>
	<td><input type="file" name="petimg1">
	
	<img src="petphotos/<?php echo"".$row['pet_img1']."";?>" style="width:60px;height:60px;"></td>
	</tr>
	<tr>
	<td>Введите image2  :</td>
	<td><input type="file" name="petimg2">
	
	<img src="petphotos/<?php echo"".$row['pet_img2']."";?>" style="width:60px;height:60px;"></td>
	</tr>
	
	
	
	
	</table>
		<input type="submit" name="click" value="update details" style="margin-top:20px;margin-bottom:20px;font-size:20px;margin-left:500px;text-align:center;padding:5px;border-radius:4px;border:1px solid #400040;background:#fff;">
</div>

</form>
</body>
</html>
<?php

		if(isset($_POST['click']))
		{
		
		$petname=$_POST['petname'];
		$pettype=$_POST['pettype'];
		$petcolor=$_POST['petcolor'];
		
		$petrate=$_POST['petrate'];
		$petfeature1=$_POST['petfeature1'];
		$petfeature2=$_POST['petfeature2'];
		$petkeyword=$_POST['petkeyword'];
		
		if($_FILES['petimg1']['tmp_name']=="")
			{
				
			}
			else
			{
				$petimage1=$_FILES['petimg1']['name'];
			$pet_img1_temp=$_FILES['petimg1']['tmp_name'];												
			move_uploaded_file($pet_img1_temp,"petphotos/$petimage1");	
		
				$up_img2=$con->prepare("update petdetails set pet_img1='$petimage1' where pet_id='$petid'");
			
				$up_img2->execute();
			
			}
			if($_FILES['petimg2']['tmp_name']=="")
			{
				
			}
			else
			{
				$petimage2=$_FILES['petimg2']['name'];
			$pet_img2_temp=$_FILES['petimg2']['tmp_name'];												
			move_uploaded_file($pet_img2_temp,"petphotos/$petimage2");	
		
				$up_img2=$con->prepare("update petdetails set pet_img2='$petimage2' where pet_id='$petid'");
			
				$up_img2->execute();
			
			}
			
			
			$petfoods=$_POST['petfoods'];
			
			$query=$con->prepare("update petdetails set pet_name='$petname',pet_type='$pettype',pet_color='$petcolor',pet_Rate='$petrate',pet_keywords='$petkeyword' where pet_id='$petid'");
			
			if($query->execute())
			{
				echo"<script>alert('Обновилось')</script>";
				 echo"<script>window.open('viewallpetdetails.php','_self')</script>";
			
			}
			else
			{
				echo"<script>alert('Не обновилось')</script>";
			
			}
			
			
			
			
		

		

		}
?>