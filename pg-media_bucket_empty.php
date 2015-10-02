<? $page = "media"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Cinematiq - Digital Motion Picture Lab in San Francisco</title>

    <!-- Bootstrap core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

    <!-- ss -->
    <link href="bower_components/bootstrap/dist/css/ss-standard.css" rel="stylesheet">
    <link href="bower_components/bootstrap/dist/css/ss-glyphish-outlined.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--<script src="bower_components/bootstrap/js/ie-emulation-modes-warning.js"></script>-->
    
    <script src="https://use.typekit.net/qxs1gwn.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

<?php include 'topnav-signed-in.php' ?>

<div class="container">
    <div class="row">
        <div class="col-md-2">
            <?php include 'event-menu.php' ?>
        </div>
        <!-- <div class="col-md-10"><div class="pull-right"><a href="" class="cta-btn"><span class="ss-icon label-ico">upload</span>Upload Media</a></div></div> -->
    </div>
    <div class="row">
        <div class="col-md-2">
            <?php include 'left-menu.php' ?>
        </div>
        <div class="col-md-10">
            <div class="text-center empty-msg">
                <div class="block btn-cta">
                    <a href="pg-media_bucket.php">
                        <span class="block ss-icon">upload</span>
                        <h2>Add new media</h2>
                    </a>
                </div>
            </div>
        </div>
    </div>







    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/ss-standard.js"></script>
    <script src="bower_components/bootstrap/dist/js/ss-glyphish-outlined.js"></script>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
