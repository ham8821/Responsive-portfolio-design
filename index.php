<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emma Ham_ portfolio_mainpage</title>

    <?php
    include_once("partials/head.php");
    ?>
</head>

<body id="topsection">
    <!-- navbar -->
    <nav class="navbar-fixed-top navbar-default">
        <div class="container-fluid">
            <div id="navbar" class="navbar-collapse">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="images/code-fork-symbol2.png" alt="logo" style="height:32px;">Emma Ham</a>
                </div>


                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#intro">Home</a></li>
                        <li><a href="#introduction">About</a></li>
                        <li><a href="#works">Projects</a></li>
                        <li><a href="#Contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav><!-- /.navbar -->
    <!-- page to greet people ------------------------------------------------------ -->
    <header id="intro">
        <div class="container-fluid full-screen">
            <div class="row">
                <div class="mainscreen col-xs-12 col-sm-12 col-md-12" style="height: 100vh;">

                    <p class="greetingtitle">Hi, I'm Emma. Nice to meet you.</p>
                </div>
            </div>
        </div>
    </header>
    <!-- ---------------------------------------------------------------------------- -->



    <!-- page to greet people ------------------------------------------------------ -->
    <section id="introduction">

        <div class="container-fluid full-screen">
            <div class="row">
                <div class="introscreen col-xs-12 col-md-12">
                    <div id="introductionbox">

                        <p class="jobtitle" style=" margin-top: 50px;">Front-end developer </p>
                        <p class="jobtitle" style=" margin-bottom: 20px;">&nbsp &nbsp & Back-end developer</p>

                        <div class="collapse navbar-collapse" id="extrades">
                            <p class="intro">Having completed bachelor degree in Business Administration and Graduate Diploma in Information Technology this year, I've been always pursuing learning new things day by day. <br> What I always make sure in daily basis is whether I have learnt new things apart from school study scope, having personal projects aside all the time. At the moment, I am working for this liquor speacialist company, building their official website as a contract developer. If you are interested, you can have a look some of my works here.</p>
                        </div>
                        <br>
                        <p class="intro"> I'm quietly confident, naturally curious, and perpetually working on improving my chops one design problem at a time.</p>
                        <button type="button" style="background-color:black; color: white; border-radius:5px; float:none; font-size:1em; border:none;" class="navbar-toggle readmore" data-toggle="collapse" data-target="#extrades">
                            <span>READ MORE</span>
                        </button>

                        <div class="row">
                            <div class="skillbtn">
                                <div class="buttons">
                                    <button class="btn-hover color-8">HTML5</button>
                                    <button class="btn-hover color-8">CSS</button>
                                    <button class="btn-hover color-8">Javascript</button>
                                    <button class="btn-hover color-8">bootstrap</button>
                                    <button class="btn-hover color-8">Jq</button>
                                    <button class="btn-hover color-8">BUTTON</button>
                                    <button class="btn-hover color-8">BUTTON</button>
                                    <button class="btn-hover color-8">BUTTON</button>
                                    <button class="btn-hover color-8">BUTTON</button>
                                    <button class="btn-hover color-8">BUTTON</button>
                                    <button class="btn-hover color-8">BUTTON</button>
                                </div>
            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ---------------------------------------------------------------------------- -->

    <!-- page to greet people ------------------------------------------------------ -->
    <section id="works">
        <div class="container-fluid full-screen">
            <div class="row">
                <div class="workscreen col-xs-12 col-md-12" style="height: 100vh;">
                    <br><br><br><br><br><br><br> <br><br><br><br><br><br><br>
                    <p class="recentwork">My recent Projects</p>

                    <a href="#"> <span class="iconify" data-icon="jam:chevron-circle-right" data-inline="false" onclick="transitionToPage('projects.php')"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- ---------------------------------------------------------------------------- -->

    <!-- page to greet people ------------------------------------------------------ -->
    <section id="extra">
        <div class="container-fluid full-screen">
            <div class="row">
                <div class="extra col-12" style="height: 100vh;">
                    <br><br><br><br><br>
                    <h2 class="extraheading"> Little extra about me</h2>
                    <p class="extrabox">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio consectetur temporibus at ut. Atque quidem reprehenderit laudantium tempore voluptate dignissimos voluptatum magnam impedit, dolorem aliquid, non fuga alias sequi Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum doloremque ipsum architecto iure tenetur distinctio praesentium consequuntur, repellendus nulla explicabo vero, iusto in? Excepturi assumenda, quam sapiente sunt dolorem placeat?></p>
                </div>
            </div>
        </div>
    </section>
    <!-- ---------------------------------------------------------------------------- -->

    <!-- page to greet people ------------------------------------------------------ -->
    <section class="contactscreen" id="Contact">
        <div class="container-fluid full-screen">
            <div class="row">
                <div class="col-xs-12 col-md-12" style="height: 100vh;">
                    <br><br><br><br><br>
                    <h2 class="contact">Let's build something togather!</h2>
                    <br>
                    <div class="row">
                        <div class="contactform col-sm-12 col-md-12 col-lg-12">
                            <div class="labelname"><label class="label">Name</label>*</div>
                            <div class="inputbox"><input class="inputbox" type="text" required></div>
                            <div class="labelname"><label class="label">Email</label>*</div>
                            <div class="inputbox"><input class="inputbox" type="text" required> </div>
                            <div class="labelname"><label class="label">Message</label>*</div>
                            <div class="inputbox"><textarea class="inputbox" name="" id="" cols="30" rows="10" placeholder="" required></textarea> </div>
                            <div class="inputbox"><button class="contactbutton">SUBMIT</button></div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ---------------------------------------------------------------------------- -->

    <?php
    // include_once("partials/indicatorUp.php");
    include_once("partials/footer.php");
    include_once("partials/foot.php");

    ?>
