<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9/29 Class</title>
    <style>
        body {
            color: blue;
        }
        /* you can also link style sheet */
    </style>
</head>
<body>
    <!-- <?php include 'filename.php'; ?>
    if you need to change all the pages you can just edit part of it and it changes the entire thing so you dont have to go to each page. -->
    <h1> Is this still working? </h1>
    <?php
    echo 'hello';
    ?>
    <h2><?php echo 'good bye'; ?></h2>
    <!-- <?php include 'file name'; ?> -->
    <?php
   echo 'echo echo echo'; 
    ?>
    <footer>
    </footer>
</body>
</html>

<!-- casing variable  -->
<?php 

$item = 'item';
$age=30;
// just use either camelCase or Under_score

// number
$variable3 = 'some string';
//can't start with number like $3variable (a no-no)
$x = 'hello world!';
echo $x; //hello world
echo '<br>';

//for debugging- like console.log, it shows on local host
var_dump ($x);

//const vs. let, you can never override with const so no one can really mess with you...
//compared to let which lets you override it

//array- a collection of values

$favorite_car_brands = [
    'volvo',
    'BMW',
    'Toyta'

];

//concatenation
$first_name = 'Lauren';
$last_name = 'Lee';
$full_name= $first_name . $last_name;
echo $full_name;// LaurenLee

$phrase = 'Hello my name is'.' '.$first_name . ' '.$last_name;
echo '$phrase';//hello my name is lauren lee

$phrase = 'Hello';
//single quotes vs double
//single quotes is always text
echo '$phrase Again'; //$phrase Again
echo $phrase. 'Again'; //Hello Again
//double quotes will allow you to render the php
echo "$phrase Again"; // Hello Again
// just use double quotes

//PEMDAS
$var1 = 3;
$var2 = 4;
$basic_math_value = ((1+2+ $var1) * $var2)/2-5;
echo $basic_math_value;

//increment increase
$var2++ // 4++
//echo 'Increment $var2'. $var2;
//decrease is --

//if you want to round a number up do echo round (...)

//is_int gives you true or false if it is an integer


// 10/06
//if (!$user_logged_in)=if (user is NOT logged it) THE OPPOSITE !=NOT

// $a = 2;
// $b = 2;

// if ($a>$b) {
//     echo 'hey';
// } elseif ($a<$b){
//     echo 'wow';
// } else {
// echo 'equality for all!';
// }

// use switch statement when you have a lot of things 

//Loops
//endless loop example but DONT DO THIS OR BREAKS THE COMPUTER
//     $count = 0;

// while ($count <= 10) {
//     echo $count; //0
//     echo '<br';
// }


?>