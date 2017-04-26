<?php
//правила соответствия между запросом и методом

return array(
	//'news/([0-9]+)' => 'news/view',
	'news/([0-9]+)' => 'news/view/$1',
	
	
	
	'news' => 'news/index', //передача actionIndex в newscontroller
	
	
	
	
	'product' => 'product/list', //передача actionList в productController
);

?>