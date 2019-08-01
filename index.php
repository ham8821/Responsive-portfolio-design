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
                <div class="introscreen col-xs-12 col-md-12">
                    <div id="introductionbox">
                        <br><br><br><br>r><br><br><br><br>
                        <p class="jobtitle1">Front-end developer </p>
                        <p class="jobtitle" id="secondtitle">&nbsp &nbsp & Back-end developer</p>
                        <p class="intro">Since beginning my journey as a freelance designer nearly 8 years ago, I've done remote work for agencies, consulted for startups, and collaborated with talented people to create digital products for both business and consumer use. I'm quietly confident, naturally curious, and perpetually working on improving my chops one design problem at a time.</p>

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
                <div class="extra col-12">
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
                <div class="col-xs-12 col-md-12">
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
    <section id="footer">
        <br><br><br>
        <div class="row">
            <br>
            <div class="socialicons col-12">
                <ul>
                    <li><a href="#"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>

            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="footerline col-12">
                <p class="line">Programming is not about being better than others, it’s about whether you can work with others or not.
                </p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="codeline col-12">
                <div style="font-size: 2.5rem;">
                    <i id="codeicon" class="fa fa-code fa-lg" aria-hidden="true"></i>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="codeline col-12">
                <p class="line">
                    Handcrafted by me # emma.hj.ham@gmail.com
                </p>
            </div>
        </div>
        <br>

    </section>
    <?php
    include_once("partials/indicatorUp.php");
    // include_once("partials/footer.php");
    include_once("partials/foot.php");

    ?>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>

</html>