<!DOCTYPE html>

<html>
	
<?php $title = 'Моя страница'; ?>
	
	<head>
		<?php include ROOT . '/views/layouts/header.php'; ?>
	</head>
	
<body>
	
<?php include ROOT . '/views/layouts/menu.php'; ?>
	
    <div class="site-main">
		<div class="inner clearfix">
            <h3>Кабинет пользователя</h3>
            <h4>Привет, <?php echo $user['name'];?>!</h4>
            <ul>
                <li><a href="/profile/edit">Редактировать данные</a></li>
                <li><a href="../user/logout">Выйти</a></li>
            </ul>
		</div>
	</div>

<?php include ROOT . '/views/layouts/js.php'; ?>
	
</body>
</html>
