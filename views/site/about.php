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
    <div class="inner clearfix">
    
    	<div class="post image-post">
            <img src="images/uploads/4.jpg" width="1000" height="667" />
            <span class="date">SEPTEMBER 3, 2014 BY WASSIM AWADALLAH</span>
            <h2><a href="">ENIM AVET QUIS EXERCITAION</a></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div>
        
    	<div class="post gallery-post">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol>
                
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="images/uploads/5.jpg" alt="...">
                      <div class="carousel-caption">
                        Image #1 Description Goes Here
                      </div>
                    </div>
                    <div class="item">
                      <img src="images/uploads/6.jpg" alt="...">
                      <div class="carousel-caption">
                        Image #2 Description Goes Here
                      </div>
                    </div>
                    <div class="item">
                      <img src="images/uploads/7.jpg" alt="...">
                      <div class="carousel-caption">
                        Image #2 Description Goes Here
                      </div>
                    </div>
                  </div>
                
                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
			<span class="date">SEPTEMBER 3, 2014 BY WASSIM AWADALLAH</span>
            <h2><a href="">GALLERY POST</a></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div>
        
    	<div class="post quote-post">
            <span class="date">SEPTEMBER 3, 2014 BY WASSIM AWADALLAH</span>
            <h2>QUESTION EVERYTHING GENERALLY THOUGHT TO BE OBVIOUS.</h2>
            <p>DIETER RAMS</p>
        </div>
        
    	<div class="post video-post">
        	<div class="embed-responsive embed-responsive-16by9">
            	<iframe class="embed-responsive-item" src="http://player.vimeo.com/video/32740428?title=0&amp;byline=0&amp;portrait=0" frameborder="0"></iframe>
            </div>
            <span class="date">SEPTEMBER 3, 2014 BY WASSIM AWADALLAH</span>
            <h2><a href="">VIDEO POST</a></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div>

</div>
	
</div>


<?php include ROOT . '/views/layouts/js.php'; ?>


</body>
</html>
