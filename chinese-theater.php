<? $page = "venue" ?>



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
          <div class="row">
            <div class="col-md-2">
              <img src="img/chinese-theater.png" alt="" class="img-responsive">
            </div>
            <div class="col-md-4">
              <h2 class="nmt">Chinese Theater</h2>
              <h4>1101 Kansalas Rd</h4>
              <h4>Oakland, CA 94104</h4>
              <h5>(555)555-5555</h5>
            </div>
            <div class="col-md-6 venue-info">
            <dl>
              <dt>Seating:</dt>
              <dd>3,000</dd>
              <dt>Audio Format:</dt>
              <dd>5.1</dd>
              <dt>Supported Media Types:</dt>
              <dd>H.264, MPG, ProRes</dd>
            </dl>

            </div>
          </div>
          <div class="row">
            <hr class="light-sep">
            <a href="" class="btn-cta"><span class="ss-icon label-ico">computer</span>Tech Contact</a>
            <a href="" class="btn-cta"><span class="ss-icon label-ico">pricetag</span>Billing Contact</a>
            <a href="" class="btn-cta"><span class="ss-icon label-ico">edit</span>Edit Venue Info</a>
            <a href="" class="btn-cta"><span class="ss-icon label-ico">trash</span>Delete Venue</a>
          </div>
          <div class="row">
            <hr class="light-sep">
            
            <a href="">
                <div class="playlist-card">
                    <h5><span class="ss-icon label-ico">list</span>Playlist name</h5>
                </div>
            </a>
            <a href="">
                <div class="playlist-card">
                    <h5><span class="ss-icon label-ico">list</span>Playlist name</h5>
                </div>
            </a>
            <a href="">
                <div class="new-playlist-card">
                    <h5><span class="ss-icon label-ico">plus</span>Create a New Playlist</h5>
                </div>
            </a>


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
