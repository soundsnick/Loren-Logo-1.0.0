<?php 
	require_once('database.php');
	global $connect;
	$category = $_POST['category'];
	$page = $_POST['page'];
	$query = mysqli_query($connect, "SELECT * FROM articles WHERE category='$category' ORDER BY `id` DESC LIMIT {$page}, 3");
	while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
		echo '<div class="grid-item animated flash">
				<div class="article" style="background: black;">
					<img src="img/posts/'.$row['img'].'" style="opacity: .5">
					<div class="article_content" style="background: #FFF;">
						<h4 class="article_title">'.$row['title'].'</h4>
						<p class="article_paragraph">'.$row['short'].'</p>
						<a class="button" href="view.php?article='.$row['id'].'">Подробнее</a>
					</div>
				</div>
			  </div>';
	}
 ?>