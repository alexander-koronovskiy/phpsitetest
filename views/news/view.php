<!DOCTYPE html>

<html>
		<?php $title = $newsItem['title']; ?>
	
	<head>
		<?php include ROOT . '/views/layouts/header.php'; ?>
	</head>
	
<body>

<?php include ROOT . '/views/layouts/menu.php'; ?>

<div class="site-main">
    <div class="inner clearfix">	

				<div id="content">
					<div class="post">
						<h2 class="title"><a href='/news/<?php echo $newsItem['id'] ;?>'><?php echo $newsItem['title'].' # '.$newsItem['id'];?></a></h2>
						<p class="meta">Posted by <a href="#"><?php echo $newsItem['author_name'];?></a> on <?php echo $newsItem['date'];?>
							&nbsp;&bull;&nbsp; <a href='/news/' class="permalink"> Back to HomePage</a></p>
						<div class="entry">
							<p><img src="../../uploads/images/<?php echo $newsItem['id'] ;?>.jpg" width="600" height="300" alt="" /></p>
							<p><?php echo $newsItem['short_content'];?></p>
						</div>
					</div>
					<p><a href='/news/' class="permalink"> Back to HomePage</a></p>
					<div style="clear: both;">&nbsp;</div>
				</div>
				
				<!-- end #content -->

	</div>
</div>
	<!-- end #page -->
	
	<?php include ROOT . '/views/layouts/js.php'; ?>
	
</body>
</html>
