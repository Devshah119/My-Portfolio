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
          
          <div class="row">
            <div class="col-12 col-md-8 mb-5">
              <h2 class="mb-4">About Me</h2>
              <p class="lead">Hello, my name is Dev Shah and I belong to a small city called Vadodara, located in Gujarat-India. I have completed my Bachelors i.e. B.Tech in Print and Media Technology from Manipal Institute of Technology located in Karnataka, India. My family owns a printing business and actually I am the fourth generation to have had a part/interest in it and one of my goals is to expand the family business and keep its name intact for generations to come. I can say that I am well-versed in Graphic Designing applications like CorelDRAW, Adobe Photoshop, Adobe Illustrator and would definitely be interesting other elements required for becoming a designer such as Web Design, Web Development, UX Designs.</p>
              <p class="lead">Other than academics I am pretty good at cooking, sketching and playing keyboard. I and an introvert guy and do not like humans very much. But I like animals especially Kitties and Doggos very much and so that says that if I talk to you for more than 5 minutes, you're a very lucky person. I like Table Tennis, Cricket and listening to music (old school i.e. Led Zeppelin, Pink Floyd, Dire Straits). I love to cook and eat as you can see. I guess that's pretty much everything there is about me.</p>
              <a href="resume.pdf" class="btn-link mb-5">View my Resume</a>
            </div>
            <div class="col-12 col-md-4">
              <img src="img/dev.jpg" class="img-fluid img-thumbnail">
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