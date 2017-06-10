<?php
return array(
	
	// 	в коментах указывать #Db, Model, controller, view
	
	/* ==== news. News, NewsController, news === */
	'news/([0-9]+)' => 'news/view/$1',
	'news' => 'news/index', 
	
	/* ==== ., SiteController, site === */
    '' => 'site/index', // главная страница, actionIndex в SiteController
	'about' => 'site/about', // страница о проекте
	//'([0-z]+)' => 'site/error404', // страница ошибок
	
	/* ==== user. User, UserController, user === */
	'user/login' => 'user/login',
    'user/register' => 'user/register',
    'user/logout' => 'user/logout',
	
	/* ==== profile. Profile, ProfileController, prorile === */
	'profile' => 'profile/index',
    'profile/edit' => 'profile/edit',
	'profile/delete' => 'profile/delete',
	
	/* ==== profile. Profile, ProfileController, prorile === */   
    'user/post/create' => 'userPost/create',
    'user/post/update/([0-9]+)' => 'userPost/update/$1',
    'user/post/delete/([0-9]+)' => 'userPost/delete/$1',
    'user/post' => 'userPost/index',
	
	
	);