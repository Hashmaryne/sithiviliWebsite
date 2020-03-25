<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
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
    <div class="header-download">
        <!--<img src="images\banner.jpeg" class="banner-home">-->
        <!--Navbar starts-->
        <div class="navigation">
            <nav class="navbar navbar-expand-lg fixed-top navbar-light">
                <div class="container"> 
                    <a class="navbar-brand" href="#"> Logo
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="\">Home
                            
                            </a>
                        </li>
                        <li class="nav-item" id="active">
                            <a class="nav-link" href="download">Download 
                            <span class="sr-only">(current)</span>
                            </a>
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

        <!--download app starts-->
        <img src="{{URL::asset('/images/home-screen.png')}}" class="home_screen">
        <h1 class="download_txt"> Download Sithivili </h1>
        <p class="download_txt_sub"> Your one stop shop to mental wellbeing </p>
        <img src="{{URL::asset('/images/googleplay.png')}}" class="playstore_btn">
        <!--download app ends-->
        
    </div>
    <!--Head ends-->

    <!--content starts-->
    <div class="container">

        <div class="row" id="section">
            <div class="col-md-6" style="position:relative">
                <p class="feature_txt"> Talk to someone </p>
                <p class="feature-des"> Brief description about the feature. </p>
            </div>

            <div class="col-md-6" id="img-section">
                <img src="{{URL::asset('/images/chat-screen.PNG')}}">
            </div>
        </div>


        <div class="row flex-column-reverse flex-md-row" id="section">
            <div class="col-md-6" id="img-section">
               <img src="{{URL::asset('/images/Emergancy Contacts-screen.png')}}">
            </div>

            <div class="col-md-6">
                <p class="feature_txt"> Easy access to emgercency contacts </p>
                <p class="feature-des"> Brief description about the feature. </p>
            </div>
        </div>

        <div class="row" id="section">
            <div class="col-md-6">
                <p class="feature_txt">Find mental health institutions around you</p>
                <p class="feature-des"> Brief description about the feature.</p>
            </div>

            <div class="col-md-6">
                <img src="{{URL::asset('/images/insititues-screen.png')}}">
            </div>
        </div>

    </div>


   

    <!--content ends-->
   <!--footer starts-->

    <!--footer ends-->
   
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