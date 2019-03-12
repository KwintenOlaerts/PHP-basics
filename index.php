<?php

// Implement this on the top of your file to display all the php errors and warning in your code below. 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Or alternatively you can ave this in an separate file and include the file u want to debug with
// uncommenting the code below. 
// include '/path/to/your/file.php';
// Indexed arrays
$peopleOne = ['Lander', 'Boasske', 'Deo'];

$peopleTwo = array('Laxmi', 'Mark', 'Magda');

echo $peopleOne[2];

echo $peopleTwo[1];

$ages = [20, 24, 28, 50];
// print_r($ages);

$ages[1] = 25;
// print_r($ages);

$ages[] = 60;
// print_r($ages);

array_push($ages, 70);
// 


// zo voeg je 2 arrays tesamen
$peopleThree = array_merge($peopleOne, $peopleTwo);
print_r($peopleThree);

// tellen van alle arrays
echo count($ages);

// associative arrays (key & value pairs)

$kwintenOne = ['Lander' => 'beast', 'Deo', ];




// $radius = 25;
// $pi = 3.14;

// basic operators - *, /, +, -, **

// order of operation ( B I D M A S)

// echo 2 *(4 + 9) / 3;

// $age = 20;
// $age *= 2;
// echo $age;

// echo pi();

// $stringOne = 'Mijn emailadres is ';
// $stringTwo = 'kwintenolaerts@hotmail.com';

// echo $stringOne.$stringTwo;

// $name = 'biestje';

// echo 'Hey, my name is ' . $name;

// echo "Hallo my name is $name";
// echo 'the ninja screamed "whaaaaazup nigga"';

// // echo $name [2]

echo strlen($name);
echo strtoupper($name)
echo str_replace('b', 'f', $name);


?>


<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <h1><?php echo "hey"; ?></h1>
    <div></div>
 <div><?php echo $age; ?></div>

</body>
</html>