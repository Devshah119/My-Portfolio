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
      <title>Serenity Designs</title>

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


        <div class="container my-5">
          <h2 id="catalog">My Portfolio</h2>

          <p class="lead mb-4">A little taste of my works and projects.</p>
          <div class="row">
        
            <?php
        
              printHTML();
        
            ?>
        
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