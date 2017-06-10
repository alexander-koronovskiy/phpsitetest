<!doctype html>

<html>

	<?php $title = 'Редактирование профиля'; ?>
	
	<head>
		<?php include ROOT . '/views/layouts/header.php'; ?>
	</head>

<body class="home">

<?php include ROOT . '/views/layouts/menu.php'; ?>

<!-- \ Site Main -->
<div class="site-main">
	<div class="inner clearfix">
	            <div class="comments clearfix">        
                <?php if ($result): ?>
					<div class="col-sm-6 col-sm-offset-4 padding-right">
						<p>Данные отредактированы!</p>
					</div>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <!--sign up form-->
                        <h2>Редактирование данных</h2>
                        <form action="#" method="post">
                            <p>Имя:</p>
                            <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>
                            <p></p>
                            <p>Пароль:</p>
                            <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                            <p></p>
                            <input type="submit" name="submit" class="btn btn-default" value="Сохранить" />
                        </form>
                    <!--/sign up form-->
                <?php endif; ?>
					
            </div>
		</div>
	</div>

<?php include ROOT . '/views/layouts/js.php'; ?>


</body>
</html>
