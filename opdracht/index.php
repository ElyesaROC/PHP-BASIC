<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
  </head>
  <body>

  <?php 
  include 'menu.php';
  require 'includes/functions.php'
  ?>
    
    <form action="index.php" method="get"><!-- dit laten staan! -->

    <p>Op deze website kun je checken welk datatype je hebt ingevoerd.</p>
    <P>Vul hieronder een getal, een decimaal, een tekst of de tekst true/false in en klik op check!</p> 
    <input type="text" name="input"><!-- dit laten staan! -->
    <button type="submit" name="submit">Check</button><!-- dit laten staan! -->

    <p>Het datatype van de waarde: <?php echo getInput(); ?> is 

  <?php
if( isset($_GET['input']) ){
  echo gettype($_GET['input']);
}
  ?>
  </p>
    </form><!-- dit laten staan! -->

    <?php include 'footer.php';

  ?>
  </body>
</html>