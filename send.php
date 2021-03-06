<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="sv"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="sv"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="sv"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="sv"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Krad Solutions - Kontakt; kontaktformulär och kontaktinformation</title>
        <meta name="description" content="Vi ser till att ditt företag får en bra närvaro på nätet; till ett lågt pris. Vi kan också lösa produktion av mer avancerade lösningar om så önskas. Kom igång redan idag, kontakta oss.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <link rel="canonical" href="http://www.krad.se/contact.html">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="js/head.js"></script>
    </head>
    <body>
        <!--[if lt IE 9]>
            <p class="browsehappy">Du använder en <strong>föråldrad</strong> webbläsare. Vi rekommenderar att du <a href="http://browsehappy.com/">uppdaterar</a> för att förbättra din upplevelse och säkerhet.</p>
        <![endif]-->
        <div id="container">
        <header id="site-header">
            <h1>Krad Solutions</h1>
        </header>
        <nav id="mainMenu">
            <ul>
                <li><a href="index.html">Start</a></li>
                <li><a href="products.html">Tjänster</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="about.html">Om oss</a></li>
                <li><a href="contact.html" class="current">Kontakt</a></li>
            </ul>
        </nav>

        <main id="mainContent">
             <?php
            if(isset($_POST['contactInputUrl']) && $_POST['contactInputUrl'] == ''){
                    $sendTo = 'info@krad.se';
                    $from = $_POST[contactInputMail];
                    $message = $_POST[contactInputMessage];
                    $headers = "From: $_POST[contactInputMail]";
                    $subject = $_POST[contactInputSubject];
                    $body = "Name:  $from -  Message: ";
                    
                    mail($sendTo, $subject, $body, $headers );
            }
            ?>
            <article>
            <h1>Skickat</h1>
            <p>Ditt meddelande har nu skickats och vi kommer att svara så snart vi kan.</p>
            </article>
        </main>
        
        <footer>
            Krad Solutions &copy; 2013
        </footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
