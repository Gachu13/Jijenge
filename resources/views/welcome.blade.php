<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jijenge</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>
        <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-transparent" style="height: 90px">
            <div class="container">
                <a class="navbar-brand" href="#">Jijenge</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse w-100 order-3 dual-collapse2">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#">Contact</a>
                        <a class="nav-item nav-link" href="#">Social Media</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="bg">
            <div class="row m-0 h-100">
                <div class="col-lg-6 my-auto" align="center">
                    <h1 style="color: white">Jijenge</h1>
                </div>
                <div class="col-lg-6 my-auto">
                    <!-- Default form contact -->
                    <form class="text-center border border-light p-5 bg-light" action="#!" style="width: 27rem;border-radius: 15px 15px 15px 15px;">

                        <p class="h4 mb-4">Register with Us</p>

                        <!-- First Name -->
                        <input type="text" id="first_name" name="first_name" class="form-control mb-4" placeholder="First Name" required>

                        <!-- Last Name -->
                        <input type="text" id="last_name" name="last_name" class="form-control mb-4" placeholder="Last Name" required>

                        <!-- Email -->
                        <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail" required>

                        <!-- Phonenumber -->
                        <input type="tel" id="phone_number" class="form-control mb-4" placeholder="Phone Number" required>

                        <!-- Send button -->
                        <button class="btn btn-primary btn-block" type="submit">Register</button>

                    </form>
                    <!-- Default form contact -->
                </div>
            </div>
        </div>

        <div class="mt-5" style="height: 40vh" align="center">
            <h1 class=" m-4" style="font-size: 350%">Contact Us</h1>
            <div class="m-4">
                <a href="#" style="font-size: 250%"><i class="m-2 fa fa-facebook-f"></i></a>
                <a href="#" style="font-size: 250%"><i class="m-2 fa fa-instagram"></i></a>
                <a href="#" style="font-size: 250%"><i class="m-2 fa fa-twitter"></i></a>
            </div>
            <div class="m-4">
                <p style="font-size: 150%"><i class="fa fa-phone"></i>  +254728600576</p>
            </div>
        </div>


        <script src="/js/app.js"></script>
        <script>
            $(window).scroll(function(){
                $('nav').toggleClass('scrolled', $(this).scrollTop() > 90);
            });
        </script>
    </body>
</html>
