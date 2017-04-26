<?php

class News
{
	/**
	*Return single news item with specified id
	*@param integer $id
	**/
	public static function getNewsItemById($id){
	
		$id = intval($id);
		
		if ($id){
			$db = Db::getConnection();
			
			//запрос
			$result = $db->query('SELECT * FROM star_wars WHERE id=' . $id);
			
			//вывод индексов в виде названий
			$result -> setFetchMode(PDO::FETCH_ASSOC);
			
			//получение данных
			$newsItem = $result -> fetch();
			
			return $newsItem;
		}
		
	}
	
	public static function getNewsList(){
		
		//подключение
		$db = Db::getConnection();
		
		$newsList = array();
		
		//формирование запроса
		$result = $db -> query('SELECT id, title, short_content, date FROM star_wars ORDER BY date DESC LIMIT 1');
		
		//вывод результатов
		$i = 0;
		while($row = $result -> fetch()){
			
			$newsList[$i]['id'] = $row['id'];
			$newsList[$i]['title'] = $row['title'];
			$newsList[$i]['date'] = $row['date'];
			$newsList[$i]['short_content'] = $row['short_content'];
			$i++;
			
		}
		
		return $newsList;
		
	}
	
}