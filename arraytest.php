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

// $colorDisplay = $color;

// echo '<em> Expected result : </em>' . reset($colorDisplay);



// Question 6 

// function jsonElements($value, $key)
// {
//     echo "$key : $value " . '<br>';
// }

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

// array_walk_recursive($object, 'jsonElements');




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
//     'Ramesh' => '40'
// ];

// asort($details);
// echo 'Accending Order By Values : ';
// echo '<br>';

// foreach ($details as $x => $xvalues) {
//     echo 'Age of ' . $x . ' is: ' . $xvalues;
//     echo '<br>';
// }

// echo '<br>';
// echo '<br>';

// ksort($details);
// echo ' Accending order by Key : ';
// echo '<br>';

// foreach ($details as $x => $xvalues) {
//     echo 'Age of ' . $x . ' is: ' . $xvalues;
//     echo '<br>';
// }

// echo '<br>';
// echo '<br>';

// arsort($details);
// echo ' Descending order by Value : ';
// echo '<br>';

// foreach ($details as $x => $xvalues) {
//     echo 'Age of ' . $x . ' is: ' . $xvalues;
//     echo '<br>';
// }

// echo '<br>';
// echo '<br>';

// krsort($details);
// echo ' Descending order by Key : ';
// echo '<br>';

// foreach ($details as $x => $xvalues) {
//     echo 'Age of ' . $x . ' is: ' . $xvalues;
//     echo '<br>';
// }


// Question 9

// $recordedTemperatures = '78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 
// 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73';

// $temperatureArray = explode(',', $recordedTemperatures);

// $totalTemperature = array_sum($temperatureArray);

// $temperatureArrayLength = count($temperatureArray);

// echo '<em> Expected Output :</em>';
// echo '<br>';

// foreach ($temperatureArray as $averageTemp) {
//     $averageTemp =  $totalTemperature / $temperatureArrayLength;
// }
// echo 'Average Temperature is : ' . $averageTemp;

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
// for ($x = ($temperatureArrayLength); $x < ($temperatureArrayLength); $x++) {
//     echo $temperatureArray[$x];
// }


// Question 10 

// function displayValues($inputArray)
// {
//     $x = $inputArray;

//     if (count($x) == 0)
//         return [];

//     elseif (count($x) == 1)
//         return array_chunk($x, 1);

//     array_unshift($inputArray, NULL);

//     $valueSorting = call_user_func_array('array_map', $inputArray);
//     return array_map('array_filter', $valueSorting);
// }
// function beadSort($inputArray)
// {
//     foreach ($inputArray as $i)
//         $positiveArrayValues[] = array_fill(0, $i, 1);
//     return array_map('count', displayValues(displayValues($positiveArrayValues)));
// }

// $arrayOne = [5, 3, 1, 3, 8, 7, 4, 1, 1, 3];

// $arrayTwo = [5, 3, 1, 3, 8, 7, 4, 1, 1, 3];

// echo '<em> Input Array : </em>';

// print_r($arrayOne);

// echo '<br>';
// echo '<em> Expected Result : </em>';

// print_r(beadSort($arrayTwo));


// Question 11

// $arrayOne = [
//     [77, 87],
//     [23, 45]
// ];

// $arrayTwo = [
//     'w3resource',
//     'com'
// ];

// function mergeByIndex($value1, $value2)
// {
//     $result = [];
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
//     $defaultArray = [];

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

// echo '<em> Expected Output : </em>';
// echo implode(',', range(200, 250, 4));

// Question 14 

// $defaultArray = [
//     'abcd',
//     'abc',
//     'de',
//     'hjjj',
//     'g',
//     'wer'
// ];

// $newArray = array_map('strlen', $defaultArray);

// echo '<em> Expected Output : </em>';

// echo 'The shortest array length is ' . min($newArray) .
//     '. The longest array length is ' . max($newArray) .
//     '.';

// Question 15 

// $sampleRange = range(11, 20);

// shuffle($sampleRange);

// echo '<em> Sample Range : (11, 20)</em>';
// echo '<br>';
// echo '<em>Sample Output : </em>';

