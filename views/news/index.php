<!Doctype html>
<html>
	<head>
		<?php 
			//require_once ROOT . '/template/style/db_params.php'; // функции
			$title = "Views on this website"; // заголовок главной в браузере
			require_once "/template/blocks/head.php"; // подключение стилей
			//$news = getNews(3,$_GET["id"]);
		
		?>
		
	</head>
	<body>
		<?php require_once "/template/blocks/header.php" // подключение компонента шапки
		
		?>
		
		<div id ="wrapper">
			<div id="leftCol">
				
				<?php 
	// передает ссылку на страницу article.php, на которой элементы отображаются в соответствии с id статьи из базы данных
	/*
					for($i = 0; $i < count($news); $i++)
					{
						if ($i ==0)
							echo 
							"<div id ='bigArticle'>";
						else echo "<div class='article'>";
						
						
						echo '<img src ="img/'.$news[$i]["id"].'.jpg">
							<h2> '.$news[$i]["title"].' </h2>
							<p>'.$news[$i]["intro_text"].'</p>
							<a href="article.php?id='.$news[$i]["id"].'"><div class="more"> подробнее</div></a>
							</div>';
					
						if ($i == 0)
							echo "<div class=\"clear\"<br></div>";	
					} */
		// отображение картинок также в соответствии с id элемента
				?>
				
			</div>
			
			<?php require_once "/template/blocks/rightCol.php"  // подключение баннера
	
			?>
		</div>
		<?php require_once "/template/blocks/footer.php" // подключение футера
		
		?>
	
	</body>
</html>