<!doctype html>

<html>

	<?php $title = 'Structure only'; ?>
	<head>
		<?php include ROOT . '/views/layouts/header.php'; ?>
	</head>

<body class="home">
<?php include ROOT . '/views/layouts/menu.php'; ?>

<!-- \ Site Main -->
<div class="site-main">

    <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
					<br>
                    <li><a href="/">Админпанель</a></li>
                    <li class="active">Управление товарами</li>
                </ol>
            </div>

            <a href="/user/post/create" class="btn btn-default back"><i class="fa fa-plus"></i> Добавить товар</a>
            
            <h4>Список товаров</h4>

            <br/>

            <table class="table-bordered table-striped">
                <tr>
                    <th>ID товара</th>
                    <th>Артикул</th>
                    <th>Название товара</th>
                    <th>Цена</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($productsList as $product): ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><?php echo $product['code']; ?></td>
                        <td><?php echo $product['name']; ?></td>
                        <td><?php echo $product['price']; ?></td>  
                        <td><a href="/admin/product/update/<?php echo $product['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/admin/product/delete/<?php echo $product['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
	</div>
</div>

<?php include ROOT . '/views/layouts/js.php'; ?>
</body>
</html>