// for ($i = 0; $i < 10; $i++) {
//     echo $sampleRange[$i] . ' ';
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
//     return min(array_diff(array_map('intval', $values), [0]));
// }

// print_r(
//     minValue(
//         [
//             -1, -1, 0, 1, 12, -100, 1
//         ]
//     )
// );


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

//     $ceilNumber = [$accurateNum[0], $accurateNum[1]];

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
//     [
//         'a' => 'Red',
//         'b' => 'Green',
//         'c' => 'White'
//     ],
//     'numbers' => [
//         1,
//         2,
//         3,
//         4,
//         5,
//         6
//     ],
//     'holes' => [
//         'First',
//         5 => 'Second',
//         'Third'
//     ]
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

// echo '<pre>';
// print_r($subnets);



// Question 22


// $page[0]['page_id'] = '2025731470';
// $page[1]['page_id'] = '2025731450';
// $page[2]['page_id'] = '1025731456';
// $page[3]['page_id'] = '1025731460';

// $page[0]['user_name'] = 'Neko';
// $page[1]['user_name'] = 'Meek';
// $page[2]['user_name'] = 'Santan';
// $page[3]['user_name'] = 'Oxlade';

// //converting timestamp to date here 
// function convertTimeStamp($timestamp)
// {
//     $limit = date('U');
//     $limiting = $timestamp - $limit;

//     return date('Y,M,D', mktime(0, 0, $limiting));
// }
// //The Comparison function 
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
// usort($page, 'comparison');

// //printing the sorted Page id and username 

// foreach ($page as $key => $value) {
//     echo '<pre>';
//     echo "\$page [$key]: ";
//     echo $value['page_id'];
//     echo ' user_name: ';
//     echo $value['user_name'];
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
// $driver = [];

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

// echo '<pre>';
// print_r(columnFilter($driver, 'name'));


// Question 24 

// $soccerBoot = [
//     'Adidas 1',
//     'Adidas 20',
//     'Adidas 3',
//     'Adidas 44',
//     'Adidas 0',
//     'Adidas 4'
// ];

// natcasesort($soccerBoot);
// foreach ($soccerBoot as $key => $value) {
//     echo '<pre>';
//     echo 'soccerBoots[' . $key . '] = ' . $value;
// }


// Question 25 

// function entitySort($defaultArray)
// {
//     $total = count($defaultArray);
//     for ($x = 0; $x < $total; $x++) {
//         if ($defaultArray[$x][0] == '&') {
//             $defaultArray[$x] = $defaultArray[$x][1] . $defaultArray[$x];
//         } else {
//             $defaultArray[$x] = $defaultArray[$x][0] . $defaultArray[$x];
//         }
//     }
//     sort($defaultArray);
//     for ($y = 0; $y < $total; $y++) {
//         $defaultArray[$y] = substr($defaultArray[$y], 1);
//     }
//     return $defaultArray;
// }
// $entityArray = [' ', '&', '<' , '??'];
// print_r(entitySort($entityArray));



// Question 26

// function shuffleArray($testArray)
// {
//     $initialKeys = array_keys($testArray);

//     shuffle($initialKeys);

//     foreach ($initialKeys as $val) {
//         $new[$val] = $testArray[$val];
//     }

//     $testArray = $new;

//     return $testArray;
// }

// $shoeBrands = [
//     'Nike',
//     'Off-White',
//     'Adidas',
//     'Yeezy',
//     'Vans',
//     'Converse',
//     'Puma',
//     'Fila'
// ];

// echo '<pre';
// print_r(shuffleArray($shoeBrands));

// Question 27 

// function randomPassword($upperCase = 1, $lowerCase = 5, $numerical = 4, $other = 2)
// {
//     $passwordForm = [];
//     $passwordKey = '';

//     // Generating the Password data

//     for ($x = 0; $x < $upperCase; $x++) {
//         $passwordForm[] = chr(mt_rand(44, 90));
//     }
//     for ($x = 0; $x < $lowerCase; $x++) {
//         $passwordForm[] = chr(mt_rand(51, 83));
//     }
//     for ($x = 0; $x < $numerical; $x++) {
//         $passwordForm[] = chr(mt_rand(46, 75));
//     }
//     for ($x = 0; $x < $other; $x++) {
//         $passwordForm[] = chr(mt_rand(36, 93));
//     }

