<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tradecast -- Home</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">
    <!-- css background image 
    <style type="text/css">
    #myDiv{
      background-image: url(images/carousel/earth.jpg);
      background-position: left-top;
      background-repeat: no-repeat; 
      width: 1500px;
      height: 600px;

    } 
      -->
  </head>

  <body id="home">
   	<section class="container">
      <div class="content row">
        <?php include "_/components/php/header.php"; ?>
        <?php include "_/components/php/snippet-carousel.php"; ?>
        <div id="myDiv"></div> <!-- end -->

        
        <section class="main col col-lg-8">
        	<?php include "_/components/php/article-intro.php"; ?>
        </section> <!-- main -->
        <section class="sidebar col col-lg-4">
          <?php include "_/components/php/aside-register.php"; ?>
        </section> <!-- sidebar -->

        <?php include "_/components/php/thumbnails.php"; ?>
      </div> <!-- content -->
      <?php include "_/components/php/footer.php"; ?>
   	</section> <!-- container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="_/js/bootstrap.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="_/js/myscript.js"></script>

  </body>
</html>