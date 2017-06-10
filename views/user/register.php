<!doctype html>

<html>

	<?php $title = 'Регистрация'; ?>
	
<head>
		<?php include ROOT . '/views/layouts/header.php'; ?>
</head>

<body class="home">

<?php include ROOT . '/views/layouts/menu.php'; ?>

<!-- \ Site Main -->
<div class="site-main">
    <div class="inner clearfix">
		<h2><a href=""><?php echo $title; ?></a></h2>
		<br>
            <!-- / Form -->
		       
                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

            <div class="comments clearfix">        
                <div class="comments-fields clearfix">
                    <form action="#" method="post">
                            <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>
                            <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/>
                            <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                            <input type="submit" name="submit" class="btn btn-default" value="Регистрация" />
                        </form>
                </div>
                
            </div>
            <!-- \ Form -->
		
     </div>
</div>
<!-- / Site Main -->
<?php include ROOT . '/views/layouts/js.php'; ?>
</body>
</html>