</body>

</html>
<style>
    

/* button design */
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.buttons {
  margin: 10px auto;
  width: 80%;
  text-align: center;
}

.btn-hover {
  width: 120px;
  font-size: 14px;
  font-weight: 600;
  color: #fff;
  cursor: pointer;
  margin: 20px;
  height: 40px;
  text-align:center;
  border: none;
  background-size: 300% 100%;

  border-radius: 50px;
  moz-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}

.btn-hover:hover {
  background-position: 100% 0;
  moz-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}

.btn-hover:focus {
  outline: none;
}

.btn-hover.color-1 {
  background-image: linear-gradient(to right, #25aae1, #40e495, #30dd8a, #2bb673);
  box-shadow: 0 4px 15px 0 rgba(49, 196, 190, 0.75);
}
.btn-hover.color-2 {
  background-image: linear-gradient(to right, #f5ce62, #e43603, #fa7199, #e85a19);
  box-shadow: 0 4px 15px 0 rgba(229, 66, 10, 0.75);
}
.btn-hover.color-3 {
  background-image: linear-gradient(to right, #667eea, #764ba2, #6B8DD6, #8E37D7);
  box-shadow: 0 4px 15px 0 rgba(116, 79, 168, 0.75);
}
.btn-hover.color-4 {
  background-image: linear-gradient(to right, #fc6076, #ff9a44, #ef9d43, #e75516);
  box-shadow: 0 4px 15px 0 rgba(252, 104, 110, 0.75);
}
.btn-hover.color-5 {
  background-image: linear-gradient(to right, #0ba360, #3cba92, #30dd8a, #2bb673);
  box-shadow: 0 4px 15px 0 rgba(23, 168, 108, 0.75);
}
.btn-hover.color-6 {
  background-image: linear-gradient(to right, #009245, #FCEE21, #00A8C5, #D9E021);
  box-shadow: 0 4px 15px 0 rgba(83, 176, 57, 0.75);
}
.btn-hover.color-7 {
  background-image: linear-gradient(to right, #6253e1, #852D91, #A3A1FF, #F24645);
  box-shadow: 0 4px 15px 0 rgba(126, 52, 161, 0.75);
}
.btn-hover.color-8 {
  background-image: linear-gradient(to right, #29323c, #485563, #2b5876, #4e4376);
  box-shadow: 0 4px 15px 0 rgba(45, 54, 65, 0.75);
}
.btn-hover.color-9 {
  background-image: linear-gradient(to right, #25aae1, #4481eb, #04befe, #3f86ed);
  box-shadow: 0 4px 15px 0 rgba(65, 132, 234, 0.75);
}
.btn-hover.color-10 {
      background-image: linear-gradient(to right, #ed6ea0, #ec8c69, #f7186a , #FBB03B);
  box-shadow: 0 4px 15px 0 rgba(236, 116, 149, 0.75);
}
.btn-hover.color-11 {
     background-image: linear-gradient(to right, #eb3941, #f15e64, #e14e53, #e2373f);  box-shadow: 0 5px 15px rgba(242, 97, 103, .4);
}


    </style>