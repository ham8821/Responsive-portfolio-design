<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emma Ham_ portfolio_projects</title>

    <?php
    include_once("partials/head.php");
    include_once("css/style.php");
    // include_once("partials/work1.php");
    ?>
    <script>
        $(document).ready(function() {
            $('body').show();
            $('.projecthead').animate({
                'opacity': '1',
                'marginBottom': '0.1in'
            }, 1500);
        });
    </script>
</head>

<body id="topsection">
    <!-- navbar -->
    <?php
    include_once("partials/navbar.php");
    ?>
    <!-- /.navbar -->
    <!--head part  -->
    <section>

        <div class="row">
            <div class="col-12 headpart">
                <div class="projecthead">
                    <span class="projectmain">PROJECTS</span>
                    <span><button class="morebtn"><a href="https://github.com/ham8821"> More</a></button></span>
                </div>
            </div>
            <div class="col-12 workpage">
                <div class="workwrapper contatiner-fluid">

                    <div class="card">

                    <div class="col-12 imgcard">
                            <div class="imgwrapper">
                                <div class="overlay"></div>
                                <img class="workimg img-responsive" src="images/liquorlibrary.png" alt="">
                                <div class="buttonsrc"><a href="#"> View Source Code </a></div>

                            </div>
                        </div>
                        <div class="col-12 descard">
                            <div class="projectdescription">
                                <p class="projectname">Liquor Library</p>
                                <p class="projectarea">Web development <span>/Mar 2019-present</span></p>
                                <p class="projecttech">PHP, MySQL,HTML, CSS, JavaScript,<br> JQuery, Ajax,
                                    bootstrap 4 ,git, azure DevOps, AWS</p>
                                    <div class="w-like">
                      <span class="ion-ios-plus-outline"><img style="width:15px; height:15px; color: rgba(242, 201, 21, 1);" src="images/add-circular-button-outline-with-plus-sign.svg" alt=""></span>
                    </div>
                                <!-- <p class="projectcontext">Solving business problem in targeting online customers by
                                    delivering solid and desirable online web service.
                                    knowledge of software development and programming with
                                    understanding of initial flow, covering from database designing
                                    to testing to deliver the product.</p> -->

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="col-12 imgcard">
                            <img class="workimg img-responsive" src="images/liquorlibrary.png" alt="">
                        </div>

                    </div>
                    <div class="card">
                        <div class="col-12 imgcard">
                            <img class="workimg img-responsive" src="images/thrifters.png" alt="">
                        </div>

                    </div>
                    <div class="card">
                        <div class="col-12 imgcard">
                            <img class="workimg img-responsive" src="images/thrifters.png" alt="">
                        </div>

                    </div>
                    <div class="card">
                        <div class="col-12 imgcard">
                            <img class="workimg img-responsive" src="images/itonline.png" alt="">
                        </div>

                    </div>
                    <div class="card">
                        <div class="col-12 imgcard">
                            <img class="workimg img-responsive" src="images/itonline.png" alt="">
                        </div>
                    </div>
                    <div class="card">
                        <div class="col-12 imgcard">
                            <img class="workimg img-responsive" src="images/carrental.png" alt="">
                        </div>

                    </div>
                    <div class="card">
                        <div class="col-12 imgcard">
                            <img class="workimg img-responsive" src="images/carrental.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- head part ends -->
    <?php
    // include_once("partials/indicatorUp.php");
    include_once("partials/footer.php");
    include_once("partials/foot.php");

    ?>
</body>

</html>