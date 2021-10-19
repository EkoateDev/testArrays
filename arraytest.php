<?php

// Question 1

// $color = [
//     'white',
//     'green',
//     'red',
//     'blue',
//     'black'
// ];

// echo 'The memory of that scene for me is like a frame of film forever frozen at that moment: the 
// ' . $color[2] . ' carpet, the ' . $color[1] . ' lawn, the ' . $color[0] . ' house, 
// the leaden sky. The new president and his first lady. - Richard M. Nixon';



// Question 2 

// $color = [
//     'white',
//     'green',
//     'red'
// ];

// echo '<em>Output:</em>';
// echo '<br>';
// echo $color[0] . ', ' . $color[1] . ', '  . $color[2] . ', ';
// echo '<br>';
// echo '<ul>
//     <li>' . $color[1] . '</li>
//     <li>' . $color[2] . '</li>
//     <li>' . $color[0] . '</li>
// </ul>';



//Question 3

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
//     echo 'The capital of ' . $country .  ' is ' . $capital;
//     echo '<br>';
// }


//Question 4

// $x = [
//     1,
//     2,
//     3,
//     4,
//     5
// ];

// echo '<em> Sample Output : </em>';
// echo '<br>';
// echo var_dump($x);
// echo '<br>';
// unset($x[3]);

// $xValues = array_values($x);
// echo '<br>';
// echo var_dump($xValues);


// question 5

// $color = [
//     4 => 'white',
//     6 => 'green',
//     11 => 'red'
// ];

// $colorDisplay = $color[4];

// echo '<em> Expected result : </em>' . $colorDisplay;



// Question 6 

// $jsonObject = '{
// "Title": "The Cuckoos Calling",
// "Author": "Robert Galbraith",
// "Detail": {
// "Publisher": "Little Brown"
// }
// }';

// $object = json_decode($jsonObject, true);
// echo '<em> Expected Output : </em>';
// echo '<br>';
// echo 'Title : ' . $object['Title'];
// echo '<br>';
// echo 'Author : ' . $object['Author'];
// echo '<br>';
// echo 'Publisher : ' . $object['Detail']['Publisher'];

// Question 7

// $originalArray = [
//     1,
//     2,
//     3,
//     4,
//     5
// ];

// echo '<em> Expected Output : </em>';
// echo '<br>';
// echo 'Original array :';
// echo '<br>';
// foreach ($originalArray as $x) {
//     echo $x;
// }

// $newValue = '$';

// $position = 3;

// array_splice($originalArray, $position, 0, $newValue);

// echo '<br>';
// echo '<br>';
// echo 'After inserting "$" the array is :';
// echo '<br>';
// foreach ($originalArray as $x) {
//     echo $x;
// }


// Question 8
// $details = [
//     'Sophia' => '31',
//     'Jacob' => '41',
//     'William' => '39',
//     'Ramesh' => '40',
// ];
// asort($details);
// echo 'Accending Order By Values : ';
// echo '<br>';
// foreach ($details as $x => $xvalues) {
//     echo $x . ' => '  . $xvalues . ' ';
// }

// echo '<br>';
// echo '<br>';

// ksort($details);
// echo ' Accending order by Key : ' . ' ';
// echo '<br>';
// foreach ($details as $x => $xvalues) {
//     echo 'Key = ' . $x . ' , ' . 'Value = ' . $xvalues;
//     echo '<br>';
// }

// echo '<br>';
// echo '<br>';

// arsort($details);
// echo ' Descending order by Value : ' . ' ';
// echo '<br>';
// foreach ($details as $x => $xvalues) {
//     echo 'Key = ' . $x . ' , ' . 'Value = ' . $xvalues;
//     echo '<br>';
// }

// echo '<br>';
// echo '<br>';

// krsort($details);
// echo ' Descending order by Key : ' . ' ';
// echo '<br>';
// foreach ($details as $x => $xvalues) {
//     echo 'Key = ' . $x . ' , ' . 'Value = ' . $xvalues;
//     echo '<br>';
// }

// $recordedTemperatures = '78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73';

// $temperatureArray = explode(',', $recordedTemperatures);

// $totalTemperature = array_sum($temperatureArray);

// $temperatureArrayLength = count($temperatureArray);

// echo '<em> Expected Output :</em>';
// echo '<br>';

// foreach ($temperatureArray as $temp) {
//     $temp =  $totalTemperature / $temperatureArrayLength;
// }
// echo 'Average Temperature is : ' . $temp;

// echo '<br>';
// echo '<br>';

// sort($temperatureArray);
// echo 'List of Seven lowest temperatures : ';
// for ($x = 0; $x < 7; $x++) {
//     echo $temperatureArray[$x];
// }

