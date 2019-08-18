<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emma Ham_ portfolio_mainpage</title>

    <?php
    include_once("partials/head.php");
    include_once("css/style.php");
    ?>
</head>

<body id="topsection">
    <!-- navbar -->
    <?php
    include_once("partials/navbar.php");
    ?>
    <!-- /.navbar -->
    <!-- page to greet people ------------------------------------------------------ -->
    <header id="intro">
        <div class="container-fluid full-screen">
            <div class="row">
                <div class="mainscreen col-xs-12 col-sm-12 col-md-12">

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
                <div class="introscreen col-xs-12 col-md-12" id="parentjob">
                    <div id="introductionbox">

                        <p class="jobtitle hideme" style=" margin-top: 50px; margin-right:80px;">Front-end developer </p>
                        <p class="jobtitle hideme" style=" margin-bottom: 20px; margin-left:80px;">&nbsp &nbsp & Back-end developer</p>

                        <div class="collapse navbar-collapse" id="extrades">
                            <p class="intro hideme">Having completed bachelor degree in Business Administration and Graduate Diploma in Information Technology this year, I've been always pursuing learning new things day by day. <br> What I always make sure in daily basis is whether I have learnt new things apart from school study scope, having personal projects aside all the time. At the moment, I am working for this liquor speacialist company, building their official website as a contract developer. If you are interested, you can have a look some of my works here.</p>
                        </div>
                        <br>
                        <p class="intro hideme"> I'm quietly confident, naturally curious, and perpetually working on improving my chops one design problem at a time.</p>
                        <button type="button" style="background-color:black; margin:0; color: white; border-radius:5px; float:none; font-size:0.8em; border:none;" class="navbar-toggle readmore" data-toggle="collapse" data-target="#extrades">
                            <span>READ MORE</span>
                        </button>

                        <div class="row">
                            <div class="buttons">
                                <div class="skillbtn hideme col-12">
                                    <button class="btn-hover color-7">HTML5</button>
                                    <button class="btn-hover color-7">CSS</button>
                                    <button class="btn-hover color-7">Javascript</button>
                                    <button class="btn-hover color-7">bootstrap</button>
                                    <button class="btn-hover color-7">JQuery</button>
                                    <button class="btn-hover color-7">Ajax</button>
                                    <button class="btn-hover color-7">React.js</button>
                                    <button class="btn-hover color-7">Java</button>
                                    <button class="btn-hover color-7">PHP</button>
                                    <button class="btn-hover color-7">MySQL</button>
                                    <button class="btn-hover color-7">git</button>
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
                <div class="workscreen col-xs-12 col-md-12">
                    <br><br><br><br><br><br><br> <br><br><br><br><br><br><br>
                    <p class="recentwork hideme">My recent Projects</p>

                    <div class="iconbox hideme"><a href="#"> <span class="iconify" data-icon="jam:chevron-circle-right" data-inline="false" onclick="transitionToPage('works.php')"></span></a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ---------------------------------------------------------------------------- -->

    <!-- page to greet people ------------------------------------------------------ -->
    <section id="extra">
        <div class="full-screen" id="parentextra">
            <div class="row" id="childextra">
                <div class="extra col-12">
                    <br><br><br><br><br>
                    <h2 class="extraheading hideme"> Little extra about me</h2>
                    <p class="extrabox hideme">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio consectetur temporibus at ut. Atque quidem reprehenderit laudantium tempore voluptate dignissimos voluptatum magnam impedit, dolorem aliquid, non fuga alias sequi Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum doloremque ipsum architecto iure tenetur distinctio praesentium consequuntur, repellendus nulla explicabo vero, iusto in? Excepturi assumenda, quam sapiente sunt dolorem placeat?></p>
                </div>
            </div>
        </div>
    </section>
    <!-- ---------------------------------------------------------------------------- -->

    <!-- page to greet people ------------------------------------------------------ -->
    <section id="Contact">
        <div class="full-screen">
            <div class="row">
                <div class="container-fluid contactscreen col-12" style="height:100vh;">
                    <br><br><br><br><br>
                    <h2 class="contact">Let's build something together!</h2>
                    <br>
                    <div class="row">
                        <form method="POST" action="MAILTO:emma.hj.ham@gmail.com?subject=New request from your website" enctype="text/plain">
                            <div class="contactform col-sm-12 col-md-12 col-lg-12">
                                <div class="labelname"><label class="label">Name</label>*</div>
                                <div class="inputbox"><input name="From: " class="inputbox" type="text" required></div>
                                <br>
                                <div class="labelname"><label class="label">Email</label>*</div>
                                <div class="inputbox"><input name="Reply Email: " class="inputbox" type="text" required> </div>
                                <br>
                                <div class="labelname"><label class="label">Message</label>*</div>
                                <div class="inputbox"><textarea class="inputbox" name="Message: " cols="30" rows="10" placeholder="" required></textarea> </div>
                                <div class="inputbox"><button class="contactbutton" type="submit">SUBMIT</button></div>
                            </div>
                        </form>
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