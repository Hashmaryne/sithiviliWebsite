<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">    
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
    <div class="header-contact">
        <!--<img src="images\banner.jpeg" class="banner-home">-->
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
                            <a class="nav-link" href="\">Home
                            
                            </a>
                        </li>
                        <li class="nav-item" >
                            <a class="nav-link" href="download">Download 
                            
                            </a>
                        </li>
                        <li class="nav-item" >
                            <a class="nav-link" href="about-us">About Us</a>
                               
                        </li>
                        <li class="nav-item" >
                            <a class="nav-link" href="join-us">Join Us
                            
                            </a>
                        </li>
                        <li class="nav-item" id="active">
                            <a class="nav-link" href="contact-us">Contact Us
                            <span class="sr-only">(current)</span>
                            </a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!--Navbar ends-->
        <h1 class="heading-main-sec">Contact Us</h1>
        
    </div>
    <!--Head ends-->

    <!--content starts-->
    <div class="container">
        <!--contact us heading  starts-->
        <div class="row">
            <div class="col-md-12"><h2 class="heading-sec">Have any questions? Reach out to us!</h4></div>
        </div>
        <!--contact us heading  ends--> 

        <!--row-->
        <div class="row" id="contact-content">

            <!--left sec-->
            <div class="col-md-6" id="contact-left">
                <div class="row" id="call-us-row">
                    <div clas="col-md-6" id="call-us-left"><i class="fas fa-phone-volume"></i></div>
                    <div class="col-md-6" id="call-us-right"> <p><b>CALL US UP ON</b><br>Rusiru: +94 75 729 1350 <br>Hiruksha: +94 77 802 7599 <br>Hashmaryne: +94 77 006 5700</p></div>
                </div>

                <div class="row" id="email-us-row">
                    <div clas="col-md-6" id="email-us-left"><i class="fas fa-at"></i></div>
                    <div class="col-md-6" id="email-us-right"> <p><b>SEND US AN EMAIL</b><br>sithivili.project@gmail.com</p></div>
                </div>

                <div class="row" id="socials-row">
                    <p><b>OR DROP US A MESSAGE THROUGH OUR SOCIALS </b><br> <i class="fab fa-facebook-square"></i>  <i class="fab fa-instagram-square"></i> </p>
                </div>
            </div>
            <!--left sec ends-->
            
            <!--right sec-->
            <div class="col-md-6" id="contact-right">
                <form id="contact-form" role="form" action="{{ route('join.store') }}" method="POST">
                    <div class="controls">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group"> <label for="form_name">Name *</label> <input id="form_name" type="text" name="name" class="form-control" placeholder="Enter name *" required="required" data-error="This field is required."> </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group"> <label for="form_email">Email *</label> <input id="form_email" type="email" name="email" class="form-control" placeholder="Enter email *" required="required" data-error="Valid email is required."> </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group"> <label for="form_message">Your message *</label> <textarea id="message" name="massage" class="form-control" placeholder="Enter your message" rows="4" required="required" data-error="This field is required."></textarea> </div>
                            </div>

                            @csrf

                            <div class="col-md-12"> <input type="submit" class="btn btn-info btn-send pt-2 btn-block " value="Submit"> </div>
                        </div>
                    </div>
                
                </form>
            </div>
            <!--right sec ends-->

        </div>
       <!--row ends-->
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