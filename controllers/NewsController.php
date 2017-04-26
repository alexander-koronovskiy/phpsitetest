<?php

include_once ROOT . '/models/News.php';

class NewsController
{
	public function actionIndex(){
		
		//обращение статически к методам в модели News
		$newsList = array();
		$newsList = News::getNewsList();
		
		print_r($newsList);
		
		require_once(ROOT. '/views/news/index.php');
		
		return true;
	}
	
	public function actionView($id)
	{
		if ($id){
			$newsItem = News::getNewsItemById($id);
			
			print_r($newsItem);
			echo 'actionView';
		}
		
		return true;
	}
}