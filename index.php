<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">;
	<style type="text/css">

		body {
			background-color: #f2f1ed;
		};

	</style>
</head>
	
<body>
	<div> <!-- 1. Все массивы создаем здесь-->
		<?php 
			 $id = ["1","2","3","4","5","6","7","8","9"];
             $name = ["Статья","Статья","Статья","Статья","Статья","Статья","Статья","Статья","Статья"];
             $img = ["img/1.jpg","img/2.jpg","img/3.jpg","img/4.jpg","img/5.jpg","img/6.jpg","img/7.jpg","img/8.jpg","img/9.jpg"];
             $opis = ["dolor","lorem","ipsum","bruh","idk","mid","a","b","pompa"];
             $database = [
                    ["id" => 1, "name" => "Статья", "img" => "img/1.jpg" , "opis" => "dolor"],
                    ["id" => 2, "name" => "Статья", "img" => "img/2.jpg", "opis" => "lorem"],
                    ["id" => 3, "name" => "Статья", "img" => "img/3.jpg", "opis" => "ipsum"],
                    ["id" => 4, "name" => "Статья", "img" => "img/4.jpg", "opis" => "bruh"],
                    ["id" => 5, "name" => "Статья", "img" => "img/5.jpg", "opis" => "idk"],
                    ["id" => 6, "name" => "Статья", "img" => "img/6.jpg", "opis" => "mid"],
                    ["id" => 7, "name" => "Статья", "img" => "img/7.jpg", "opis" => "a"],
                    ["id" => 8, "name" => "Статья", "img" => "img/8.jpg", "opis" => "b"],
                    ["id" => 9, "name" => "Статья", "img" => "img/9.jpg", "opis" => "pompa"]
                ];
		 ?>
	</div>

	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<h1 class="text-center">БЛОГ</h1>
		<hr>
		<div class="col-12 text-center" style=""> <!-- 2. выводите все элементы в этом диве -->
			 <?php 
				 for ($i=0; $i < 5; $i++) { 
                   echo "<h1>". $database[$i]["name"] . " " . $database[$i]["id"] ." </h1>";
                   echo "<img class='w-100' src='". $database[$i]["img"] ."'></img";
                   echo "<p>". $database[$i]["opis"]."</p>";
                }
			 ?>
		</div>
	</div>
</body>
</html>