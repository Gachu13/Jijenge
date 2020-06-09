<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jijenge Investments</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">

    </head>
    <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-transparent" style="height: 90px">
        <div class="container">
            <a class="navbar-brand" href="#">Jijenge Investments</a>
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
                <h1 style="color: white; font-family: 'Helvetica'; font-size: 400%">Jijenge <br> Investments</h1>
                <h1 style="color: floralwhite; font-family: 'Brush Script MT'; font-size:400%">The future lies in your hands</h1>
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
                    <button class="btn btn-danger btn-block" type="submit">Register</button>

                </form>
                <!-- Default form contact -->
            </div>
        </div>
    </div>



    <!-- Footer -->
    <div class="footer-custom" style="height: 90vh">
        <div class="container">
            <div class="m-5">
                <h1 style="font-size: 250%"><strong>GET IN TOUCH</strong></h1>
                <p style="font-size: 150%">
                    I love to listen and I am eagerly waiting to talk to you regarding your concerns. Get in touch with us if you have any queries and I will get back to you as soon as possible.
                </p>
            </div>
            <!-- Grid row -->
            <div class="row m-0">
                <!-- Grid column -->
                <div class="col-md-6" align="right">
                    <!-- Default form contact -->
                    <form class="text-center border border-light p-5 bg-transparent" action="#!" style="border-radius: 15px 15px 15px 15px;">

                        <div>
                            <!-- First Name -->
                            <input type="text" id="name" name="name" class="form-control mb-4" placeholder="Name" required>

                            <!-- Email -->
                            <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail" required>
                        </div>

                        <!-- Phonenumber -->
                        <textarea id="message" class="form-control mb-4" placeholder="Enter Message" rows="3" required></textarea>

                        <!-- Send button -->
                        <button class="btn btn-danger btn-block" type="submit">Send Message</button>

                    </form>
                    <!-- Default form contact -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6">
                    <div class="">
                        <div class="row h-20 m-5">
                            <div class="col-md-2">
                                <i class="fa fa-phone-square" style="font-size: 350%"></i>
                            </div>
                            <div class="col-md-10 my-auto">
                                <div style="font-size: 125%;font-weight: bold;">
                                    CALL ME
                                </div>
                                <div style="font-size: 125%">
                                    +2547-28600576
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="row h-20 m-5">
                                <div class="col-md-2">
                                    <i class="fa fa-envelope" style="font-size: 350%"></i>
                                </div>
                                <div class="col-md-10 my-auto">
                                    <div style="font-size: 125%;font-weight: bold;">
                                        MAIL US
                                    </div>
                                    <div style="font-size: 125%">
                                        ijijenge@gmail.com
                                    </div>
                                </div>
                            </div>
                            <!-- Grid row -->
                            <div class="row h-20 m-5">
                                <div class="col-md-10 my-auto">
                                    <a href="https://www.facebook.com/Jijenge-investments-109255720822089/" style="font-size: 250%"><i class="m-2 fa fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/p/CBNtm19APKM/?igshid=um5um0dpnj4b" style="font-size: 250%"><i class="m-2 fa fa-instagram"></i></a>
                                    <a href="https://twitter.com/JijengeI?s=08" style="font-size: 250%"><i class="m-2 fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Grid column -->

                </div>
            </div>
        </div>
        <!-- Footer -->
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3" style="margin-bottom: 0; background-color: #FFAB40">© 2020 Copyright:
            ijijenge@gmail.com
        </div>
        <!-- Copyright -->


        <script src="/js/app.js"></script>
        <script>
            $(window).scroll(function(){
                $('nav').toggleClass('scrolled', $(this).scrollTop() > 90);
            });
        </script>
    </div>

</html>
