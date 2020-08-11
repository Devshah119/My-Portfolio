<?php
  
  include 'stock/stock.php';
 
  include 'web-service/collect-and-print-data.php';
 
  ?>
 
  <!doctype html>
 
  <html lang="en">
 
    <head>
  
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <title>Store Catalog</title>

      <?php

      //css
      include 'includes/styles.php';
    
      ?>

    </head>
   
    <body>

      <?php

      //navigation 
      include 'includes/navigation.php';
      ?>


      <main role="main">

        <?php

        // masthead
        include 'includes/masthead.php';
        ?>

        <div class="container">
          <p class="lead text-center">Have a look at my portfolio categories below</h2>
          <div class="row">
        
            <div class="col-sm-12 col-md-6 col-lg-4 mb-0">
              <figure>
                  <h4>Photography<small class="float-right"><a href="./portfolio.php?code=pho">Browse</a></small></h3>
                  <img src="img/camera-1.jpeg" class="img-fluid" alt="Photography">
              </figure>
            </div>
        
            <div class="col-sm-12 col-md-6 col-lg-4 mb-0">
              <figure>
                  <h4>Web Design<small class="float-right"><a href="./portfolio.php?code=web">Browse</a></small></h3>
                  <img src="img/coding.jpg" class="img-fluid" alt="Coding">
              </figure>
            </div>
        
            <div class="col-sm-12 col-md-6 col-lg-4 mb-0">
              <figure>
                  <h4>Graphic Design<small class="float-right"><a href="./portfolio.php?code=gra">Browse</a></small></h3>
                  <img src="img/graphic.jpg" class="img-fluid" alt="Designing">
              </figure>
            </div>

            
        
          </div>
        </div>

      </main>

    <?php

      //footer code
      include 'includes/footer.php';

      //external js
      include 'includes/scripts.php';
    ?>

  </body>
  
</html>