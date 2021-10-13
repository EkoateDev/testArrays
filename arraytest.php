<?php

// Question 1

// $color = [
//     0 => 'white',
//     1 => 'green',
//     2 => 'red',
//     3 => 'blue',
//     4 => 'black'
// ];

// echo 'The memory of that scene for me is like a frame of film forever frozen at that moment:' . 'the' . ' ' . $color[2] . ' ' . 'carpet,' . ' '
//     . 'the' . ' ' . $color[1] . ' ' . ' lawn,' . ' ' . 'the' . ' ' . $color[0] . ' ' . 'house,' . ' ' . 'the leaden sky.' . ' ' . ' The new president and his first lady. '
//     . ' ' . '- Richard M. Nixon';



// // Question 2 

// $color = [
//     'one' => 'green',
//     'two' => 'red',
//     'three' => 'white'
// ];

// echo 'Output:' . '<br>'
//     . 'green,' . ' ' . 'red,' . ' ' . 'white';


// echo
// '<ul><li>' . $color['one'] . ' ' . '<li>'  . $color['two'] . ' ' .  '<li>' . $color['three'] . '</li></ul>';

// // foreach ($color as $colors) {
// //     echo
// //     '<ul><li>' .$colors['one']  .$colors['two'] . $colors['three'] . '</li></ul>';
// // }


// //Question 3

// $ceu = [
//     "Italy" => "Rome",
//     "Luxembourg" => "Luxembourg",
//     "Belgium" => "Brussels",
//     "Denmark" => "Copenhagen",
//     "Finland" => "Helsinki",
//     "France" => "Paris",
//     "Slovakia" => "Bratislava",
//     "Slovenia" => "Ljubljana",
//     "Germany" => "Berlin",
//     "Greece" => "Athens",
//     "Ireland" => "Dublin",
//     "Netherlands" => "Amsterdam",
//     "Portugal" => "Lisbon",
//     "Spain" => "Madrid",
//     "Sweden" => "Stockholm",
//     "United Kingdom" => "London",
//     "Cyprus" => "Nicosia",
//     "Lithuania" => "Vilnius",
//     "Czech Republic" => "Prague",
//     "Estonia" => "Tallin",
//     "Hungary" => "Budapest",
//     "Latvia" => "Riga",
//     "Malta" => "Valetta",
//     "Austria" => "Vienna",
//     "Poland" => "Warsaw"
// ];
// asort($ceu);

// foreach ($ceu as $country => $capital) {
//     echo 'The capital of' . ' ' . $country . ' ' . 'is' . ' ' . $capital;
//     echo '<br>';
// }


// //Question 4

// $x = [
//     0 => 1,
//     1 => 2,
//     2 => 3,
//     3 => 4,
//     4 => 5,
// ];

// echo var_dump($x) . '<br>';
// unset($x[3]);
// $x = array_values($x);
// echo '<br>';
// echo var_dump($x);


// // question 5

// $color = [
//     4 => 'white',
//     6 => 'green',
//     11 => 'red'
// ];

// $colorDisplay = $color[4];

// echo $colorDisplay;

// Question 6 

// $jsonObject = '{
// "Title": "The Cuckoos Calling",
// "Author": "Robert Galbraith",
// "Detail": {
// "Publisher": "Little Brown"
// }
// }';

// $object = json_decode($jsonObject, true);

// echo 'Title:' . ' ';
// echo $object['Title'];
// echo '<br>' . '<br>';
// echo 'Author:' . ' ';
// echo $object['Author'];
// echo '<br>' . '<br>';
// echo 'Publisher:' .' ';
// echo $object['Detail']['Publisher'];


// Question 7

// $originalArray = [
//     1,
//     2,
//     3,
//     4,
//     5
// ];

// echo 'Original array:';
// echo '<br>';
// foreach ($originalArray as $x) {
//     echo $x;
// };

// $newValue = '$';

// $position = 3;

// array_splice($originalArray, $position, 0, $newValue);
// echo '<br>';
// echo '<br>';
// echo 'After inserting "$" the array is :';
// echo '<br>';
// foreach ($originalArray as $x) {
//     echo $x;
// };

$details = [
    'Sophia' => '31',
    'Jacob' => '41',
    'William' => '39',
    'Ramesh' => '40',
];
