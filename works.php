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
    ?>
    <script>
        $( document ).ready(function() {
        $('body').show();
         $('.projecthead').animate({'opacity':'1','marginLeft': '0.1in'},1500);
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 headpart">
                <div class="projecthead">
                    <span class="projectmain">PROJECT</span>
                    <span><button class="morebtn"><a href="https://github.com/ham8821"> More</a></button></span>
                </div>
            </div>
            <div class="col-12 workpage">

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