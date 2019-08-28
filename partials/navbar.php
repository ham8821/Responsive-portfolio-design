<?php 
// Program to display complete URL 
  
$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] 
                === 'on' ? "https" : "http") . "://" . 
          $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']; 
  
// Display the complete URL 
echo $link; 
?> 
<nav class="navbar-fixed-top navbar-default opaque-navbar">
        <div class="container-fluid">
            <div id="navbar" class="navbar-collapse full-screen">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Emma Ham <a class="logoline"></a></a><br>
                   
                </div>


                <div class="collapse navbar-collapse" id="myNavbar">
                    <?php
                    if($link =='https://emmaham-portfolio.herokuapp.com/works.php' or $link =='http://localhost/portfolio/Responsive-portfolio-design/works.php'){
                        echo'  <ul class="nav navbar-nav navbar-right">
                        <li class="active navlist"><a href="index.php">Home</a></li>
                        <li class="navlist"><a href= "index.php #introduction">About</a></li>
                        <li class="navlist"><a href="works.php">Projects</a></li>
                        <li class="navlist"><a href="index.php #Contact">Contact</a></li>';   
                    }
                    else if ($link =='https://emmaham-portfolio.herokuapp.com/index.php' or $link =='http://localhost/portfolio/Responsive-portfolio-design/index.php'){
                        echo'  <ul class="nav navbar-nav navbar-right">
                              <li class="active navlist"><a href="index.php">Home</a></li>
                              <li class="navlist"><a href= "#introduction">About</a></li>
                              <li class="navlist"><a href="works.php">Projects</a></li>
                              <li class="navlist"><a href="#Contact">Contact</a></li>';
                    }
                   else{
                    echo'  <ul class="nav navbar-nav navbar-right">
                    <li class="active navlist"><a href="index.php">Home</a></li>
                    <li class="navlist"><a href= "#introduction">About</a></li>
                    <li class="navlist"><a href="works.php">Projects</a></li>
                    <li class="navlist"><a href="#Contact">Contact</a></li>';
                   }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>