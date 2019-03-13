
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact</title>
    <!-- Standard Favicon -->
    <link rel="icon" href="img/fav/favicon-96x96.png">

    <!-- Touch Icons - iOS and Android 2.1+ -->
    <link rel="apple-touch-icon" href="img/fav/android-icon-48x48.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/fav/android-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/fav/apple-icon-114x114.png" />
    
    <!--bootstrap v4.0.0-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!--animate-->
    <link rel="stylesheet" type="text/css" href="css/aos.css">
    <!--reset css-->
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <!--owl-carousel-->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
    <!--fontawesome cdn-->
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <!--main style-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,700i,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Adamina" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,600,700,800,900" rel="stylesheet">
    <!--modernizr-->
    <script type="text/javascript" src="http://gc.kis.scr.kaspersky-labs.com/BCF375DC-BF26-3C43-903B-D8AF6787D2E9/main.js" charset="UTF-8"></script><script src="js/vendor/modernizr.js"></script>

    <!--[if lt IE 9]>
    <script src="js/html5/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">
    <div class="se-pre-con"></div>

    <!--hero section-->
   <?php include"header.php" ?>
    <!--hero section-->

    <!--contact page form-->
    <section class="contact_form_page">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form_inside">
                        <form id="contact-form" method="post" action="contact.php" role="form">
                            <div class="messages"></div>
                            <div class="form-group">
                                <input id="form_name" type="text" name="name" placeholder="Your Full Name" required="required" data-error="Your name is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input id="form_email" type="email" name="email"  placeholder="Your Email Address *" required="required" data-error="Valid email is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input id="form_subject" type="text" name="subject" placeholder="Subject Line" required="required" data-error="suvject is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <textarea id="form_message" name="message" placeholder="Message Details" rows="4" cols="10" required="required" data-error="Please, leave us a message."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <button class="btn" type="submit">send now</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-5 offset-md-1">
                    <div class="inside_contact_details ">
                        <h3>Contact Info</h3>
                        <p>
                        Many progressives understand Scalia, and other conser ative jusges, in crassly political terms - as opponent.</p>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-tty"></i>
                                </div>
                                <p>(+88) 787 858 965 - 8585</p>
                                <p>(+04) 8748 5865 2523 - 75</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <p>youdomain@address.com</p>
                                <p>support@xerotheme.com</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <p>10/2/A, Middle Paikpara, Old Street, New Way, New York , United State</p>
                            </li>
                        </ul>
                    </div><!--/.inside_contact_details-->
                </div>
            </div>
        </div><!--/.container-->
    </section>
    <!--contact page form-->

    <!--popup search box-->
    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <!--popup search box-->

    <div class="maps_f">
        <div id="map"></div>
    </div>



    <!--client-logos-->
    <div class="partner_logos">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel" id="partner_logo_owl">
                        <div>
                            <div class="img_lo">
                                <img src="img/logos1.png" alt=""/>
                            </div>
                        </div>
                        <div>
                            <div class="img_lo">
                                <img src="img/logos2.png" alt=""/>
                            </div>
                        </div>
                        <div>
                            <div class="img_lo">
                                <img src="img/logos3.png" alt=""/>
                            </div>
                        </div>
                        <div>
                            <div class="img_lo">
                                <img src="img/logos4.png" alt=""/>
                            </div>
                        </div>
                        <div>
                            <div class="img_lo">
                                <img src="img/logos5.png" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </div>
    <!--client-logos-->

    <!--footer widget-->
  <?php include"footer.php" ?>
    <!--footer widget-->

    <!--footers-->
    
    <!--footers-->


    <!--<div data-aos="fade-up" data-aos-anchor=".other-element"></div>-->
    
    <!--jquery-->
    <script src="js/jquery-1.12.4.min.js"></script>
    <!--bootstrap v4 js-->
    <script src="js/vendor/bootstrap.min.js"></script>
    <!--popper js-->
    <script src="js/vendor/popper.min.js"></script>
    <!--aos js-->
    <script src="js/vendor/aos.js"></script>
    <!--owl carousel -->
    <script src="js/vendor/owl-carousel.js"></script>
    <!--counter -->
    <script src="js/vendor/counter.js"></script>
    <!--iso top-->
    <script src="js/vendor/isotop.js"></script>
    <!--easing js-->
    <script src="js/vendor/easing.js"></script>
    <!--ajax contact-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
    <script src="js/contact.js"></script>
    <!--main script-->
    <script src="js/main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbCbYItQ869iF05KMxUfw5rQP0y-XCT_U&callback=initMap"
        async defer></script>

</body>
</html>