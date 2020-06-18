<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PRODUCTEN</title>
  </head>
  <body>

  <?php 
  include 'menu.php'; 
  require 'includes/functions.php'; 
  ?>

    <form action="producten.php" method="get"><!-- dit laten staan! -->

    <p>Hieronder een lijst met producten die je bij ons kunt bestellen en de prijs per stuk:</p>
        
<?php 

?>

        <table>
            <tr>
                <th>#</th>
                <th>product</th>
                <th>prijs per stuk</th>
            </tr>
            <tr>
                <td>0</td>
                <td><?php echo $itemsProducten[0] ?></td>
                <td><?php echo $itemsPrijs[0] ?></td>
            </tr>
            <tr>
                <td>1</td>
                <td><?php echo $itemsProducten[1] ?></td>
                <td><?php echo $itemsPrijs[1] ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td><?php echo $itemsProducten[2] ?></td>
                <td><?php echo $itemsPrijs[2] ?></td>
            </tr>
            <tr>
                <td>3</td>
                <td><?php echo $itemsProducten[3] ?></td>
                <td><?php echo $itemsPrijs[3] ?></td>
            </tr>
            <tr>
                <td>4</td>
                <td><?php echo $itemsProducten[4] ?></td>
                <td><?php echo $itemsPrijs[4] ?></td>
            </tr>
            <tr>
                <td>5</td>
                <td><?php echo $itemsProducten[5] ?></td>
                <td><?php echo $itemsPrijs[5] ?></td>
            </tr>
            <tr>
                <td>6</td>
                <td><?php echo $itemsProducten[6] ?></td>
                <td><?php echo $itemsPrijs[6] ?></td>
            </tr>
            <tr>
                <td>7</td>
                <td><?php echo $itemsProducten[7] ?></td>
                <td><?php echo $itemsPrijs[7] ?></td>
            </tr>
            <tr>
                <td>8</td>
                <td><?php echo $itemsProducten[8] ?></td>
                <td><?php echo $itemsPrijs[8] ?></td>
            </tr>
            <tr>
                <td>9</td>
                <td><?php echo $itemsProducten[9] ?></td>
                <td><?php echo $itemsPrijs[9] ?></td>
            </tr>
        </table>

    <p>Vul hieronder het productnummer in van het product wat je wilt bestellen en de hoeveelheid.</p> 
    <p><label>productnummer(#): </label><input type="text" name="productnummer"> &nbsp;&nbsp;<label>aantal: </label><input type="text" name="aantal"></p><!-- dit laten staan! -->
    
    <p>Vul je leeftijd in voor korting</p>
    <p><label>leeftijd: </label><input type="text" name="leeftijd"></p><!-- dit laten staan! -->

    <p><button type="submit" name="submit">Bereken totaal</button></p><!-- dit laten staan! -->

    <p>voor <?php echo getAmount(); ?> x het product: <?php echo $itemsProducten[ getProductNr() ]; ?> betaal je: <?php totaalPrijs('productnummer') ?></p>
    
    <p>je bent <?php getAge(); ?> je korting is:   <?php korting() ?>  </p>

    </form><!-- dit laten staan! -->

    <footer>
    <?php include 'footer.php';
    ?>
    </footer>

  </body>

</html>