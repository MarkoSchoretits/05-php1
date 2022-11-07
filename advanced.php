<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Austrian Industrial Beer</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <?php
    $beers = array(
        "Goesser" => array(
            "Style" => "Märzen",
            "Alk / %vol" => 5.2,
            "City/Town" => "Leoben",
            "State" => "Styria"
        ), 
        "Wieselburger" => array(
            "Style" => "Gold (has more malt)",
            "Alk / %vol" => 5.0,
            "City/Town" => "Wieselburg",
            "State" => "Lower Austria"
        ), 
        "Hirter" => array(
            "Style" => "German Pilsner",
            "Alk / %vol" => 5.2,
            "City/Town" => "Micheldorf/Hirt",
            "State" => "Carinthia"
        ), 
        "Ottakringer" => array(
            "Style" => "Lager",
            "Alk / %vol" => 5.2,
            "City/Town" => "Ottakring",
            "State" => "Vienna"
        )
    );
    ?>
    
</head>
<body>
    <h2>Some Austrian Beers</h2> <br>

    <?php
        echo "Gösser is a ";
        echo $beers['Goesser']['Style']. " ";
        echo "with ";
        echo $beers['Goesser']['Alk / %vol'];
        echo " %vol of alcohol.<br>
        It is brewed in ";
        echo $beers['Goesser']['City/Town'];
        echo " in ";
        echo $beers['Goesser']['State'] . ". <br> <br>";

        echo "Wieselburger is a ";
        echo $beers['Wieselburger']['Style']. " ";
        echo "with ";
        echo $beers['Wieselburger']['Alk / %vol'];
        echo " %vol of alcohol.<br>
        It is brewed in ";
        echo $beers['Wieselburger']['City/Town'];
        echo " in ";
        echo $beers['Wieselburger']['State'] . ". <br> <br>";

        echo "Hirter is a ";
        echo $beers['Hirter']['Style']. " ";
        echo "with ";
        echo $beers['Hirter']['Alk / %vol'];
        echo " %vol of alcohol.<br>
        It is brewed in ";
        echo $beers['Hirter']['City/Town'];
        echo " in ";
        echo $beers['Hirter']['State'] . ". <br> <br>";

        echo "Ottakringer is a ";
        echo $beers['Ottakringer']['Style']. " ";
        echo "with ";
        echo $beers['Ottakringer']['Alk / %vol'];
        echo " %vol of alcohol.<br>
        It is brewed in ";
        echo $beers['Ottakringer']['City/Town'];
        echo " in ";
        echo $beers['Ottakringer']['State'] . ". <br> <br>";

    ?>
</body>
</html>