// echo '<br>';
// echo '<br>';

// echo 'List of Seven Highest temperatures : ';
// for ($x = ($temperatureArrayLength - 7); $x < ($temperatureArrayLength); $x++) {
//     echo $temperatureArray[$x];
// }


// Question 10 

// function displayValues($inputArray)
// {
//     $x = $inputArray;

//     if (count($x) == 0)
//         return array();

//     elseif (count($x) == 1)
//         return array_chunk($x, 1);

//     array_unshift($inputArray, NULL);

//     $valueSorting = call_user_func_array('array_map', $inputArray);
//     return array_map('array_filter', $valueSorting);
// }
// function bead_sort($inputArray)
// {
//     foreach ($inputArray as $i)
//         $positiveValues[] = array_fill(0, $i, 1);
//     return array_map('count', displayValues(displayValues($positiveValues)));
// }

// echo '<em>Input Array : </em>';
// print_r(array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3));
// echo '<br>';
// echo '<em> Expected Result : </em>';
// print_r(bead_sort(array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3)));


// Question 11

// $arrayOne = [
//     array(77, 87), 
//     array(23, 45)
// ];

// $arrayTwo = [
//     'w3resource', 
//     'com'
// ];

// function mergeByIndex($value1, $value2)
// {
//     $result = array();
//     $result[] = $value1;
//     if (is_scalar($value2)) {
//         $result[] = $value2;
//     } else {
//         foreach ($value2 as $x => $y) {
//             $result[] = $y;
//         }
//     }
//     return $result;
// }
// echo '<pre>';
// print_r(array_map('mergeByIndex', $arrayTwo, $arrayOne));


// Question 12

// function arrayChange($input, $userCase)
// {
//     $cases = $userCase;
//     $defaultArray = array();

//     if (!is_array($input)) {
//         return $defaultArray;
//     }
//     foreach ($input as $key => $value) {
//         if (is_array($value)) {
//             $defaultArray[$key] = arrayChange($value, $cases);
//             continue;
//         }
//         $defaultArray[$key] = ($cases == CASE_UPPER ? strtoupper($value) : strtolower($value));
//     }
//     return $defaultArray;
// }

// $color = [
//     'A' => 'Blue',
//     'B' => 'Green',
//     'c' => 'Red'
// ];

// echo '<em> Expected Output : </em>';
// echo '<br>';

// echo 'Values are in lower case. ';
// echo '<br>';
// $newCase = arrayChange($color, CASE_LOWER);
// print_r($newCase);
// echo '<br>';

// echo 'Values are in upper case. ';
// echo '<br>';
// $newCase = arrayChange($color, CASE_UPPER);
// print_r($newCase);


// Question 13 

// echo implode(',', range(200,250,4));
// echo '<br>';

// Question 14 

// $defaultArray = ['abcd','abc','de','hjjj','g','wer'];

// $newArray = array_map('strlen', $defaultArray);

// echo '<em>Expected Output : </em>';
// echo 'The shortest array length is '.min($newArray) .'.'
// . ' The longest array length is ' .max($newArray) .'.';

// Question 15 

// $randomNumbers = range(11, 20);
// shuffle($randomNumbers);

// echo '<em> Sample Range : (11, 20)</em>';
// echo '<br>';
// echo '<em>Sample Output : </em>';

// for ($i = 0; $i < 10; $i++) {
//     echo $randomNumbers[$i] . ' ';
// }


// Question 16 

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

// $maxArrayKey = max(array_keys ($ceu));

// echo 'The Highest Array Key is ' . $maxArrayKey;


// Question 17 

// function minValue(array $values)
// {
//     return min(array_diff(array_map('intval', $values), array(0)));
// }

// print_r(minValue(array(-1, -1, 0, 1, 12, -100, 1)));


// Question 18 

// function decimalNumbers($number, $precision, $separator)
// {
//     $accurateNum = explode($separator, $number);
//     $accurateNum[1] = substr_replace($accurateNum[1], $separator, $precision, 0);
//     if ($accurateNum[0] >= 0) {
//         $accurateNum[1] = floor($accurateNum[1]);
//     } else {
//         $accurateNum[1] = ceil($accurateNum[1]);
//     }
//     $ceilNumber = array($accurateNum[0], $accurateNum[1]);
//     return implode($separator, $ceilNumber);
// }
// echo '<em> Expected Output : </em>';
// echo '<br>';

// print_r(decimalNumbers(1.155, 2, "."));
// echo '<br>';
// print_r(decimalNumbers(100.25781, 4, "."));
// echo '<br>';
// print_r(decimalNumbers(-2.9636, 3, "."));


// Question 19

