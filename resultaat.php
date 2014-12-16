<!DOCTYPE html>
<html lang="en">

<head>
	<title>Kate Organizing - Resultaat</title>
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
                <h3 class="page-header2">kwaliTIJD voor jezelf</h3>
            </div>

            <br>

            <div class="col-lg-12">
                <h4 class="page-header3">PERSOONLIJKE EFFECTIVITEIT</h4>
            </div>
        </div>
        <hr>
        <div class="row"> 
            <div class="col-md-12">
                <p>
                    <b>Rust en ruimte</b>
                    <br>
                    Het effect van organizing en timemanagement is het ontstaan van rust en ruimte. Het hoofd raakt leeg, waardoor effectiever en efficiënter gewerkt kan worden.
                </p>
                <br>
                <p><b>De resultaten voor de cursist en daardoor voor het bedrijf:</b></p>
                <ul>
                    <li>alle overbodige rommel is verdwenen</li>
                    <li>beschikbare informatie is up to date </li>
                    <li>tijdverlies door zoeken is beperkt </li>
                    <li>er is weer kastruimte beschikbaar </li>
                    <li>het is eenvoudiger geworden om prioriteiten te stellen </li>
                    <li>men kan (weer) "nee" zeggen </li>
                    <li>er is grip op de activiteiten </li>
                    <li>onverwachte gebeurtenissen leiden niet tot achterstand en stress</li>
                    <li>overwerken is geen gewoonte meer </li>
                    <li>collega's zijn onderling vervangbaar </li>
                    <li>na elke werkdag een voldaan gevoel</li>
                </ul>
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