//     // using the shuffle function to shuffle the order of the password.
//     shuffle($passwordForm);

//     // Appending values to the string
//     foreach ($passwordForm as $character) {
//         $passwordKey .= $character;
//     }
//     return $passwordKey;
// }

// echo '<br>';
// echo 'Generated Password is : ' . randomPassword();


// Question 28 

// $sneakers = [
//     'Nike',
//     'Off-White',
//     'Adidas',
//     'Yeezy',
//     'Vans',
//     'Converse',
//     'Puma',
//     'Fila'
// ];

// rsort($sneakers);
// echo '<pre>';
// print_r($sneakers);

// Question 29

// function stringRange($string1)
// {
//     preg_match_all("/([0-9]{1,2})-?([0-9]{0,2}) ?,?;?/", $string1, $a);
//     $y = [];
//     foreach ($a[1] as $z => $i) {
//         $y = array_merge($y, range($i, (empty($a[2][$z]) ? $i : $a[2][$z])));
//     }
//     return ($y);
// }

// $testString = '1-2 18-20 9-11';
// print_r(stringRange($testString));


// Question 30 

// function letterRange($length)
// {
//     $inputRange = [];
//     $letters = range('A', 'Z');
//     for ($x = 0; $x < $length; $x++) {
//         $positions = $x * 26;
//         foreach ($letters as $y => $values) {
//             $positions++;
//             if ($positions <= $length)
//                 $inputRange[] = ($positions > 26 ? $inputRange[$x - 1] : "") . $values;
//         }
//     }
//     return $inputRange;
// }
// echo '<pre>';
// print_r(letterRange(27));


// Question 31 

// $highestValues = [
//     'value One' => 3021,
//     'value Two' => 2365,
//     'value Three' => 5215,
//     'value Four' => 5214,
//     'value Five' => 2145
// ];

// arsort($highestValues);
// $maxKey = key($highestValues);
// echo 'The Index of the highest is : ' . $maxKey;


// Question 32 

// function fileExtension($data)
// {
//     $data = implode('', explode(',', $data));
//     $data = explode('.', $data);
//     $data = strtolower(end($data));
//     return $data;
// }
// $file = 'practice.rar';
// echo fileExtension($file);

// Question 33

// function arraySearch($firstArray, $find)
// {
//     reset($firstArray);
//     foreach ($firstArray as $key => $value) {
//         if (preg_match("/$find/i", $value)) {
//             echo $find . ' has been found in ' . $key .'<br>';
//         } else {
//             echo $find . ' is not available in ' . $key . '<br>';
//         }
//     }
// }
// $testArray = [
//     'Nike' => 'Air-Max',
//     'MJ' => 'Jordan',
//     'Adidas' => 'Pharrell',
//     'Kanye' => 'Yeezy',
//     'Vans' => 'Off the wall',
// ];

// arraysearch($testArray, 'Jordan');

// Question 34 

// $testArray = [
//     'driver1',
//     'Driver11',
//     'driver10',
//     'Driver6',
//     'driver4',
//     'DRIVER40',
//     'driver10'
// ];

// natcasesort($testArray);

// echo '<pre>';
// print_r($testArray);

// Question 35 

// function elementTrim($trimmed)
// {
//     $trimmed = trim('&$val', '$val');

//     return $trimmed;
// }

// $drinks = [
//     'Malata ',
//     ' Coke',
//     ' Fanta ',
//     'Ciroc ',
//     ' RedBull '
// ];

// print_r($drinks);
// echo '<br>';
// echo '<br>';

// array_walk($drinks, 'elementTrim');

// print_r($drinks);


// Question 36 

// $driversArray = [
//     'driver1',
//     'Driver11',
//     'driver10',
//     'Driver6',
//     'driver4',
//     'DRIVER40',
//     'driver10'
// ];
// echo 'This is the Default Array without conversion';
// echo '<br>';
// print_r($driversArray);

// echo '<br>';
// echo '<br>';

