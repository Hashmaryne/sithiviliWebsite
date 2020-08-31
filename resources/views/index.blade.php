<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('meta::manager')
    <!-- CSS stylesheet-->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="build/css/intlTelInput.css">

    <!--font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    
     <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="build/js/intlTelInput-jquery.min.js"></script>
    
    <!--bootstrap 4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:900&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Playfair&display=swap" rel="stylesheet">

    <!--animatons-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
     
    <title>Sithivili | Let's Talk</title>
</head>

<body>
    <!--Header starts-->
    <header id="header" class="section">
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
            <div class="banner-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6" id="banner-right">
                            <h3>Don't Lose<span> Hope</span>, <br><span>Believe</span> in yourself and all that you are.</h3>
                            <!-- <button class=""> -->
                            <a href="https://play.google.com/store/apps/details?id=com.skepseis.sithivili" target="_blank"><img class="download-btn" src="{{URL::asset('/images/googleplay.png')}}"></img></a>
                                <!-- Download Sithivili -->
                            <!-- </button> -->

                            
                        </div>

                        <div class="col-md-6" id="banner-left">
                            <img src="{{URL::asset('/images/1.png')}}" class="homescreen-img" data-aos="fade-left">
                        </div>
                    </div>
                </div>

 
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path class="path" fill="#9cccff" fill-opacity="1" d="M0,32L48,53.3C96,75,192,117,288,149.3C384,181,480,203,576,192C672,181,768,139,864,101.3C960,64,1056,32,1152,48C1248,64,1344,128,1392,160L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
            </svg>
            <!--download app ends-->
            
        </div>
    </header>
    <!--Header ends-->

    <!--Home section-->
    <section id="home" class="section">
        <!--container-->
        <div class="container" id="desktop-only">

            <!--row-->
            <div class="row">
                <div class="col-md-12" id="features-imgs">
                    <img src="{{URL::asset('/images/2.png')}}" class="emergency-screen-img" data-aos="fade-right">
                    <img src="{{URL::asset('/images/4.png')}}" class="institutes-screen-img" data-aos="fade-left" >
                    <img src="{{URL::asset('/images/3.png')}}" class="chatscreen-img" data-aos="fade-up">
                </div>
            </div>
            <!--row ends-->

            <!--row-->
            <div class="row" >
                <div class="col-md-4" data-aos="fade-up">
                    <p class="feature-icons-wrap"><img src="{{URL::asset('/images/emergency.png')}}" class="feature-icons"><p>
                    <h5 class="feature-heading">Easy Access to Emergency Contacts</h5>
                    <p> We provide you the most important emergency contact details. 
                    Help will be just a click away! </p>
                </div>

                <div class="col-md-4" data-aos="fade-up">
                    <p class="feature-icons-wrap"><img src="{{URL::asset('/images/app.png')}}" class="feature-icons"><p>
                    <h5 class="feature-heading">Chat to Us Annonymously</h5>
                    <p> Feeling down? Use our chat feature to chat with a Friend. 
                    We promise to keep your information safe. </p>
                </div>

                <div class="col-md-4" data-aos="fade-up">
                    <p class="feature-icons-wrap"><img src="{{URL::asset('/images/health.png')}}" class="feature-icons"><p>
                    <h5 class="feature-heading"> Find Nearby Mental Health Institutes</h5>
                    <p> Need to know the addresses of mental health institutes? We provide you the 
                    locations of available institutes.</p>
                </div>
            </div>
            <!--row ends-->

        </div>
        <!--container ends-->


        <!--container-->
        <div class="container" id="mobile-only">

            <!--row-->
            <div class="row">
                <div class="col-md-12" id="features-imgs">
                    <img src="{{URL::asset('/images/2.png')}}" class="emergency-screen-img" data-aos="zoom-in-left">
                    <img src="{{URL::asset('/images/4.png')}}" class="institutes-screen-img" data-aos="zoom-in-right" >
                    <img src="{{URL::asset('/images/3.png')}}" class="chatscreen-img" data-aos="zoom-in">
                </div>
            </div>
            <!--row ends-->

            <!--row-->
            <div class="row" >
                <div class="col-md-4" data-aos="fade-up">
                    <p class="feature-icons-wrap"><img src="{{URL::asset('/images/emergency.png')}}" class="feature-icons"><p>
                    <h5 class="feature-heading">Easy Access to Emergency Contacts</h5>
                    <p> We provide you the most important emergency contact details. 
                    Help will be just a click away! </p>
                </div>

                <div class="col-md-4" data-aos="fade-up">
                    <p class="feature-icons-wrap"><img src="{{URL::asset('/images/app.png')}}" class="feature-icons"><p>
                    <h5 class="feature-heading">Chat to Us Annonymously</h5>
                    <p> Feeling down? Use our chat feature to chat with a Friend. 
                    We promise to keep your information safe. </p>
                </div>

                <div class="col-md-4" data-aos="fade-up">
                    <p class="feature-icons-wrap"><img src="{{URL::asset('/images/health.png')}}" class="feature-icons"><p>
                    <h5 class="feature-heading"> Find Nearby Mental Health Institutes</h5>
                    <p> Need to know the addresses of mental health institutes? We provide you the 
                    locations of available institutes.</p>
                </div>
            </div>
            <!--row ends-->

        </div>
        <!--container ends-->

      
    </section>
    <!--Home section ends-->

    <!--About us section-->
    <section id="about-us" class="section" data-aos="fade-up">
        <div class="container"  >
            <!--about us heading  starts-->
            <div class="row">
                <div class="col-md-12"><h1 class="heading-sec">Who we are</h1></div>
                <p>We at Skepseis Private Limited provide you with 
                <strong>"Sithivili"</strong> as a service to address social stigma 
                surrounding Mental Health of youth in Sri Lanka. 
                We provide you with a chance to open upto a person who's willing to
                listen to your problems, issues and will guarantee your privacy.<p>
            </div>
            <!--about us heading  ends--> 
            <div class="page_content">
                <div class="row">
                    <div class="col-md-12" >
                        <p></p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!--About us section ends-->

    <!--Join us section-->
    <section id="join-us" class="section" data-aos="fade-up" >
        <div class="container" >
            <!--about us heading  starts-->
            <div class="row">
                <div class="col-md-12"><h1 class="heading-sec">Volunteer Opportunities</h1></div>
            </div>
            <!--about us heading  ends--> 

            <div class="row">
                <div class="col-md-12">
                    <p>Do you have the capacity to help those in need?
                    Have a psychology background?
                    Come join us to make this project a success!</p>   
                    <p>We are looking for young individuals with a psychology background
                    who wants to help make lives better for those who need emotional support to stand up on their
                    own. </p> 

                    <!--Accordion wrapper-->
                    <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                        <!-- Accordion card -->
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header blue lighten-3 z-depth-1" role="tab" id="headingOne1">
                                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                                aria-controls="collapseOne1">
                                <h5 class="mb-0">
                                    Requirements <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                                data-parent="#accordionEx">
                                <div class="card-body">
                                    <p><li>Currently following or have completed a degree in Psychology or any similiar certification </li> </p>
                                    <p class="or">OR</p>
                                    <p><li>Have experience in counseling or anything related to Psychology </li></p>
                                    <p><li>Should be of age 21 or older</li></p>
                                </div>
                            </div>

                        </div>
                        <!-- Accordion card -->

                        <!-- Accordion card -->
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header blue lighten-3 z-depth-1" role="tab" id="headingTwo2">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                                aria-expanded="false" aria-controls="collapseTwo2">
                                <h5 class="mb-0">
                                    Your Role <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>

                            <!-- Card body -->  
                            <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                                data-parent="#accordionEx">
                                <div class="card-body">
                                <p>Your role is to be a companion and a good listener 
                                   to the person on the other side by providing them emotional support through their troubles in order to improve 
                                   their mental wellbeing and help them feel less alone.</p>

                                <p>We will be providing the necessary training needed for this role. </p>
                                </div>
                            </div>

                        </div>
                        <!-- Accordion card -->

                    </div>
                    <!-- Accordion wrapper -->
                    <p style="padding-top:50px">If you have the above mentioned requirements and are interested in helping, please
                    fill in the the below form.</p>
                </div>
            </div>
            <!--End row-->
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="card" id="form-card">
                <form id="join-form" role="form" action="{{ route('join.store') }}" method="POST">
                    <div class="controls">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group"> <label for="form_name">First name *</label> <input id="form_name" type="text" name="name" class="form-control" placeholder="Enter first name *" required="required" data-error="This field is required."> </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group"> <label for="form_lastname">Last name *</label> <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Enter last name *" required="required" data-error="This field is required." size="2"> </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group"> <label for="form_name">NIC *</label> <input id="form_nic" type="text" name="nic" class="form-control" placeholder="Enter NIC *" required="required" data-error=" field is required." size="12" maxlength="12" onkeyup='validateform();'> </div>
                                <span id="nic-error" style="display: none"> Please enter a valid NIC number </span>
                            </div>
                            <div class="col-6">
                                <div class="form-group"> <label for="form_lastname"  >Date of birth *</label> <input id="form_dob" type="date" name="dob" class="form-control" required="required" data-error="This field is required."> </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group"> <label for="form_email">Email *</label> <input id="form_email" type="email" name="email" class="form-control" placeholder="Enter email *" required="required" data-error="Valid email is required."> </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group"> <label for="form_email">Mobile number *</label> <input id="form_mobile" type="tel"  name="mobile" class="form-control" placeholder="Enter number *" required="required" data-error="This field is required."> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"> <label for="form_message">Qualifications *</label> <textarea id="form_qualifications" name="qualifications" class="form-control" placeholder="Enter your qualifications" rows="4" required="required" data-error="This field is required."></textarea> </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group"> <label for="form_message">Commentts</label> <textarea id="form_message" name="comments" class="form-control" placeholder="Comments..." rows="4" ></textarea> </div>
                            </div>
                        </div>
                            @csrf

                            <!--<div class="col-md-12"> <input type="submit" class="btn btn-info btn-send pt-2 btn-block"> </div>-->
                            <div class="row align-items-center">
                                <div class="col-md-12" id="form-btn">
                                    <button type="submit" class="btn btn-info">
                                        <span class="txt">Submit</span>
                                        <span class="round"><i class="fa fa-chevron-right"></i></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            <div> 
            <!-- form card ends-->
        </div> 
    </section>
    <!--Join us section ends-->

    <!--Contact us section-->
    <section id="contact-us" class="section" data-aos="fade-up">
        <div class="container">
            <!--about us heading  starts-->
            <div class="row">
                <div class="col-md-12"><h1 class="heading-sec">Contact us</h1></div>
            </div>
            <!--about us heading  ends--> 

            <div class="row" id="contact-content">
                <!--left sec-->
                <div class="col-md-6" id="contact-left">
                    <div class="container">
                        <div class="row" id="call-us-row">
                            <div clas="col-md-6" id="call-us-left"><i class="fas fa-phone-volume"></i></div>
                            <div class="col-md-6" id="call-us-right"> 
                                <h6 class="contact-txt-heading"><b>CALL US UP ON</b><br></h6> 
                                <div class="contact-info">
                                <div class="contact-para">Rusiru: +94 75 729 1350</div>
                                <div class="contact-para">Hiruksha: +94 77 802 7599  </div>
                                <div class="contact-para">Hashmaryne: +94 77 006 5700</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row" id="email-us-row">
                            <div clas="col-md-6" id="email-us-left"><i class="fas fa-at"></i></div>
                            <div class="col-md-6" id="email-us-right"> <p class="contact-txt-heading"><b>SEND US AN EMAIL</b></p> <p class="contact-para" id="contact-email"> <br>sithivili.project@gmail.com</p></div>
                        </div>
                    </div>

                    <div class="row" id="socials-row">
                        <p class="contact-txt-heading" id="socials-heading"><b>OR DROP US A MESSAGE THROUGH OUR SOCIALS </b> 
                            <br><a href="https://www.facebook.com/Project-Sithivili-106793030832187/" target="_blank"><i class="fab fa-facebook"></i></a> <a href="https://www.instagram.com/project_sithivili/" target="_blank"><i class="fab fa-instagram"></i></a></p>
                    </div>

                </div>
                <!--left sec ends-->

                <!--left sec-->
                <div class="col-md-6" id="contact-right">
                    <div class="card" id="form-card-contact">
                        <div class="form-header">Send Us a Message</div>
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

                                </div>
                                <div class="row align-items-center">
                                <div class="col-md-12" id="form-btn">
                                    <button type="submit" class="btn btn-info">
                                        <span class="txt">Send</span>
                                        <span class="round"><i class="fa fa-chevron-right"></i></span>
                                    </button>
                                </div>
                            </div>
                            </div>
                        
                        </form>
                    </div>
                </div>
                <!--right sec ends-->
            </div>
            <!--row ends-->


        </div>
    </section>
    <!--Contact us section ends-->
    <div class="container"  id="contact-footer">
        <div class="row">
            <div class="col">
                <p class="mobile-call-now"><i class="fas fa-phone-volume"></i><p>
                <div class="contact-info">
                    <div class="contact-para">Rusiru: +94 75 729 1350</div>
                    <div class="contact-para">Hiruksha: +94 77 802 7599  </div>
                    <div class="contact-para">Hashmaryne: +94 77 006 5700</div>
                </div>

                <p class="mobile-email"><i class="fas fa-at"></i><p>
                <div class="email-para">sithivili.project@gmail.com</div>
                <div class="footer-mb">
                    <p class="footer-icons"> <a href="https://facebook.com/pages/category/Product-Service/Project-Sithivili-106793030832187/"> <i class="fab fa-facebook" id="icon-fb"></i></a>  
                    <a href="https://instagram.com/project_sithivili?igshid=ig4r84ve9r40"><i class="fab fa-instagram" id="icon-insta"></i></a></p>
                    <hr class="footer-line">
                </div>
            </div>
        </div>
    </div>


