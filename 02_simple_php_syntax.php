<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables - Comments, Constants, and var_dump</title>
</head>

<body>

<!-- VARIABLES -->
<?php

$name = 'Justine';
$age = 20;
$address = 'Larlin Village, Apalit, Pampanga';
$hobbies = 'Dancing, Sleeping';
$pet_peeve = 'Sneezing or coughing without covering your mouth';

echo $name. "<br>";
echo $age. "<br>";
echo $address. "<br>";
echo $hobbies. "<br>";
echo $pet_peeve. "<br>". "<br>";

?>

<!-- SINGLE-LINE COMMENT -->
<?php

$name = 'Justine';
$age = 20;
$address = 'Larlin Village, Apalit, Pampanga';
// $hobbies = 'Dancing, Sleeping';
// $pet_peeve = 'Sneezing or coughing without covering your mouth';

?>

<!-- CONSTANTS -->
<?php

define('NAME', 'Justine');
define('AGE', 20);
define('ADDRESS', 'Larlin Village, Apalit, Pampanga');
define('HOBBIES', 'Dancing, Sleeping');
define('PET_PEEVE', 'Sneezing or coughing without covering your mouth');

echo NAME, "<br>";
echo AGE, "<br>";
echo ADDRESS, "<br>";
echo HOBBIES, "<br>";
echo PET_PEEVE, "<br>", "<br>";

?>

<!-- VAR_DUMP -->
<?php

var_dump($name);
var_dump($age);
var_dump($address);
var_dump($hobbies);
var_dump($pet_peeve);

?>

<!-- MULTI-LINE COMMENT -->
<?php
$pet_peeve = 'Sneezing or coughing without covering your mouth';

/*
This has been one of my pet peeves because I am very particular of the 
transimission of diseases, aside of it being unsanitary. 
To me, it is almost a form of respect to others or your company 
to cover your nose and mouth while sneezing or coughing.
*/

?>


</body>

</html>
