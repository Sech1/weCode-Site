<?php
/**
 * Created by PhpStorm.
 * User: jaredmschooley
 * Date: 2/19/18
 * Time: 1:19 PM
 */

$redirect = "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <title>weCode</title>

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

    <!-- font awesome -->
    <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">

    <!-- bootstrap -->
    <link rel=\"stylesheet\" href=\"../assets/bootstrap/css/bootstrap.min.css\"/>

    <!-- animate.css -->
    <link rel=\"stylesheet\" href=\"../assets/animate/animate.css\"/>
    <link rel=\"stylesheet\" href=\"../assets/animate/set.css\"/>

    <!-- gallery -->
    <link rel=\"stylesheet\" href=\"../assets/gallery/blueimp-gallery.min.css\">

    <!-- favicon -->
    <link rel=\"shortcut icon\" href=\"../images/favicon.ico\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"../images/favicon.ico\" type=\"image/x-icon\">


    <link rel=\"stylesheet\" href=\"../assets/style.css\">

</head>

<body>
<div class=\"topbar animated fadeInLeftBig\"></div>

<!-- Header Starts -->
<div class=\"navbar-wrapper\">
    <div class=\"container\">

        <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\" id=\"top-nav\">
            <div class=\"container\">
                <div class=\"navbar-header\">


                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                            data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>

                </div>


                <!-- Nav Starts -->
                <div class=\"navbar-collapse  collapse\">
                    <ul class=\"nav navbar-nav navbar-right scroll\">
                        <li class=\"active\"><a href=\"#home\">Home</a></li>
                        <li><a href=\"#about\">About</a></li>
                        <li><a href=\"#agenda\">Agenda</a></li>
                        <li><a href=\"#faq\">FAQ</a></li>
                        <li><a href=\"#apply\">Apply</a></li>
                        <li><a href=\"#sponsors\">Sponsors</a></li>
                        <li><a href=\"#Team\">Team</a></li>
                    </ul>
                </div>
                <!-- #Nav Ends -->

            </div>
        </div>

    </div>
</div>
<!-- #Header Starts -->


<div id=\"home\">
    <!-- Slider Starts -->
    <div id=\"myCarousel\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
            <!-- Item 1 -->
            <div class=\"item active\">
                <img src=\"../images/Engineering_Building.jpg\" alt=\"banner\">
                <div class=\"carousel-caption\">
                    <div class=\"caption-wrapper\">
                        <div class=\"caption-info\">
                            <img src=\"../images/logo.png\" class=\"animated bounceInUp\" alt=\"logo\">
                            <h1>Innovation, Creation, Success</h1>
                            <p>April 21st, 2018|Presented by the SIUE Computer Science Department</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #Item 1 -->

<!-- Item 1 -->
<br>
<br>
<br>

<section class=\"register\" id=\"register\">
    <div class=\"container\">
                <div class=\"container\">
                    <div class=\"col-lg-12 text-center\">
                        <h2 class=\"section-heading\" align=\"center\">Form Submitted!</h2>
                        <hr class=\"primary\">
                    </div>
                </div>
                <div class=\"col-lg-12 text-center\">
                <div align='center'>
                    <span>Redirecting...</span>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
</section>
</body>
<a name=\"bottomOfPage\"></a>";

DEFINE('REDIRECT', $redirect);