// echo 'This is the Array converted to LOWER CASE';
// echo '<br>';
// $lowerCase = array_map('strtolower', $driversArray);
// print_r($lowerCase);

// echo '<br>';
// echo '<br>';

// echo 'This is the Array converted to UPPER CASE';
// echo '<br>';
// $upperCase = array_map('strtoupper', $driversArray);
// print_r($upperCase);

// Question 37 

// function valueCount($sumData, $pairing)
// {
//     $total = array_sum($sumData);

//     foreach ($sumData as $x => $content) {
//         if ($content == $pairing) {
//             $total++;
//         }
//     }

//     return $total;
// }

// $drivers = [
//     'Lewis',
//     'Max',
//     'lando',
//     'Lewis',
//     'Valtteri',
//     'Ricciardo',
//     'Lewis'
// ];

// echo 'The Driver Lewis appeared '
//     . valueCount($drivers, 'Lewis')
//     . ' time(s) ';


// Question 38

// function uniqueArray($specific, $items)
// {
//     $outcome = [];
//     $x = array_sum($specific);
//     $itemsValue = [];

//     foreach ($specific as $values) {
//         if (!in_array($values[$items], $itemsValue)) {
//             $itemsValue[$x] = $values[$items];
//             $outcome[$x] = $values;
//         }
//         $x++;
//     }
//     return $outcome;
// }

// $drivers = [
//     [
//         'driverId' => '44',
//         'name' => 'Lewis Hamilton',
//         'address' => 'United Kingdom'
//     ],
//     [
//         'driverId' => '18',
//         'name' => 'Lance Stroll',
//         'address' => 'Canada'
//     ],
//     [
//         'driverId' => '77',
//         'name' => 'Valtteri Bottas',
//         'address' => 'Russia'
//     ]
// ];

// echo '<pre>';
// print_r(uniqueArray($drivers, 'driverId'));


// Question 39 

// $drivers = [
//     'George',
//     'George',
//     'Lando',
//     'George',
//     'Lewis',
//     'Valtteri',
//     'Max',
//     'Lewis'
// ];

// $driversId = [
//     77,
//     63,
//     77,
//     44,
//     77,
//     23,
//     3,
//     44,
//     63
// ];

// $uniqueDrivers = array_keys(array_flip($drivers));
// $uniqueId = array_keys(array_flip($driversId));

// print_r($uniqueDrivers);
// echo '<br>';
// print_r($uniqueId);


// Question 40

// $colors = [
//     'white',
//     'white',
//     'yellow',
//     'black',
//     'red',
//     'blue',
//     'black',
//     'white',
//     'blue'
// ];

// $sortedUniqueArray = array_values(array_unique($colors));

// print_r($sortedUniqueArray);

// Question 41

// function arrayNotUnique($defaultArray)
// {
//     $identical = [];
//     natcasesort($defaultArray);
//     reset($defaultArray);

//     $outdatedKey = NULL;
//     $outdatedValue = NULL;
//     foreach ($defaultArray as $key => $value) {
//         if ($value === NULL) {
//             continue;
//         }
//         if ($outdatedValue == $value) {
//             $identical[$outdatedKey] = $outdatedValue;
//             $identical[$key] = $outdatedValue;
//         }
//         $outdatedValue = $value;
//         $outdatedKey = $key;
//     }
//     return $identical;
// }
// $emailArray = [
//     'nk@outlook.com',
//     'joeboy@outlook.com',
//     'bigwiz@outlook.com',
//     'nk@outlook.com',
// ];

// echo ' The emails which are not Unique are : ';
// echo '<br>';
// echo '<pre>';
// print_r(arrayNotUnique($emailArray));


// Question 42 

// function flatArray($defaultArray)
// {
//     $flattenValues = [];
//     $depth = 0;

//     foreach ($defaultArray as $y => $z) {
//         if (!is_array($z)) {
//             $flattenValues[] = $z;
//             continue;
//         }
//         $depth++;
//         $flattenValues = flatArray($z, $flattenValues, $depth);
//         $depth--;
//     }
//     if ($depth == 0) $flattenValues = array_values(array_unique($flattenValues));
//     return $flattenValues;
// }
// $multiValues = [
//     'a' => [
//         -1,
//         -2,
//         0,
//         2,
//         3
//     ],
//     'b' => ['c' => [
//         -1,
//         0,
//         2,
//         0,
//         3
//     ]]
// ];

