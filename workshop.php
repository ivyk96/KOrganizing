<!DOCTYPE html>
<html lang="en">

<head>
	<title>Kate Organizing - Workshop</title>
    <?php require_once('requires/head.html') ?>
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
        </div>
        <!-- Features Section -->
        <div class="row">
            <div class="text-center">
                <h3 class="page-header2">TIJD voor prioriTIJD</h3>
            </div>

            <br>

            <div class="col-lg-12">
                <h4 class="page-header3">GROEPSPROCES</h4>
            </div>
        </div>
        <hr>
        <div class="row"> 
            <div class="col-md-12">
                <p>
                    Het is mogelijk “in-company” een workshop te organiseren voor een groep van maximaal 12 medewerkers. 
                    In een interactieve sfeer zullen de deelnemers handvaten aangereikt krijgen om een en ander praktisch toe te passen.
                </p>
                <p><b>Het programma:</b></p>
                <ul>
                    <li>opwarmen met een oefening</li>
                    <li>praktische theorie van timemanagement – van geen tijd naar kwaliTIJD</li>
                    <li>tussenoefening</li>
                    <li>prioriteiten</li>
                    <li>plannen en het bewaken van de planning</li>
                    <li>toepassen van theorie op eigen praktijk</li>
                </ul>
                <p>
                    De workshop neemt 1 dagdeel in beslag. Aansluitend kunnen de deelnemers gebruik maken van de individuele coaching op de werkplek om het beste 
                    <a href="resultaat.php" class="oulink">resultaat</a> te bereiken.
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
