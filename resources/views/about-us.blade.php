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
    <div class="header-about">
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
                        
                        <li class="nav-item">
                            <a class="nav-link" href="download">Download</a>
                        </li>
                        <li class="nav-item" id="active">
                            <a class="nav-link" href="about-us">About Us</a>
                                <span class="sr-only">(current)</span>
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
        <h1 class="heading-main-sec">About Us</h1>
        
    </div>
    <!--Head ends-->

    <!--content starts-->
    <div class="container">
        <!--about us heading  starts-->
        <div class="row">
            <div class="col-md-12"><h2 class="heading-sec">Who we are</h4></div>
        </div>
        <!--about us heading  ends--> 
        <div class="page_content">
            <div class="row">
                <div class="col-md-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Vel pharetra vel turpis nunc eget lorem dolor. Nunc lobortis mattis aliquam faucibus purus in. Feugiat in fermentum posuere urna nec tincidunt praesent semper feugiat. Suspendisse in est ante in nibh mauris cursus mattis molestie. Neque aliquam vestibulum morbi blandit cursus risus at ultrices mi. Posuere morbi leo urna molestie at elementum eu. Condimentum mattis pellentesque id nibh tortor. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Laoreet sit amet cursus sit amet dictum sit. Et odio pellentesque diam volutpat commodo sed egestas. Eget est lorem ipsum dolor. Est pellentesque elit ullamcorper dignissim. Purus gravida quis blandit turpis cursus in hac habitasse platea. Ornare arcu dui vivamus arcu felis bibendum ut. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Orci porta non pulvinar neque laoreet. Euismod quis viverra nibh cras pulvinar. Habitant morbi tristique senectus et netus.</p>
                </div>
            </div>
        </div>
        
    </div>
    <!--content ends-->
</body>

<script>
$(document).ready(function(){
	$(window).on("scroll",function(){
  	var wn = $(window).scrollTop();
    if(wn > 120){
    	$(".navbar").css("background","#2D7584");
    }
    else{
    	$(".navbar").css("background","transparent");
    }
  });
});
</script>
</html>