</body>

<script>
function aos_init() {
    AOS.init({
      duration: 2000,
      once: false
    });
  }
  $(window).on('load', function() {
    aos_init();
  });

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

  var nav_sections = $('section');
  var main_nav = $('.navbar');

  $(window).on('scroll', function() {
    var cur_pos = $(this).scrollTop() + 200;

    nav_sections.each(function() {
      var top = $(this).offset().top,
        bottom = top + $(this).outerHeight();

      if (cur_pos >= top && cur_pos <= bottom) {
        if (cur_pos <= bottom) {
          main_nav.find('li').removeClass('active');
        }
        main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('active');
      }
      if (cur_pos < 300) {
        $(".nav-menu ul:first li:first").addClass('active');
      }
    });
  });

    let telInput = $("#form_mobile");

    // initialize
    telInput.intlTelInput({
        initialCountry: 'auto',
        preferredCountries: ['us','gb','br','ru','cn','es','it'],
        autoPlaceholder: 'aggressive',
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/js/utils.js",
        geoIpLookup: function(callback) {
            fetch('https://ipinfo.io/json', {
                cache: 'reload'
            }).then(response => {
                if ( response.ok ) {
                    return response.json()
                }
                throw new Error('Failed: ' + response.status)
            }).then(ipjson => {
                callback(ipjson.country)
            }).catch(e => {
                callback('us')
            })
        }
    });

    function validateform(){  
        var nic=document.getElementById('form_nic').value;  
        
        
        if (nic.length !== 12)
        {  
            document.getElementById("#nic-error").style.display = "block";
        }
        else
        {
            document.getElementById("#nic-error").style.display = "none";
        }
    } 


</script>
</html>