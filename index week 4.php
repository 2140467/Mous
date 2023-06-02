<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    

    <h1>//deel1//</h1>

    <?php
     for($i = 1; $i <= 50; $i++) {
        echo $i . " ";
     }
     
    ?>

    <h2>/deel2/</h2>
    <?php
    $mijnklas = array("mo", "marou","hamid","safae","moustafa","cagatay","david","turk","mootje","maeshal");
   foreach($mijnklas as $naam) {
    echo $naam . "<br>";
   }
    ?>


<h3>/deel3/</h3>
<?php

$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December']; 

$aantaalmanden = count($maanden); // lengte van array verkrijgbaar 

for ($i= 0; $i <$aantaalmanden; $i++) {
    echo 'maanden'.($i+ 1) . 'is'. $maanden[$i] . '<br/>';
}
?>
<h4>/deel4/</h4>
<?php
$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December']; 
 foreach($maanden as $aantaalmanden){
    echo $aantaalmanden . "<br>";
 }
?>

</body>



</html>