// $color = [
//     'color' =>
//     array(
//         'a' => 'Red',
//         'b' => 'Green',
//         'c' => 'White'
//     ),
//     'numbers' => array(
//         1, 2, 3, 4, 5, 6
//     ),
//     'holes' => array('First', 5 => 'Second', 'Third')
// ];

// echo $color['holes'][5];
// echo '<br>';
// echo $color['color']['a'];

// Question 20

// function arraySort($val1, $val2)
// {
//     global $structure;

//     foreach ($structure as $i => $z) {
//         if ($val1 == $z) {
//             return 0;
//             break;
//         }

//         if ($val2 == $z) {
//             return 1;
//             break;
//         }
//     }
// }

// $structure[0] = 1;
// $structure[1] = 3;
// $structure[2] = 4;
// $structure[3] = 2;

// $priority[0] = 2;
// $priority[1] = 1;
// $priority[2] = 3;
// $priority[3] = 4;
// $priority[4] = 2;
// $priority[5] = 1;
// $priority[6] = 2;

// usort($priority, 'arraySort');
// echo '<br>';
// print_r($priority);


// Question 21

// function subnetSort($a, $b)
// {
//     $arrayA = explode('.', $a);
//     $arrayB = explode('.', $b);

//     foreach (range(0, 3) as $x) {
//         if ($arrayA[$x] < $arrayB[$x]) {
//             return -1;
//         } elseif ($arrayA[$x] > $arrayB[$x]) {
//             return 1;
//         }
//     }
//     return -1;
// }

// $subnets = [
//     '192.169.12',
//     '192.167.11',
//     '192.169.14',
//     '192.168.13',
//     '192.167.12',
//     '122.169.15',
//     '192.167.20'
// ];

// usort($subnets, 'subnetSort');
// print_r($subnets);



// Question 22


// $pages[0]['page_id'] = '2025731470';
// $pages[1]['page_id'] = '2025731450';
// $pages[2]['page_id'] = '1025731456';
// $pages[3]['page_id'] = '1025731460';

// $pages[0]['user_name'] = 'Neko';
// $pages[1]['user_name'] = 'Meek';
// $pages[2]['user_name'] = 'Santan';
// $pages[3]['user_name'] = 'Oxlade';

// //converting timestamp to date here 
// function convertTimeStamp($timestamp)
// {
//     $limit = date('U');
//     $limiting = $timestamp - $limit;
//     return date('Y,M,D', mktime(0, 0, $limiting));
// }
// // //The Comparison function 
// function comparison($valueA, $valueB)
// {
//     $x = convertTimeStamp($valueA['page_id']);
//     $y = convertTimeStamp($valueB['page_id']);
//     if ($y == $x) {
//         return strcmp($valueA['user_name'], $valueB['user_name']);
//     } else {
//         return strcmp($y, $x);
//     }
// }
// //sort array 
// usort($pages, 'comparison');

// // //printing the sorted Page id and username 

// foreach ($pages as $key => $value) {
//     echo $key;
//     echo $value['page_id'];
//     echo ' user_name: ';
//     echo $value['user_name'] . ' , ';
//     echo "\n";
// }

// Question 23

// function columnFilter($tangled, $column)
// {
//     $sorted = $tangled;
//     for ($x = 0; $x < sizeof($sorted) - 1; $x++) {
//         for ($y = 0; $y < sizeof($sorted) - 1 - $x; $y++)
//             if ($sorted[$y][$column] > $sorted[$y + 1][$column]) {
//                 $tmp = $sorted[$y];
//                 $sorted[$y] = $sorted[$y + 1];
//                 $sorted[$y + 1] = $tmp;
//             }
//     }
//     return $sorted;
// }
// $driver = array();

// $driver[0]['name'] = 'Sana';
// $driver[0]['email'] = 'sana@example.com';
// $driver[0]['phone'] = '111-111-1234';
// $driver[0]['country'] = 'USA';

// $driver[1]['name'] = 'Robin';
// $driver[1]['email'] = 'robin@example.com';
// $driver[1]['phone'] = '222-222-1235';
// $driver[1]['country'] = 'UK';

// $driver[2]['name'] = 'Sofia';
// $driver[2]['email'] = 'sofia@example.com';
// $driver[2]['phone'] = '333-333-1236';
// $driver[2]['country'] = 'India';

// print_r(columnFilter($driver, 'name'));


// Question 24 

$soccerBoot = [
    'Adidas 1',
    'Adidas 20',
    'Adidas 3',
    'Adidas 4'
];

sort($soccerBoot, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($soccerBoot as $key => $value) {
    echo 'soccerBoots[' . $key . '] = ' . $value;
    echo '<br>';
}
