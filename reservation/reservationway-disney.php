<?php


  include '../config.php';





?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Paris Airport Transfers</title>

        <meta name="description" content="Paris Airport Transfers. Private and Shared shuttles: free reservation - pay the driver directly.">
        <meta name="keywords" content="paris airport transfer,paris airport shuttle,paris cdg shuttle,paris orly shuttle,paris beauvais shuttle">
        <meta name="author" content="Niklas Edelstam">
        <meta name="robots" content="index,follow" />
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="../css/normalize.min.css">
        <link rel="stylesheet" href="../css/main.css">
        
        <link rel="icon" type="image/png" href="../img/icons/favicon.png" />
        <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="img/icons/favicon.ico" /><![endif]-->
        <link rel="apple-touch-icon" href="../img/icons/apple-touch-icon-57x57.png" /> 
        <link rel="apple-touch-icon" sizes="72x72" href="../img/icons/apple-touch-icon-72x72" /> 
        <link rel="apple-touch-icon" sizes="114x114" href="../img/icons/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="../img/icons/apple-touch-icon-144x144.png" />

        <script src="../js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <?php include '../header.php'; ?>

        <div class="main-container">
            <div class="main wrapper clearfix">
                <div class="paddingdiv">

                

                        <?php if(isset($ok)){ echo '<p id="ok">'.$ok.'</p>';} 
                    elseif(isset($erreurid)){ ?>
                    
                      <?php echo '<p id="erreurid">'.$erreurid.'</p>'; } ?>

                <div class="choose-airport">
                <h2>Disneyland - Paris/Airport Transfer</h2>
                 <a href="one-way-reservation-disney.php?way=<?php echo urlencode('One-Way'); ?>" title="One-Way"><img src="../img/one-way.png" alt="One-Way" class="buttons-airport" width="160" /></a>
         <a href="round-trip-reservation-disney.php?way=<?php echo urlencode('Round-Trip'); ?>" title="Round-Trip"><img src="../img/round-trip.png" alt="Round-Trip" class="buttons-airport" width="160" /></a><br />

                 <p class="main-description">One-Way or Round-Trip ?</p>
                </div>

            </div>
            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
                <div class="paddingdiv">
                <div class="contacticon"><a href="../contact.php" title="Contact us" class="contactlink">Contact</a></div>
                <div class="homeicon"><a href="../index.php" title="Home" class="homelink">Home</a></div>
                <div class="toursicon"><a href="../tours.php" title="Sightseeing Tours" class="tourslink">Sightseeing</a></div>
            </div>
            </footer>

            <div id="copyright"><p>© 2013 ParisGoAirport - <a href="../terms.php" title="Terms and Conditions">Terms</a></p></div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="../js/main.js"></script>


    </body>
</html>
