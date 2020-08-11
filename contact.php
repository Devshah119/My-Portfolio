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

        ?>

        <div class="container my-5">
          <h2 class="mb-4 text-center">Contact Me</h2>
          <div class="row">
            <div class="col-12">
              <form>
                <div class="row mb-4">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="First name">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Last name">
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col">
                    <textarea class="form-control" placeholder="Message"></textarea>
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col">
                    <input type="submit" name="submit" class="btn btn-dark" value="Submit">
                  </div>
                </div>
              </form>
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