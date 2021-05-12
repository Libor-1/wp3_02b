<?php

function getCarDescription(int $year):void {
    if ($year <= 1900) {
        echo "Něco takového ještě jezdí? :)";
    }
    elseif ($year <= 1980) {
        echo "Hodně stará kára";
    }
    elseif ($year <= 2000) {
        echo "To už by šlo";
    }
    elseif ($year <= 2010) {
        echo "Dobrý";
    }
    
else {
    echo "Super!!!";
    }
}

function getTax(int $engine):void {
    if ($engine <= 800) {
    echo "1200";
    }

    elseif ($engine <= 1250) {
        echo "1500";
    }

    elseif ($engine <= 1500) {
        echo "2000";
    }

    elseif ($engine <= 2000) {
        echo "3000";
    }

    else  {
        echo "4200";
    }

}

?>

