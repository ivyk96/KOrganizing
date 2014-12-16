<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('requires/head.html') ?>
	<title>Kate Organizing - Home</title>
    
</head>

<body>

    <!-- Navigation -->
    <?php require_once('requires/navbar.html') ?>



    <!-- Page Content -->
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-1"><p class="page-header-whitespace">-</p></div>
            
            <div class="col-md-8">
                <img class="img-responsive" src="img/logo.png">
            
            </div>
            <div class="col-md-3">
                <img class="img-responsive" src="img/profielfoto.png">
            </div>
        </div>
        <!-- Features Section -->
        <div class="row">
            <div class="text-center">
                <h3 class="page-header2">prioriTIJD aan kwaliTIJD</h3>
            </div>

            <br>

            <div class="col-lg-12">
                <h4 class="page-header3">ORGANISEREN KUN JE LEREN</h4>
            </div>
        </div>
        <hr>
        <div class="row"> 
            <div class="col-md-12">
                <p>
                    Dagelijks een stroom aan mailverkeer, stapels post, een overvolle agenda en altijd tijd tekort?
                    Mensen zijn vaak uitstekend opgeleid voor het uitoefenen van hun vak maar hebben nooit geleerd hoe ze hun werk efficiënt en effectief organiseren.
                    Er is niet altijd sprake van chaos! Er zijn mensen die alles prima in orde hebben, maar geen (goed) systeem hebben aangebracht. Ook dat kan tot problemen leiden.
                </p>
                <p><b>Tijd om het roer om te gooien, om echt kwaliTIJD voor jezelf te krijgen!</b></p>
                <p>
                    Mijn naam is Cathy Hoekstra en ik ben professional organizer. Samen met u breng ik structuur aan in uw werkzaamheden en op uw werkplek. Ook help ik met 
                    het plannen van de agenda en met het indelen van tijd en taken. De training Effectief en Efficiënt werken is gebaseerd op o.a. de principes van "Getting 
                    things done" en Steven Covey. De training vindt plaats daar waar het nodig is: op de werkplek zelf. De persoonlijke aanpak leidt tot grote resultaten.
                </p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <?php require_once('requires/infoblock.php'); ?>
        
        <hr>

        <!-- Footer -->
        <?php require_once('requires/footer.html') ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
