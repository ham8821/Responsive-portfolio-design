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
        <div class="full-screen extra" id="parentextra">
            <div class="row" id="childextra">
              
                    <br><br><br><br><br>
                    <h2 class="extraheading hideme"> Little extra about me</h2>
                    <div class="row">
                    <div class="col-lg-6 extrabox hideme">Congratuations!<br> You are about to see more colors of me as a person!
                        <div class="imagewrap">
                            <div class="first">CREATE</div>
                            <img src="images/extra5" class="img-responsive" alt="">
                            <span class="sec">REFINE</span>
                            <span class="thr">EXECUTE</span>
                        </div>
                        <div>
                            <br>
                            <p class="define">If I define my personality into 3 words, It would be <b>Create, Refine</b> and <b>Execute</b>. Simply because I love creating, refining and executing. Not necessarily only talking about programming, I love the process of delivering best work of what is done, even when I have free time to spend on hobbies.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="row imgrow hideme">
                            <div class="extheading"> What I do for fun</div>
                            <div class="col-sm-4 col-lg-4">
                                <div class="hobbywrap">
                                <div class="overlay"></div>
                                    <img class="hop img-responsive" style="height:200px; margin-top:20px" src="images/radio.png" alt="">
                                    <div class="deshobby">KNTV: Radio host</div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-lg-4">
                            <div class="hobbywrap">
                            <div class="overlay"></div>
                                    <img class="hop img-responsive" style="height:200px;  margin-top:20px" src="images/coffee.jpg" alt="">
                                    <div class="deshobby">Barista_coffee lover</div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-lg-4">
                            <div class="hobbywrap">
                            <div class="overlay"></div>
                                    <img class="hop img-responsive" style="height:200px; width:270px;  margin-top:20px" src="images/writer.jpg" alt="">
                                    <div class="deshobby">Instagram writers: believe in power of inspirational quotes</div>
                                </div>
                            </div>
                        </div>
                        <div class="row imgrow hideme">
                            <div class="extheading"> What I find interesting these days</div>
                            <div class="col-sm-4 col-lg-4">
                                <div class="hobbywrap">
                                <div class="overlay"></div>
                                    <img class="hop img-responsive" style="height:200px; width:270px; margin-top:20px" src="images/react.png" alt="">
                                    <div class="deshobby">Powerful modern frameworks</div>

                                </div>
                            </div>
                            <div class="col-sm-4 col-lg-4">
                            <div class="hobbywrap">
                            <div class="overlay"></div>
                                    <img class="hop img-responsive" style="height:200px; width:270px; margin-top:20px" src="images/type.jpeg" alt="">
                                    <div class="deshobby">Typescript</div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-lg-4">
                            <div class="hobbywrap">
                            <div class="overlay"></div>
                                    <img class="hop img-responsive" style="height:200px; width:270px;  margin-top:20px" src="images/aws.png" alt="">
                                    <div class="deshobby">Deployment knowledge, Cloud computing</div>
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
    <section id="Contact">
        <div class="full-screen">
            <div class="row">
                <div class="container-fluid contactscreen col-12" style="height:100vh;">
                    <br><br><br><br><br>
                    <h2 class="contact">Let's build something together!</h2>
                    <br>
                    <div class="row">
                        <form class="contactfo" id="contactformname" method="POST" action="MAILTO:emma.hj.ham@gmail.com?subject=New request from your website" enctype="text/plain">
                            <div id="formbox" class="contactform col-sm-12 col-md-12 col-lg-12">
                                <div class="labelname"><label class="label">Name</label>*</div>
                                <div class="inputbox"><input name="From: " class="inputbox" type="text" required></div>
                                <br>
                                <div class="labelname"><label class="label">Email</label>*</div>
                                <div class="inputbox"><input name="Reply Email: " class="inputbox" type="email" required> </div>
                                <br>
                                <div class="labelname"><label class="label">Message</label>*</div>
                                <div class="inputbox"><textarea class="inputbox" name="Message: " cols="30" rows="10" placeholder="" required></textarea> </div>
                                <div class="inputbox"><button class="contactbutton" type="submit" id="formsubbtn">SUBMIT</button></div>
                            </div>
                            <div class="maildirection" id="secondbox" style="display:none">
                                <div class="mgs">
                                    Thanks for your interest, I will get back to you as soon as possible:)
                                </div>
                                <button class="gobackbutton" type="button" id="backbtn">Go back</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ---------------------------------------------------------------------------- -->
    <script>
        $('body').on('submit', 'form.contactfo', function() {
            var box = $('#formbox');
            var secondbox = $('#secondbox');

            setTimeout(function() {
                box.css('display', 'none');
            }, 500);
            setTimeout(function() {
                secondbox.css('display', 'block');
            }, 500);
            $("#backbtn").click(function() {
                setTimeout(function() {
                    secondbox.css('display', 'none');
                }, 500);
                setTimeout(function() {
                    box.css('display', 'block');
                }, 500);
            })
        })
    </script>
    <?php
    // include_once("partials/indicatorUp.php");
    include_once("partials/footer.php");
    include_once("partials/foot.php");
    ?>
</body>

</html>