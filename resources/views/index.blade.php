<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:900&display=swap" rel="stylesheet"> 
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Sithivili | Let's Talk</title>
</head>
<body>
    <!--Head starts-->
    <div class="header">
        <!--Navbar starts-->
        <div class="navigation">
            <nav class="navbar navbar-expand-lg fixed-top navbar-light">
                <div class="container"> 
                    <a class="navbar-brand" href="#"> <p><img src="{{URL::asset('/images/sithivili_logo1.png')}}" class="logo-img">  Sithivili</p>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"  id="active">
                            <a class="nav-link" href="\">Home
                            <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="download">Download</a>
                        </li>
                        <li class="nav-item" >
                            <a class="nav-link" href="about-us">About Us</a>
                               
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="join-us">Join Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact-us">Contact Us</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!--Navbar ends-->
        <h1 class="heading-main">Your Story is not over yet;</h1>
        <h4 class="heading-sub"> Never be afraid to reach out for help </h4>
        <div class="letstalk-btn">Lets talk!</div> 
    </div>
    <!--Head ends-->

    <!--content starts-->
    <div class="container" id="desktop_only">

        <!--about us heading  starts-->
        <div class="row">
            <div class="col-md-12"><h2 class="heading-sec">Who we are</h4></div>
        </div>
        <!--about us heading  ends-->

        <!--about us content starts-->
        <div class="row" id="section">
            <div class="col-md-6">
                <p class="tagline"> Tagline about us </p>
                <p class="des"> Brief description about us goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                <a href="about-us"><div class="sec-btn">Learn more <i class="fas fa-arrow-right"></i></div> </a>
            </div>

            <div class="col-md-6" id="img-section">
                <img src= "{{URL::asset('/images/aboutUs.png')}}" class="about-img">
            </div>
        </div>
        <!--about us content ends-->


        <!--join us heading  starts-->
        <div class="row">
            <div class="col-md-12"><h2 class="heading-sec">Volunteer Opportunities</h4></div>
        </div>
        <!--join us heading  ends-->

        <!--joim us content starts-->
        <div class="row" id="section">
            <div class="col-md-6" id="img-section">
           <img src="{{URL::asset('/images/volunteer.png')}}" class="volunteer-img">

                
            </div>

            <div class="col-md-6">
                <p class="tagline"> Tagline about joining us </p>
                <p class="des"> Brief description about joining us goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                <a href="join-us"><div class="sec-btn">Join Us <i class="fas fa-arrow-right"></i></div></a>
            </div>
        </div>
        <!--join us content ends-->


        <!--contact us heading  starts-->
        <div class="row">
            <div class="col-md-12"><h2 class="heading-sec">Contact Us</h4></div>
        </div>
        <!--contact us heading  ends-->

        <!--contact us content starts-->
        <div class="row" id="section">
            <div class="col-md-6">
                <p class="tagline"> Tagline about contact us </p>
                <p class="des"> Brief description about contact us goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                <a href="#"><div class="sec-btn">Contact Us <i class="fas fa-arrow-right"></i></div> </a>
            </div>

            <div class="col-md-6">
            <img src= "{{URL::asset('/images/contact-us.png')}}" class="contact-img">
            </div>
        </div>
        <!--contact us content ends-->
    </div>


    <div class="container" id="mobile_only">

        <!--about us heading  starts-->
        <div class="row">
            <div class="col-md-12"><h2 class="heading-sec">Who we are</h4></div>
        </div>
        <!--about us heading  ends-->

        <!--about us content starts-->
        <div class="row" id="section">
            <div class="col-md-12">
                <p class="tagline"> Tagline about us </p>
                <p class="des"> Brief description about us goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                <div class="sec-btn">Learn more <i class="fas fa-arrow-right"></i></div> 
            </div>

        </div>
        <!--about us content ends-->


        <!--join us heading  starts-->
        <div class="row">
            <div class="col-md-12"><h2 class="heading-sec">Volunteer Opportunities</h4></div>
        </div>
        <!--join us heading  ends-->

        <!--joim us content starts-->
        <div class="row" id="section">

            <div class="col-md-12">
                <p class="tagline"> Tagline about joining us </p>
                <p class="des"> Brief description about joining us goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                <div class="sec-btn">Join Us <i class="fas fa-arrow-right"></i></div> 
            </div>
        </div>
        <!--join us content ends-->


        <!--contact us heading  starts-->
        <div class="row">
            <div class="col-md-12"><h2 class="heading-sec">Contact Us</h4></div>
        </div>
        <!--contact us heading  ends-->

        <!--contact us content starts-->
        <div class="row" id="section">
            <div class="col-md-12">
                <p class="tagline"> Tagline about contact us </p>
                <p class="des"> Brief description about contact us goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                <div class="sec-btn">Contact Us <i class="fas fa-arrow-right"></i></div> 
            </div>

        </div>
        <!--contact us content ends-->
    </div>

    <!--content ends-->

    
</body>

<script>
$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('background-nav');
        } else {
            $('.navbar').removeClass('background-nav');
        }
    });
});
</script>
</html>