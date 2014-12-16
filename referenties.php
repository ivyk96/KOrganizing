<!DOCTYPE html>
<html lang="en">

<head>
	<title>Kate Organizing - Referenties</title>
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
                <h3 class="page-header2">referenties</h3>
            </div>

            <br>

            <div class="col-lg-12">
                <h4 class="page-header3">TEVREDEN KLANTEN</h4>
            </div>
        </div>
        <hr>
        <div class="row"> 
            <div class="col-md-12">
                
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
