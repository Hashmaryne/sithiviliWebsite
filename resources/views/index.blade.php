<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS stylesheet-->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/home.css">

    <!--font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    
     <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
    <!--bootstrap 4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:900&display=swap" rel="stylesheet"> 

    <!--animatons-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    
     
    <title>Sithivili | Let's Talk</title>
</head>

<body>
    <!--Header starts-->
    <header id="header">
        <div class="page-head">
            
            <!--Navbar starts-->
            <div class="navigation">
                <nav class="navbar navbar-expand-lg fixed-top navbar-light">
                    <div class="container"> 
                        <a class="navbar-brand" href="#"> <div class="header-name header-name-color"><img src="{{URL::asset('/images/sithivili_logo1.png')}}" class="logo-img"><span style="padding-left:20px;">Sithivili<span></div>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            
                            <li class="active" id="nav-item">
                                <a class="nav-link" href="#home">Download 
                                <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li id="nav-item">
                                <a class="nav-link" href="#about-us">About Us</a>
                                
                            </li>
                            <li id="nav-item">
                                <a class="nav-link" href="#join-us">Join Us</a>
                            </li>
                            <li id="nav-item">
                                <a class="nav-link" href="#contact-us">Contact Us</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--Navbar ends-->

            <!--download app starts-->
            <section class="banner-section">

                <div style="margin-top:50px; padding:100px;">
                    <h3 style="">Don't Lose<span> Hope</span>, <br><span>Believe</span> in yourself and all that you are.</h3>
                    <button style="">
                        Download Sithivili
                    </button>
                </div>
            </section>
            <!--download app ends-->
            
        </div>
    </header>
    <!--Header ends-->


    <!--Home section-->
    <section id="home">
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
    </section>
    <!--Home section ends-->


    <!--About us section-->
    <section id="about-us" class="d-flex align-items-center">
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
    </section>
    <!--About us section ends-->

    <!--Join us section-->
    <section id="join-us" >
        <div class="container">
            <!--about us heading  starts-->
            <div class="row">
                <div class="col-md-12"><h2 class="heading-sec">Volunteer Opportunities</h4></div>
            </div>
            <!--about us heading  ends--> 

            <div class="row">
                <div class="col-md-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
    

            <div class="row justify-content-center">
                <!-- Trigger the modal with a button -->
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Volunteer as a Campanion</button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Join Us</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                
                            </div>

                            <div class="modal-body">
                                <div class="card mt-2 mx-auto p-4 bg-light">
                                        <div class="card-body bg-light">
                                            <div class="container">
                                                <form id="contact-form" role="form" action="{{ route('join.store') }}" method="POST">
                                                    <div class="controls">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group"> <label for="form_name">First name *</label> <input id="form_name" type="text" name="name" class="form-control" placeholder="Enter first name *" required="required" data-error="This field is required."> </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group"> <label for="form_lastname">Last name *</label> <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Enter last name *" required="required" data-error="This field is required."> </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group"> <label for="form_name">NIC *</label> <input id="form_nic" type="text" name="nic" class="form-control" placeholder="Enter NIC *" required="required" data-error="This field is required."> </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group"> <label for="form_lastname"  >Date of birth *</label> <input id="form_dob" type="date" name="dob" class="form-control" required="required" data-error="This field is required."> </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group"> <label for="form_email">Email *</label> <input id="form_email" type="email" name="email" class="form-control" placeholder="Enter email *" required="required" data-error="Valid email is required."> </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group"> <label for="form_email">Mobile number *</label> <input id="form_mobile"  name="mobile" class="form-control" placeholder="Enter number *" required="required" data-error="This field is required."> </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group"> <label for="form_message">Qualifications *</label> <textarea id="form_qualifications" name="qualifications" class="form-control" placeholder="Enter your qualifications" rows="4" required="required" data-error="This field is required."></textarea> </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group"> <label for="form_message">Commentts</label> <textarea id="form_message" name="comments" class="form-control" placeholder="Comments..." rows="4" ></textarea> </div>
                                                            </div>

                                                            @csrf

                                                            <div class="col-md-12"> <input type="submit" class="btn btn-info btn-send pt-2 btn-block " value="Submit"> </div>
                                                        </div>
                                                    </div>
                                                
                                                
                                                </form>
                                            </div>
                                        </div>
                                </div> <!-- /.8 -->
                            </div>
                        </div>
                        
                    </div><!--model dialog-->
                </div><!--model fade-->
            </div> <!--row justify-->

            <div class="row">
                <div class="col-md-12">
                    <p> Please <a href="#">Contact us</a> if you have any questions <p>
                </div>
            </div>
        </div>
    </section>
    <!--Join us section ends-->

    <!--Contact us section-->
    <section id="contact-us" >
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
                    <form id="contact-form" role="form" action="{{ route('contact.store') }}" method="POST">
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
                                    <div class="form-group"> <label for="form_message">Your message *</label> <textarea id="message" name="form-message" class="form-control" placeholder="Enter your message" rows="4" required="required" data-error="This field is required."></textarea> </div>
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
    </section>
    <!--Contact us section ends-->
   
</body>

<script>
    AOS.init();

    $(function () {
        $(window).on('scroll', function () {
            if ( $(window).scrollTop() > 10 ) {
                $('.navbar').addClass('nav-fixed');
                $('.nav-link').addClass('nav-link-transform');
                $('.header-name').removeClass('header-name-color');
            } else {
                $('.navbar').removeClass('nav-fixed');
                $('.nav-link').removeClass('nav-link-transform');
                $('.header-name').addClass('header-name-color');

            }
        });
    });

    $(function() {
   $("li").click(function() {
      // remove classes from all
      $("li").removeClass("active");
      // add class to the one we clicked
      $(this).addClass("active");
   });
});

</script>
</html>