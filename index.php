<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tradecast -- Home</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">
  </head>
  <body id="home">
   	<section class="container">
      <div class="content row">
        <?php include "_/components/php/header.php"; ?>
        <?php include "_/components/php/snippet-carousel.php"; ?>
        <section class="main col col-lg-12">
        	<?php include "_/components/php/article-intro.php"; ?>
          <?php include "_/components/php/thumbnails.php"; ?>
         

        
        </section> <!-- main -->
      </div> <!-- content -->
      <?php include "_/components/php/footer.php"; ?>
   	</section> <!-- container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="_/js/bootstrap.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="_/js/myscript.js"></script>
  </body>
</html>