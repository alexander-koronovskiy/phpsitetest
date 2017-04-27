<meta charset="utf-8">
<title><?=$title?></title>
<style>
	 @charset "utf-8";
*{  margin : 0;
	padding: 0;
	outline: none;
}

html{height: 100%}

body {
	width: 100%;
	height: 100%;
	background-color: #fff;
	color: #333;
	font-family: Arial, sans-serif;
	font-size: 1em;
	line-height: 115%;
}

img {
	max-width: 100;
	height: auto;
	width: auto\9; 
}

a {
	color: #eeee;
	text-decoration: none;
}

a, a:hover {
	-weblit-transition: all.6s ease;
	-moz-transition: all.6s ease;
	-ms-transition: all.6s ease;
	-o-transition: all.6s ease;
	transition: all.6s ease;
}

.clear {
	clear: both;
}

/*стили для шапки*/

header {
	width: 98%;
	float: left;
	padding: 1%;
	background-color: #fafafa;
	border-bottom: 2px solid silver;
	margin-bottom: 20px;
	
}

header #home a {
	width: 25%;
	float: left;
	
	color: #939393;
	font-size: 2em;
	font-family: sans-serif;
	
}

header #services a {
	width: 25%;
	float: left;
}

header #programs a {
	width: 25%;
	float: right;
}

header #aboutUs a {
	width: 25%;
	float: right;
}

/*стили для всего документа*/

#wrapper {
	width: 80%;
	margin-left: 10%;
	float: left;
}


/*стили для левой колонки*/


/* добавление адаптивности */

@media(min-width: 800px){
#wrapper #leftCol {
	width: 60%;
	margin-right: 10%;
	float: left;
	}}

@media(max-width: 799px){
#wrapper #leftCol {
	width: 100%;
	margin-right: 5%;
	float: left;
	}}


#wrapper #leftCol #bigArticle {
	width: 78%;
	margin-left: 10%;
	background-color: #f6f6f6;
	padding: 1%;
	float: left;
}

#wrapper #leftCol #bigArticle img, #wrapper #leftCol .article img {
	width: 100%;
	float: left;
}

#wrapper #leftCol #bigArticle h2, #wrapper #leftCol .article h2 {
	font-weight: normal;
	font-size: 1.4em;
	color: #9a9a9a;
	font-family: sans-serif;
}

#wrapper #leftCol #bigArticle p, #wrapper #leftCol .article p {
	width: 90%;
	margin-left: 5%;
}

#wrapper #leftCol #bigArticle div.more, #wrapper #leftCol .article div.more {
	padding: 5px;
	border-radius: 5px;
	background-color: #878787;
	color: #ffff;
	width: 100px;
	text-align: center;
	margin-top: 10px;
}

#wrapper #leftCol #bigArticle div.more:hover, #wrapper #leftCol .article div.more:hover {
	background-color: #a2a2;	
}

#wrapper #leftCol .article {
	width: 40%;
	margin-left: 5%;
	background-color: #f6f6;
	padding: 1%;
	float: left;
	
}

/*стили для правой колонки*/


#wrapper #rightCol {
	width: 20%;
	float: left;
}

#wrapper #rightCol .banner {
	width: 100%;
	float: left;
	margin-bottom: 20px;
	
	
}

/*стили для footer*/

footer {
	width: 98%;
	float: left;
	padding: 1%;
	background-color: #faf;
	border-top: 2px solid silver;
	margin-top: 10px;
}

footer #social {
	float: left;
	width: 50%;
}

footer #rights {
	float: right;
	width: 50%;
	text-align: right;
	font-size: 1.1em;
}

/*стили для странички о нас*/
#wrapper #leftCol #about_us {
	width: 80%;
	height: 700px;
	margin-left: 10%;
	
}

/*стили для обратной связи*/
#wrapper #leftCol input, #wrapper #leftCol textarea {
	width: 50%;
	margin-left: 40%;
	float: left;
	border-radius: 5px;
	border: 2px solid silver;
	padding: 10px;
	color: #afebf8;
	margin-bottom: 10px;
	font-size: 1.2em;
	resize: none;
}

#wrapper #leftCol input:focus, #wrapper #leftCol textarea:focus{
	border: 2px solid #f78080;
}

#wrapper #leftCol input#done:hover{
	border: 2px solid #f8d881;
	cursor: pointer;
}

#wrapper #leftol #messageShow {
	font-size: 1.2em;
	float: right;
	color: red;
	width: 100%;
	text-align: center;
}
</style>