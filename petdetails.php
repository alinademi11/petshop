<html>
<head>
<style>

*{margin:0%;}

body{background:#351c4e;}
#mainact{width:1000px;height:auto;background:#fff;margin-left:160px;box-shadow:5px 5px 5px #400040;border:2px solid #400040;}

#mainact h1{text-align:center;color:#fff;background:#400040;border-radius:4px;border:2px solid #fff;}
#mainact table{margin-left:200px;}
#mainact table tr td{font-size:25px;padding:5px;font-weight:bold;}
#mainact table tr td input{font-size:20px;padding:5px;width:300px;height:40px;border-radius:4px;border:2px solid rgb(188, 128, 255);margin-left:50px;}

</style>


</head>
<body>
<?php include("menubaradmin.php")?>

<form method="post" enctype="multipart/form-data">
<div id="mainact">
	<h1>Добавление товара</h1>
	<table>
	<tr>
	<td>Введите тип:</td>
	<td><input type="text" name="pettype" placeholder="тип товара"></td>
	</tr>
	<tr>
	<td>Введите название:</td>
	<td><input type="text" name="petname" placeholder="название товара"></td>
	</tr>
	<tr>
	<td>Введите цвет:</td>
	<td><input type="text" name="petcolor" placeholder="цвет товара"></td>
	</tr>
	<tr>
	<td>Введите стоимость:</td>
	<td><input type="text" name="petrate" placeholder="стоимость"></td>
	</tr>
	<tr>
	<td>Введите доп.инфу:</td>
	<td><input type="text" name="petkeyword" placeholder="описание"></td>
	</tr>
	
	<tr>
	<td>Введите image1:</td>
	<td><input type="file" name="petimg1"></td>
	</tr>
	<tr>
	<td>Введите image2:</td>
	<td><input type="file" name="petimg2"></td>
	</tr>
	
	
	
	</table>
		<input type="submit" name="click" value="Добавить товар" style="margin-top:20px;margin-bottom:20px;font-size:20px;margin-left:500px;text-align:center;padding:5px;border-radius:4px;border:2px solid rgb(188, 128, 255);background:#fff;">
</div>

</form>
</body>
</html>
<?php

		if(isset($_POST['click']))
		{
		include("db.php");
		
		$pettype=$_POST['pettype'];
		$petname=$_POST['petname'];
		$petcolor=$_POST['petcolor'];
		
		$petrate=$_POST['petrate'];
		
		$petkeyword=$_POST['petkeyword'];
		$petimage1=$_FILES['petimg1']['name'];
			$pet_img1_temp=$_FILES['petimg1']['tmp_name'];
			
			
			
			
			move_uploaded_file($pet_img1_temp,"petphotos/$petimage1");	
			$petimage2=$_FILES['petimg2']['name'];
			$pet_img2_temp=$_FILES['petimg2']['tmp_name'];
			
			
			
			
			move_uploaded_file($pet_img2_temp,"petphotos/$petimage2");	
		

			
			$petfoods=$_POST['petfoods'];
			
			$query=$con->prepare("insert into petdetails(pet_type,pet_name,pet_color,pet_Rate,pet_keywords,pet_img1,pet_img2)values('$pettype','$petname','$petcolor','$petrate','$petkeyword',  '$petimage1','$petimage2')");
			
			if($query->execute())
			{
				echo"<script>alert('Изменения сохранены')</script>";
			}
			else
			{
				echo"<script>alert('Изменения не сохранены')</script>";
			
			}
			
			
			
			
		

		

		}
?>