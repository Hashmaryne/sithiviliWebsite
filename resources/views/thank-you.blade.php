<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ secure_asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/responsive.css') }}">
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
    <div class= "container">
        <div class="row" id="logo-row">
        <img src="{{URL::asset('/images/sithivili_logo1.png')}}" class="logo-app">
        </div>

        <div class="row" id="content-row">
            <div class="col"> 
                <i class="fas fa-check-circle"></i>
                <p class="ty-text"> Thank you for registering with Sithivili! </p>
                <p class ="more-ty"> Your email has been varified. Please login via the app. Want to know more about Sithivili? <a href="/"> Click here </a> to vist our website </p>
            </div>
        </div>

        <div class="row" id="footer-row">
            <div class="col">
                <p class="footer-icons"><i class="fab fa-facebook-f"></i>  <i class="fab fa-instagram"></i></p>
                <hr class="footer-line">
            </div>
        </div>

    </div>
   
</body>
</html>