// print_r(flatArray($multiValues));

// Question 43 

// $listOne = 'Ham, Valtteri, Max, Lando';
// $listTwo = 'Ham, Valtteri, Lando, Sainz';

// // combing both lists and altering them by unique value. 
// $outcome = implode(
//     ',',
//     array_unique(
//         array_merge(
//             explode(',', $listOne),
//             explode(',', $listTwo)
//         )
//     )
// );
// echo $outcome;


// Question 44
// function removeDuplicates($specificArray, $values)
// {
//     $combined = 0;

//     foreach ($specificArray as $key => $setValues) {
//         if (($combined > 0) && ($setValues == $values)) {
//             unset($specificArray[$key]);
//         }
//         if ($setValues == $values) $combined++;
//     }
//     return array_filter($specificArray);
// }

// $total = [4, 5, 6, 7, 4, 7, 8];

// print_r (removeDuplicates($total, 7));

// Question 45

// $multiArray = function ($a, $b) {
//     return strcmp(implode('', $a), implode('', $b));
// };

// $driverOne = [
//     [
//         'Lewis' => 44
//     ],
//     [
//         'Valtteri' => 77
//     ],
//     [
//         'Lando' => 3
//     ]
// ];

// $driverTwo = [
//     [
//         'Lewis' => 44
//     ],
//     [
//         'Perez' => 11
//     ]
// ];

// $formulaOne = array_udiff($driverOne, $driverTwo, $multiArray);

// print_r($formulaOne);

// Question 46 

// function stringsCheck($values)
// {
//     return array_sum(array_map('is_string', $values)) == count($values);
// }
// $arrayOne = [
//     'Ekoate',
//     'Laravel',
//     'TeamLH',
// ];
// $arrayTwo = [
//     'Valtteri',
//     44,
//     77,
// ];
// var_dump(stringsCheck($arrayOne));
// var_dump(stringsCheck($arrayTwo));

// Question 47 

// function firstElement($defaultArray)
// {
//     list($values) = array_keys($defaultArray);
//     $outcome = [
//         $values => $defaultArray[$values]
//     ];
//     unset($defaultArray[$values]);
//     return $outcome;
// }
// $driverTwo = [
//     'Lewis' => 44,
//     'George' => 63,
//     'Max' => 23,
//     'Perez' => 11
// ];
// print_r(firstElement($driverTwo));

// Question 48

// function unionSet($x, $y)
// {
//     $arrayJoin = array_merge(
//         array_intersect($x, $y),
//         array_diff($x, $y),
//         array_diff($y, $x),
//     );
//     return $arrayJoin;
// }
// $a = [
//     'Ham',
//     'Lewis',
//     'Vb',
//     'GR',
// ];
// $b = [
//     'Lewis',
//     'Vb',
//     'GR',
//     'Lando',
//     'Ricciardo'
// ];

// print_r(unionSet($a, $b));


// Question 49 

// $testData = [
//     'c1' => 'Red',
//     'c2' => 'Green',
//     'c3' => 'White',
//     'c4' => 'Black'
// ];

// $secondData = ['c2', 'c4'];
// echo '<em> Output : </em>';
// echo '<br>';
// print_r(array_intersect_key($testData, array_flip($secondData)));


// Question 50 

// $testData = [
//     'c1' => 'Red',
//     'c2' => 'Green',
//     'c3' => 'White',
//     'c4' => 'Black'
// ];

// echo 'The next Pointer is : ';
// echo '<br>';
// echo next($testData);
// echo '<br>';
// echo '<br>';

// echo 'The Last array Value is : ';
// echo '<br>';
// $expectedOutcome = $testData;

// $lastValue = array_pop($expectedOutcome);

// print_r($lastValue);
// echo '<br>';
// echo '<br>';

// echo 'All the values of the array : ';
// echo '<br>';
// print_r($testData);


