<?php /* Template Name: Home Page Template */ ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Ladro Cafe</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" type="image/png" href="https://ladrocaffe.ae/wp-content/uploads/2022/09/favicon-32x32-1.png">

    <link rel="stylesheet" href="/wp-content/themes/storefront/bootstrap.min.css">
    <link rel="stylesheet" href="/wp-content/themes/storefront/vegas.min.css">
    <!-- add bootstrap files vegas and font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="/wp-content/themes/storefront/ladro-home.css">
	
	 <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZV1YWQH74K"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-ZV1YWQH74K');
    </script>
    <style>
        @media (min-width: 992px) {
            .col-md-4 {
                width: 33.33333333%;
                text-align: center;
            }
            .contact-text {
                text-align: center;
            }
        }
        
        .menu-bg {
            background: #101010;
            pointer-events: none;
            padding: 80px;
            transition: .3s;
            right: 50px;
            top: 50px;
            transform: translate3d(50%, -50%, 0);
            transform-origin: center center;
        }
		.grid-line {
    		height: 300vh;
    		border-right: 0px;
		}
    </style>
</head>

<body>

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">

            <span class="spinner-rotate"></span>

        </div>
    </section>


    <!-- GRID LINE -->
    <section class="grid">
        <div class="container">
            <div class="row">

                <div class="col-md-2 col-sm-2">
                    <div class="grid-line"></div>
                </div>
                <div class="col-md-2 col-sm-2">
                    <div class="grid-line"></div>
                </div>
                <div class="col-md-2 col-sm-2">
                    <div class="grid-line"></div>
                </div>
                <div class="col-md-2 col-sm-2">
                    <div class="grid-line"></div>
                </div>
                <div class="col-md-2 col-sm-2">
                    <div class="grid-line"></div>
                </div>

            </div>
        </div>
    </section>


    <div class="menu-bg"></div>
    <div class="menu-burger">Menu</div>

    <div class="menu-items">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-4 col-sm-6">
                    <h1><a href="https://ladrocaffe.ae/menu/">Food Menu</a></h1>
                </div>

                <div class="col-md-4 col-sm-6">
                    <address>
               <h1><a href="https://ladrocaffe.ae/menu/#coffee">Beverage Menu</a></h1>

             </address>
                </div>

                <div class="col-md-12 col-sm-12">
                    <h1 class="contact-text" style="padding-top:5%"> <a href="https://ladrocaffe.ae/contact/" class="fa fa-phone"> <span style="font-family:'Poppins'; font-weight: 300;">Contact Us</span></a></h1>

                </div>

                <div class="col-md-12 col-sm-12">
                    <ul class="social-icon">
                        <li class="line"></li>
                        <li>
                            <a href="https://www.facebook.com/ladrocaffe" class="fa fa-facebook"></a>
                        </li>
                        <li>
                            <a href="http://instagram.com/ladrocaffe/" class="fa fa-instagram"></a>
                        </li>
                        <li>
                            <a href="tel:+971 56 612 7444" class="fa fa-phone"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- HOME -->
    <section id="home">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="home-info">
                        <div class="menu-bg"></div>
                        <div class="menu-burger">Menu</div>



                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SCRIPTS -->
    <script src="/wp-content/themes/storefront/jquery.js"></script>
    <script src="/wp-content/themes/storefront/bootstrap.min.js"></script>
    <script src="/wp-content/themes/storefront/vegas.min.js"></script>
    <script src="/wp-content/themes/storefront/custom-js2.js"></script>

</body>

</html>