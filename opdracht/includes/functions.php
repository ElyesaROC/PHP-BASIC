<?php

$itemsProducten = array ("Appels", "peren", "ananas", "banaan", "sinasappel", "perzik", "kersen", "aardbeien", "mango", "druif");

$itemsPrijs = array (0.10, 0.20, 0.30, 0.40, 0.50, 0.60, 1.0, 2.00, 4.00, 5.00);


function getInput()
{
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    echo $input;
}

function getProductNr()
{
    $productnummer = $_GET['productnummer'] ?? 0 ;
    return $productnummer;
}

function getAmount()
{
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    return $aantalProd;
}

function totaalPrijs()
{
  
    global $itemsPrijs;

    if(isset($_GET['aantal']) && isset($_GET['productnummer'])  ){
        $totaalprijs = getAmount() * $itemsPrijs[ getProductNr() ];
        echo $totaalprijs;
        return $totaalprijs;

    }
}

function getAge()
{
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    echo $leeftijd;
}

function korting()
{
    if( $_GET['leeftijd'] < 16){
        $korting = ($totaalPrijs - 1.00);
            echo $korting;
    }

    elseif($_GET['leeftijd'] == 16){
        $korting = ($totaalPrijs - 0.16);
        echo $korting;
    }

    elseif($_GET['leeftijd'] == 17){
        $korting = ($totaalPrijs - 0.17);
            echo $korting;
    }

    elseif($_GET['leeftijd'] == 18){
        $korting = ($totaalPrijs - 0.18);
            echo $korting;
    }

    elseif($_GET['leeftijd'] == 19){
        $korting = ($totaalPrijs - 0.19);
            echo $korting;
    }

    else{
        $korting = 0;
        echo $korting;
    }
    

}

?>