// Question 51

// $firstData = [
//     'c1' => 'Red',
//     'c2' => 'Green',
//     'c3' => 'White',
//     'c4' => 'Black'
// ];

// $secondData = ['c2', 'c4'];

// $outcome = array_diff_key($firstData, array_flip($secondData));

// echo '<pre>';
// print_r($outcome);


// Question 52 

// function arrayValueFilter($defaultArray, $order, $value)
// {
//     if (is_array($defaultArray) && count($defaultArray) > 0) {
//         foreach (array_keys($defaultArray) as $key) {
//             $x[$key] = $defaultArray[$key][$order];

//             if ($x[$key] == $value) {
//                 $newValues[$key] = $defaultArray[$key];
//             }
//         }
//     }
//     return $newValues;
// }
// $colors = [
//     0 => [
//         'order1' => 'Red',
//         'order2' => 'Green',
//         'order3' => 'Black'
//     ],
//     1 => [
//         'order1' => 'Yellow',
//         'order2' => 'White',
//         'order3' => 'Pink'
//     ]
// ];

// echo '<pre>';

// $results = arrayValueFilter($colors, 'order1', 'Red');

// print_r($results);


// Question 53 

// $food = [
//     'Rice' => 'Fried',
//     'Potatoes' => 'Mashed',
//     'Chicken' => 'Grilled',
//     'Soup' => 'Vegetable',
// ];

// $assignedValue = $food['Soup'];

// echo '<pre>';

// print_r($food);

// $cleanValues = array_filter($food, function ($key) use ($assignedValue) {
//     return ($key != $assignedValue);
// });

// echo '<pre>';

// print_r($cleanValues);


// Question 54 

// $removeWhiteSpaces = function ($x) {
//     $x = preg_match("#\S#", $x);
//     return $x;
// };

// $defaultArray = [15, null, ' ', -2, NULL, ' ', " \n", 'Red', 54, "\t"];

// echo '<pre>';

// print_r($defaultArray);

// $result = array_filter($defaultArray, $removeWhiteSpaces);

// echo '<pre>';

// print_r($result);


// Question 55 

// $testString = ' Thus, the most important characteristic of economic order prevailing in the world 
// today is a wage system that deprives the workers of any right to the products being produced, 
// be it for the society or for a private establishment

// Why were not only women created . 

// Sporting clubs represent the basic organization of traditional sport in the world today   ';

// echo '<pre>';

// $result = array_filter(array_map('trim', explode("\n", $testString)), 'strlen');
// print_r($result);


// Question 56 

$a = array_fill(0, 4, array_fill(0, 4, 10));

echo '<pre>';

print_r($a);

// Question 57

function compareArrays($x, $y)
{
    if ($x === $y)
        return 0;
    return ($x > $y) ? 1 : -1;
}
function multiArray($array1, $array2)
{
    return array_diff_uassoc($array1['Usa'], $array2['Usa'], 'compareArrays');
}

$car1 = [
    'Mercedes' => 'GTR', 'Ferrari' => 'LaFerrari', 'Usa' => ['Totota' => 'Camry', 'Bmw' => 'M5']
];
$car2 = [
    'Mercedes' => 'GTR', 'Ferrari' => 'LaFerrari', 'Usa' => ['Microsoft' => 'Surfacebook', 'Bmw' => 'M5']
];

print_r(multiArray($car1, $car2));

// function key_compare($a, $b)
// {
//     if ($a === $b)
//         return 0;
//     return ($a > $b) ? 1 : -1;
// }
// function multidimenssional_array_diff($arr1, $arr2)
// {
//     return array_diff_uassoc($arr1['c'], $arr2['c'], "key_compare");
// }
// //multidimenssional arrays
// $color1 = array('a' => 'White', 'b' => 'Red', 'c' => array('a' => 'Green', 'b' => 'Blue', 'c' => 'Yellow'));
// $color2 = array('a' => 'White', 'b' => 'Red', 'c' => array('a' => 'White', 'b' => 'Red', 'c' => 'Yellow'));
// print_r(multidimenssional_array_diff($color1, $color2));
