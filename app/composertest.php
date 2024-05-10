<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новий документ і нове навчання</title>
</head>
<body>
<h1>Виводимо дату</h1>
<p>
    <?php
    $dat = date("d.m Y");
    $tm = date("H:i:s");
    echo "Сьогодніня дата: $dat року<br>";
    echo "Точний час: $tm<br>";
    echo "А тепер виведемо квадрат  куб натуральних чисел<br>";
    ?>
</p>
<ol>
    <?php
    for($i = 1; $i <= 5; $i++) {
        echo "<li>$i в квадраті = " . ($i * $i) . ";";
        echo " $i в кубі = " . ($i * $i * $i) . "</li>";
    }
    ?>
</ol>
<?php
$arr = [
    'French' => 'Paris',
    'England' => 'London',
    'Ukraine' => 'Kiyv'

];
print_r($arr);
echo '<hr>';
unset($arr['England']);
print_r($arr);
echo "<hr>";
$a = '16';
echo $a . "<br>";
echo '<br>';
echo intval($a, '2');
echo '<br>';
$arr1 = [
    'Квіти' => 'Троянди',
    'Пора' => 'Весна'
];
$d =& $arr1['Годинник'];
$d = 'Двадцять два';
$arr1['Годинник'] = "Сімнадцять";
print_r($d);
echo '<br><br><br>';
echo "змінні масиву {$_SERVER['QUERY_STRING']}";
?>
<form action=init.php method="POST">
    <input type="text" name="login" placeholder="Введите логин" style="width: 350px; height: 50px;">
    <input type="password" name="password" placeholder="Введите пароль" style="width: 350px; height: 50px;">
    <?php
    echo '<br>';
    ?>
    <input type="submit" name="subm" value="Отправить" style="width: 100px; height: 30px; background: red;  margin-top: 20px;">
</form>
<?php
$a = ['a' => "William", 'b' => 'good'];
$b = ['c' => 'bad'];
$c = $a + $b;
$x = [3, 45, 14, 21, 5];
for($i = 3; $i < count($x); $i++):
    echo current($x) . "\n";
endfor;
echo '<hr>';
$mes = "This your errors:";
$check = function (array $err) use ($mes) {
    if(isset ($err) && count($err) > 0) {
        echo $mes . "\n";
        foreach($err as $r) {
            echo $r . "\n<br>";
        }
    }
    print_r($mes);
};
$errors = ['frut', 'good', 'frvd'];
$mes = "dddde33ddsfd";
$check($errors);
print_r($mes);
echo "<br><br>";
echo "<hr>";
echo time() . '<br>';
echo date("H:i:s") . "<br>";
print_r(getdate());
echo "<br>";
if (@$_REQUEST['text'])
    echo htmlspecialchars($_REQUEST['text']) . "<hr>";
?>
<form action="<?=$_SERVER['SCRIPT_NAME']?>" method="POST">
    <textarea name="text" cols="60" rows="10">
        <?=@htmlspecialchars($_REQUEST['text'])?>
    </textarea><br>
    <input type="submit">
</form>
<?php
echo '<hr>';
// $color = ['white', 'green', 'red'];
// echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
//sort($color);
//echo '<ul>';
//foreach($color as $c) {
//    echo "<li>$c</li>";
//};
//echo '</ul>'
//$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
//asort($ceu);
//foreach($ceu as  $k=>$v) {
//    echo "The capital of $k is $v" . "<br>";
//}
//$x = [1, 2, 3, 4, 5];
//unset($x[3]);
//$x = array_values($x);
//print_r($x);
//$color1 = [4=>'white', 6=>'green', 11=>'red'];
//echo reset($color1);
//$stra = '{"Title": "The Cuckoos Calling",
//"Author": "Robert Galbraith",
//"Detail": {
//        "Publisher": "Little Brown"
//},
//"Gif": {
//        "jJoin": "Drown guy",
//        "Corol": "Friday party"
//}}';
//$xxx = json_decode($stra, true);
//foreach($xxx as $k => $v) {
//    if(is_array($v)) {
//        foreach($v as $f => $g) {
//            echo "$f : $g" . "<br>\n";
//        }
//    } else echo "$k : $v" . "<br>\n";
//}
//function sortar($a, $b) {
//        echo "$b : $a" . "<br>\n";
//}
//array_walk_recursive($xxx, "sortar");
//$x = [1, 2, 3, 4, 5];
//array_splice($x, 3, 0, "$");
//print_r($x);
//$x = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
//asort($x);
//print_r($x);
//echo "<br>";
//ksort($x);
//print_r($x);
//echo "<br>";
//arsort($x);
//print_r($x);
//echo "<br>";
//krsort($x);
//print_r($x);
//echo "<br>";
//
//$array1 = [[34, 49], [65, 53], [21, 56, 23]];
//$array2 = ['w3school', 'french', 'train', 'mybrain'];
//function mergeArr($x, $y) {
//    $totalArr = [];
//    if (isset($x)) {
//        $totalArr[] = $x;
//    }
//    if (is_array($y)) {
//        foreach ($y as $k => $v) {
//            $totalArr[] = $v;
//        }
//    } elseif (isset($y)) {
//        $totalArr[] = $y;
//         }
//    return $totalArr;
//}
//echo "<pre>";
//print_r(array_map('mergeArr', $array2, $array1));
//echo "</pre>"
//$color = ['A' => 'Blue', 'B' => 'Green', 'c' => 'Red', 'D' => ['Yellow', 'Black']];
//function changeCase ($a, $b) {
//    $newArr = [];
//        foreach ($a as $k => $v) {
//            if(is_array($v)) {
//                $newArr[$k] = changeCase($v, $b);
//                continue;
//            }
//            $newArr[$k] = ($b == 1 ? strtolower($v) : strtoupper($v));
//        }
//    return $newArr;
//
//}
//$newArr1 = changeCase($color, 1);
//echo '<pre>';
//print_r($newArr1);
//echo '</pre>';
//echo implode(', ', range(200, 250, 4)) . "\n";
//$arr1 = ["abcd","abc","de","hjjj","g","wer"];
//$arr2 = array_map('strlen', $arr1);
//echo "The shortest array length is " . min($arr2) . '<br>';
//echo "The longest array length is " . max($arr2);
//function randNumb ($a, $b) {
//    for ($i = 0; $i <= $b - $a; $i++) {
//        echo mt_rand($a, $b) . ', ';
//    }
//}
//randNumb(11, 20);
//$ceu = array(
//    "Italy" => "Rome",
//    "Luxembourg" => "Luxembourg",
//    "Belgium" => "Brussels",
//    "Denmark" => "Copenhagen",
//    "Finland" => "Helsinki",
//    "France" => "Paris",
//    "Slovakia" => "Bratislava",
//    "Slovenia" => "Ljubljana",
//    "Germany" => "Berlin",
//    "Greece" => "Athens",
//    "Ireland" => "Dublin",
//    "Netherlands" => "Amsterdam",
//    "Portugal" => "Lisbon",
//    "Spain" => "Madrid",
//    "Sweden" => "Stockholm",
//    "United Kingdom" => "London",
//    "Cyprus" => "Nicosia",
//    "Lithuania" => "Vilnius",
//    "Czech Republic" => "Prague",
//    "Estonia" => "Zallin",
//    "Hungary" => "Budapest",
//    "Latvia" => "Riga",
//    "Malta" => "Valetta",
//    "Austria" => "Vienna",
//    "Poland" => "Warsaw"
//);
//echo max(array_keys($ceu));
//$fff = [5, 7, 9, 0, 2, 15, 35.6, 17.1, 0.8];
//function lowInt ($a) {
//    $t = [];
//    foreach($a as $k => $v) {
//        if(is_float($v)) {
//            continue;
//        }
//        if(is_int($v) && $v !== 0) {
//            $t[] = $v;
//        }
//    }
//    print_r($t);
//    return min($t);
//}
//echo lowInt($fff) . '<br>';
//echo min(array_values($fff)) . '<br>
//function floorNumb ($a, $b, $c = '.') {
//    $arr = explode($c, $a);
//    $ger= str_split($arr[1]);
//    if($ger[$b] > 5) {
//        $ger[$b - 1] += 1;
//    }
//    array_splice($ger, $b);
//    $arr[1] = implode($ger);
//    echo $arr[1] . '<br>';
//
//    return implode($c, $arr);
//}
//print_r(floorNumb(-123.5472, 2));
//$color = [ "color" => ["a" => "Red", "b" => "Green", "c" => "White"],
//    "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
//    "holes" => array ( "First", 5 => "Second", "Third")];
//$teh = [];
//function findWord ($a) {
//    global $teh;
//
//    foreach ($a as $key => $value) {
//        if(is_array($value)) {
//            findWord($value);
//        }
//        if(is_scalar($value) && ($value == "Second" || $value == 'Red')) {
//            $teh[] = $value;
//            print_r($teh);
//        }
//
//    }
//
//    return implode(', ', $teh);
//}
//echo findWord($color);
// Define a function named 'list_cmp' that compares two values based on their order in the global array '$order'
//function list_cmp($a, $b)
//{
//    global $order;
//
//    // Iterate through the '$order' array
//    foreach ($order as $key => $value)
//    {
//        // If $a matches a value in '$order', return 0 to indicate equality
//        if ($a == $value)
//        {
//            return 0;
//            break;
//        }
//
//        // If $b matches a value in '$order', return 1 to indicate inequality
//        if ($b == $value)
//        {
//            return 1;
//            break;
//        }
//    }
//}
//
//// Define an array '$order' specifying the desired order of values
//$order[0] = 1;
//$order[1] = 3;
//$order[2] = 4;
//$order[3] = 2;
//
//// Define an array '$array' with unsorted values
//$array[0] = 2;
//$array[1] = 1;
//$array[2] = 3;
//$array[3] = 4;
//$array[4] = 2;
//$array[5] = 1;
//$array[6] = 2;
//
//// Use 'usort' function to sort '$array' based on the order specified in the 'list_cmp' function
//usort($array, "list_cmp");
//
//// Print the sorted array
//print_r($array);
//function shuffle_assoc($my_array)
//{
//    // Get the keys of the associative array
//    $keys = array_keys($my_array);
//
//    // Shuffle the keys
//    shuffle($keys);
//
//    // Initialize an empty array to store the shuffled associative array
//    $new = array();
//
//    // Iterate through the shuffled keys
//    foreach ($keys as $key) {
//        // Assign each key-value pair to the new array in shuffled order
//        $new[$key] = $my_array[$key];
//    }
//
//    // Update the original array with the shuffled result
//    $my_array = $new;
//
//    // Return the shuffled associative array
//    return $my_array;
//}
//
//// Define an associative array of colors
//$colors = array("color1" => "Red", "color2" => "Green", "color3" => "Yellow");
//
//// Call the shuffle_assoc function and print the result
////print_r(shuffle_assoc($colors));
//shuffle($colors);
//print_r($colors);

//$arr12 = [4, 5, 2, 9, 7];
//function revOrd ($a) {
//    rsort($a);
//    return $a;
//
//}
//echo '<pre>';
//print_r(revOrd($arr12));
//echo '<pre>';
//$x = array(
//    'value1' => "         3021",
//    'value2' => "  2365",
//    'value3' =>     5215,
//    'value4' => 5214,
//    'value5' =>   2145   );
//asort($x);
//end($x);
////prev($x);
//
//$k = key($x);
//echo '<pre>';
//print_r($k);
//echo " " . $x[$k];
//echo '</pre>'
//function getExt ($a) {
//    $x = explode('.', $a);
//    return end($x);
//}
//$f = 'tyreg.swe';
//echo getExt($f);
//function searchSpe ($a, $c) {
//    $b = [];
//    foreach ($a as  $k => $v) {
//        if (preg_match("/$c/is", $v)) {
//            $b[$k] = $v;
//        }
//    }
//    return $b;
//}
//print_r(searchSpe($x, 52));
//function arrTrim (&$v, $k, $pref) {
//    $v = trim($v);
//    $v .=  "$pref";
//    echo "$k";
//
//}
//array_walk($x, 'arrTrim', "good");
//echo '<pre>';
//print_r($x);
//echo '</pre>';
//$a = ['f' => 'sdDSde', 'g' => 'YRTfh', 'o' => 'gggvPW'];
//foreach($a as $k => $v) {
//    $v = strtolower($v);
//    echo "$v<br>";
//}
//$arr = [5, 45, 2, 1, 7, 5, 34, 45, 5];
//function searchDiff ($a, $b) {
//    $t =[];
//    foreach($a as $v) {
//        if ($v == $b) {
//            $t[] = $v;
//        }
//    }
//    return count($t);
//}
////$x = array_diff($arr, [5]);
////echo count($arr) - count($x);
//echo searchDiff($arr, 0);
//function createArr ($arr, $key) {
//    $res = [];
//    $keys = [];
//    foreach ($arr as  $v) {
//        if(!in_array($v[$key],$keys)) {
//            $keys[] = $v[$key];
//            $res[] = $v;
//        }
//    }
//    return $res;
//}
//$students = array(
//    1, 2, 5, 'gty', 5
//);
//echo '<pre>';
//print_r(array_unique($students));
//echo '</pre>';
//$my_array = array("red", "black", "green", "black", "white", "yellow");
//echo '<pre>';
//print_r(array_values(array_unique($my_array)));
//echo '</pre>';
// Define a function to find non-unique values in an array
//function array_not_unique($my_array) {
//    // Initialize an array to store duplicate values
//    $same = array();
//
//    // Perform a natural case-insensitive sort on the array
//    natcasesort($my_array);
//
//    // Reset the array pointer to the beginning
//    reset($my_array);
//
//    // Initialize variables to track the previous key and value
//    $old_key    = NULL;
//    $old_value    = NULL;
//
//    // Loop through the sorted array to find duplicate values
//    foreach ($my_array as $key => $value) {
//        // Skip NULL values
//        if ($value === NULL) { continue; }
//
//        // Check if the current value is the same as the previous value
//        if ($old_value == $value) {
//            // Store the duplicate values and their corresponding keys
//            $same[$old_key]    = $old_value;
//            $same[$key]        = $value;
//        }
//
//        // Update the variables with the current key and value
//        $old_value    = $value;
//        $old_key    = $key;
//    }
//
//    // Return the array containing non-unique values
//    return $same;
//}
//
//// Create a test array with duplicate and non-duplicate values
//$test_array = array();
//$test_array[1]    = 'xyz@example.com';
//$test_array[2]    = 'dse@example.com';
//$test_array[3]    = 'xyz@example.com';
//$test_array[4]    = 'mno@example.com';
//
//// Call the function and display the result
//print_r(array_not_unique($test_array));
//function createArr($a, $b, $c) {
//    $arr =[];
//    for ($i = 0; $i < $c; $i++) {
//        $arr[] = range($a, ($c + $a))[$i];
//    }
//    $arr = array_flip($arr);
//    for ($i = 0; $i < $c; $i++) {
//        $arr[array_keys($arr)[$i]] = range($b, ($b + $c))[$i];
//    }
//    $arr = array_flip($arr);
//    return $arr;
//
//}
//$arr3 = createArr(17, 105, 10);
//$arr3 = array_combine(range(20,25), range(2, 7));
//function combArr($a, $b) {
//    $arr = [];
//    foreach($a as $v) {
//        $arr[] = $v;
//    }
//    $arr = array_flip($arr);
//    for($i = 0; $i < count($b); $i++) {
//        $arr[array_keys($arr)[$i]] = $b[$i];
//    }
//    return $arr;
//}
//$arr1 = ['x', 'y', 'y'];
//$arr2 = [10, 20, 30];
//echo "<pre>";
//print_r(combArr($arr1, $arr2));
//echo '</pre';
//function combine_Array($keys, $values)
//{
//    // Initialize an empty array to store the combined result
//    $result = array();
//
//    // Iterate through each element of the $keys array
//    foreach ($keys as $i => $k) {
//        // Use the keys as indices and group values accordingly
//        $result[$k][] = $values[$i];
//    }
//
//    // Use array_walk to iterate through each element in $result and modify it
//    array_walk($result, function (&$v) {
//        // If an array has only one element, replace it with that element
//        $v = (count($v) == 1) ? array_pop($v) : $v;
//    });
//
//    // Return the combined array
//    return $result;
//}
//
//// Two arrays to be combined
//$array1 = array('x', 'y', 'y');
//$array2 = array(10, 20, 30);
//
//// Print the result of combining the arrays
//print_r(combine_Array($array1, $array2));
//function key_compare($a, $b)
//{
//    // If keys are identical, return 0
//    if ($a === $b)
//        return 0;
//
//    // Return 1 if $a is greater than $b, otherwise return -1
//    return ($a > $b) ? 1 : -1;
//}
//
//// Function to find the difference between two multidimensional arrays based on associative keys
//function multidimensional_array_diff($arr1, $arr2)
//{
//    // Use array_diff_uassoc to find the difference based on the provided key_compare function
//    return array_diff_uassoc($arr1['c'], $arr2['c'], "key_compare");
//}
//
//// Two multidimensional arrays
//$color1 = array('a' => 'White', 'b' => 'Red', 'c' => array('a' => 'Green', 'b' => 'Blue', 'c' => 'Yellow'));
//$color2 = array('a' => 'White', 'b' => 'Red', 'c' => array('a' => 'White', 'b' => 'Red', 'c' => 'Yellow'));
//
//// Print the difference between the multidimensional arrays
//print_r(multidimensional_array_diff($color1, $color2));
//$a = array_fill(0, 4, array_fill(0, 4, 10));
//
//// Print the resulting multidimensional array
//echo '<pre>';
//print_r($a);
//echo '</pre>';
//function mergeList ($a, $b) {
//    $arr = array_merge($a, $b);
//    $arr = array_values(array_unique(($arr)));
//    return $arr;
//}
//$a1 = [1, 2, 3, 4, 5];
//$a2 = [1, 4, 5, 7, 16];
//echo '<pre>';
//print_r(mergeList($a1, $a2));
//echo '</pre>';
//$color1 = array('a' => 'White', 'b' => 'Red', 'c' => array('a' => 'Green', 'b' => 'Blue', 'c' => 'Yellow', 'f' => 'Red'), 'd' => 'Red');
//function delKey($a, $b) {
//    $count = 0;
//    foreach ($a as $k => $v) {
//        if(($b == $v) && ($count > 0)) {
//            unset($a[$k]);
//        } elseif (($b == $v) && ($count == 0)) {
//            $count++;
//        }
//        if(is_array($v)) {
//            foreach($v as $k1 => $v1) {
//                if($b == $v1) {
//                    unset($a[$k][$k1]);
//                }
//            }
//        }
//    }
//    return $a;
//}
//echo '<pre>';
//print_r(delKey($color1, 'Red'));
//echo '</pre>';
//function array_uniq($my_array, $value)
//{
//    $count = 0;
//
//    // Iterate through the array
//    foreach($my_array as $array_key => $array_value)
//    {
//        // If more than 0 occurrences and the current value matches the specified value, unset it
//        if (($count > 0) && ($array_value == $value))
//        {
//            unset($my_array[$array_key]);
//        }
//
//        // If the current value matches the specified value, increment the count
//        if ($array_value == $value) $count++;
//    }
//
//    // Remove any null or empty elements from the array
//    return array_filter($my_array);
//}
//
//// Example usage: an array of numbers
//$numbers = array(4, 5, 6, 7, 4, 7, 7, 8);
//
//// Call the function with the array and a value to remove
//print_r(array_uniq($numbers, 7));
//function check_strings_in_array($arr)
//{
//    print_r(array_map('is_string', $arr));
//    print_r(array_sum(array_map('is_string', $arr)));
//    // Use array_map to check if each element is a string, then sum the results
//    // If the sum is equal to the total count of elements, it means all elements are strings
//    return array_sum(array_map('is_string', $arr)) == count($arr);
//}
//
//// Test arrays
//$arr1 = array('PHP', 'JS', 'Python');
//$arr2 = array('SQL', 200, 'MySQL');
//
//// Check and display the result for $arr1
//var_dump(check_strings_in_array($arr1));
//
//// Check and display the result for $arr2
//var_dump(check_strings_in_array($arr2));
//function array_multisum(array $arr): float {
//    $sum = array_sum($arr);
//    foreach($arr as $child) {
//        $sum += is_array($child) ? array_multisum($child) : 0;
//    }
//    return $sum;
//}
//    $data =
//        [
//            'a' => 5,
//            'b' =>
//                [
//                    'c' => 7,
//                    'd' => 3
//                ],
//            'e' => 4,
//            'f' =>
//                [
//                    'g' => 6,
//                    'h' =>
//                        [
//                            'i' => 1,
//                            'j' => 2
//                        ]
//                ]
//        ];
////
////    echo array_multisum($data);
//$colors = array('c1' => 'Red',  'c2' => 'Green',  'c3' => 'White',  'c4' => 'Black');
//echo next($colors) . "\n";
//echo array_pop($colors);
$str = "transform a string all uppercase letters.";
echo strtoupper($str) . '<br>';
echo strtolower($str) . "<br>";
echo ucfirst($str) . "<br>";
echo ucwords($str) . "<br>";
$str1 = '082307';
echo substr(chunk_split($str1, 2, ':'),0, -1) . "<br>";
$str2 = 'The quick brown fox jumps over the lazy dog.';
echo strpos($str2, 'jumps') . "<br>";
$str4 = 34;
var_dump((string)$str4);
echo '<br>';
$str5 = 'www.example.com/public_html/index.php';
echo substr($str5, strrpos($str5, '/') + 1) . '<br>';
echo substr(strrchr($str5, '/'), 1) . '<br>';
$str6 = 'rayy@example.com';
echo strstr($str6, '@', true) . '<br>';
echo substr($str6, -3) . '<br>';
$value1 = 65.45;
$value2 = 104.35;
echo sprintf('%1.2f', $value1 + $value2) . "<br>";
$pass = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
echo substr(str_shuffle($pass), rand(6, 10), rand(6, 10)) . '<br>';
$str7 = 'the quick brown fox jumps over the lazy dog.';
echo preg_replace('/the/', 'That', $str7,  1) . '<br>';
//$str8 = 'football';
//$str9 = 'footboll';
//echo strcmp($str8, $str9) . '<br>';
$str10 = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
print_r(explode("\n", $str10));
echo '<br>';
$str11 = 'https://www.w3resource.com/index.php';
echo basename($str11, '.php') . '<br>';
//$cha = 'x';
//$next_cha = ++$cha;
////The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
//if (strlen($next_cha) > 1)
//{
//    $next_cha = $next_cha[0];
//}
//echo $next_cha."\n";
$str12 = 'rayy@example.com';
echo substr($str12, strpos($str12, '@')) . '<br>';
echo bin2hex($str12) . '<br>';
$str13 = 'The brown fox';
$str14 = 'quick';
$str15 = substr_replace($str13, $str14 . " ", 4, 0);
echo  $str15 . '<br>';
echo substr($str15, 0, strpos($str15, ' ')) . '<br>';
$str16 = '000547023.24';
echo ltrim($str16, '0') . '<br>';
$str17 = 'The quick brown fox jumps over the lazy dog';
echo str_replace('fox', ' ', $str17) . '<br>';
echo substr_replace($str17, '', 16, 3) . '<br>';
$str18 = 'http://www.example.com/5478631';
echo basename($str18) . '<br>';
echo substr(strrchr($str18, '/'), 1) . '<br>';
$str19 = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\"+\/*:-'), ' ', $str19) . '<br>';
$str20 = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $str20), 0 , 5)) . '<br>';
$str21 = '2,543.12';
echo str_replace(',', '', $str21) . '<br>';
for ($i = ord('a'); $i <= ord('z'); $i++) {
    echo chr($i);
}
echo '<br><hr><br>';
class MathComplex {
    public $re, $im;
    function add(MathComplex $c) {
        $this->re += $c->re;
        $this->im += $c->im;
    }
    function __toString()
    {
        return "{$this->re}, {$this->im}";
    }
}
$a = new MathComplex;
$a->re = 34;
$a->im = 102;
$b = new MathComplex;
$b->re = 10;
$b->im = 18;
$a->add($b);
echo $a . '<br>';
class sqrtNumb {
    public $a, $b, $c;
    function __construct($a, $b, $c = 0) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    function Math() {
        $this->c = $this->a * $this->b + $this->b;
    }

    function __toString () {
        return $this->c;
    }
}
$obj5 = new sqrtNumb(10, 4);
//$obj6 = new sqrtNumb(12, 5);
$obj5->Math();
//$obj5->Math($obj5);
echo $obj5 . '<br>';
//class onlyRead
//{
//    public $str, $num;
//    public static $qr = 10;
//    public function read() {
//        echo "{$this->str}<br>";
//        $this->num *= $this->num;
//        echo "{$this->num}<br>";
//
//    }
//    public function __construct($a, $b)
//    {
//        $this->str = $a;
//        $this->num = $b;
//    }
//}
//$newObj = new onlyRead();
//$newObj->add('Hello', 15);
//$newObj->read();
//$newObj->qr = 15;
//echo "self::qr";
//class editFile
//{
//    public $f;
//    public $name;
//    public $lines = [];
//    public $t;
//    public function __construct($fname, $name) {
//        $this->name = $name;
//        $this->f = fopen($fname, 'a+');
//        $this->add("### __construct() called!");
//    }
//    public function add($str) {
//        $prefix = "[" . date("H:i:s_d-m-Y ") . "{$this->name}] ";
//        $str = preg_replace('/^/m', $prefix, rtrim($str));
//        $this->lines[] = $str . "\n";
//    }
//    public function __destruct() {
//        $this->add("### __destruct() called!");
//        fputs($this->f, join('', $this->lines));
//        fclose($this->f);
//    }
//}
//for($i =0; $i < 10; $i++) {
//    $logger = new editFile("/opt/lampp/htdocs/SQL+PHP/test.log", "test$1");
//    $logger->add("Hello!");
//}
//$newfile = new editFile('/opt/lampp/htdocs/SQL+PHP/text.txt', 'good');
//$newstr = [
//        'Привіт всім, сьогодня я вчуся',
//        'Побачимо як в мене вийде',
//        'Хотілося б, щоб вийшло'
//];
//$newfile->add($newstr[0]);
//$newfile->close();
//$newfile->add($newstr[1]);
//$newfile->close();
//$newfile->add($newstr[2]);
//$newfile->close();
class Counter
{
    private static $count = 0;
    public function __construct() {
        self::$count++;
    }
    public function __destruct()
    {
        self::$count--;
    }
    public static function getCount()
    {
        return self::$count;
    }
}
for ($objr = [], $i = 0; $i < 5; $i++) {
    $objr[] = new Counter();
}
$objr[4] = null;
var_dump($objr);
echo "Зараз існує " . $objr[0]->getCount() . " об'єктів" . "<br>";
//class FileLog
//{
//    private $time;
//    public static $logger = [];
//    private function __construct() {
//        $this->time = microtime(true);
//    }
//    public static function create($fname) {
//        if(isset(self::$logger[$fname])) {
//            return self::$logger[$fname];
//        }
//        return self::$logger[$fname] = new self($fname);
//    }
//    public function getTime() {
//        return $this->time;
//    }
//
//}
//$logger1 = FileLog::create('file.log');
//sleep(1);
//$logger2 = FileLog::create('file1.log');
//sleep(1);
//$logger3 = Filelog::create('file.log');
//print_r($logger1::$logger);
class Hooker
{
    public $open = 'opener';
    public function method ()
    {
        echo "Yo im here" . "<br>";
    }
    private $vars = [];
    public function __get($name) {
        echo "Перехват noget <br>";
        return isset($this->vars[$name]) ? $this->vars[$name] : null;
    }
    public function __set($name, $value)
    {
        echo "Перехват  val <br>";
        return $this->vars[$name] = trim($value);
    }
    public function __call($name, $args)
    {
        echo "Перехват func <br>";
        var_dump($args);
        return $args[0];
    }
}
$hook = new Hooker();
echo "$hook->open" ."<br>";
$hook->method();
echo $hook->gru;
$hook->gru = 115;
echo $hook->gru;
$hook->grey(123);
var_dump($hook);
echo "<br>";

class user
{
    public function __construct($name, $password) {
        $this->name = $name;
        $this->password = $password;
        $this->reffer = $_SERVER['PHP_SELF'];
        $this->time = time();
    }
    public $name, $password, $reffer, $time;
}
$user1 = new user('Bohdan', '123pass');
echo "<pre>";
print_r($user1);
echo "</pre><br>";
$objs = serialize($user1);
echo $objs . "<br>";
class learnExtend
{
    public function __construct($name, $secondname)
    {
        $this->name = $name;
        $this->secondname = $secondname;
    }
    public $message, $ouch;
    public function jerk ($msg)
    {
        $this->message = $msg;
        echo "Привіт $this->name, $this->message" . '<br>';
    }
    public function perk ($str) {
        $this->ouch = $str;
        echo "$this->secondname, чому ви $this->ouch" . '<br>';
    }
}
class learnPhp extends learnExtend
{
    public function __construct($arr)
    {
        parent::__construct($arr[0], $arr[1]);
    }
    public function skf ()
    {
        echo "$this->secondname - $this->name";
    }
}
$kdk = ['Bohdan', 'Sokol'];
$log1 = new learnPhp($kdk);
$log2 = new learnExtend("Andriy", "Kryvchov");
$log1->jerk('як ти?');
$log1->perk('запізнилися?');
$log2->perk('gge');
echo "<br> <hr> <br>";
//class dispStr
//{
//public $name;
//public function show($a) {
//    $this->name = $a;
//    echo "Hello All, I am " . $this->name . "!\n";
//}
//}
//$hiall = new dispStr;
//$hiall->show('Scott');
//class intFact
//{
//    public $na, $result;
//    public function __construct($a)
//    {
//        $this->na = $a;
//        $this->result = 1;
//    }
//    public function fact()
//    {
//        if($this->na == 0) {
//            return $this->result;
//        } else {
//            for($i = 1; $i <= $this->na; $i++) {
//                $this->result *= $i;
//            }
//            return $this->result;
//        }
//
//    }
//}
//$int1 = new intFact(5);
//echo $int1->fact();
//class sortArr
//{
//    public $arr;
//    public function __construct($a)
//    {
//        $this->arr = $a;
//    }
//    public function sortArr1()
//    {
//        sort($this->arr);
//        return $this->arr;
//    }
//    public function show()
//    {
//        return $this->arr[0];
//    }
//}
//$arr25 = [11, -2, 4, 35, 0, 8, -9];
//$newAr = new sortArr($arr25);
//print_r($arr25);
//echo "<br>".$newAr->show();
//print_r($newAr->sortArr1());
//echo "<br>".$newAr->show();
//$d1 = "1981-11-03";
//$d2 = "2013-09-04";
//class diffDate
//{
//    protected $d1, $d2;
//    public function __construct($a, $b)
//    {
//        $this->d1 = $a;
//        $this->d2 = $b;
//    }
//    public function diff()
//    {
//        $diffTime = strtotime($this->d1) - strtotime($this->d2);
//        $arr['m'] = floor($diffTime / 60);
//        $arr['h'] = floor($diffTime / 60 / 60);
//        $d = floor($diffTime / 60 / 60 / 24);
//        $y = floor($diffTime / 60 / 60 / 24 / 365);
//        $arr['d'] = $d - floor($y * 365);
//
//        $arr['y'] = $y;
//
//        return $arr;
//    }
//}
//$f1 = new diffDate($d2, $d1);
//$interv = $f1->diff();
//echo $interv['d'];
//$stime = new DateTime($d1);
//$etime = new DateTime($d2);
//echo "<pre>";
//print_r($stime);
//echo "</pre>";
//$interval = $stime->diff($etime);
//echo "<pre>";
//print_r($interval);
//echo "</pre>";
//$e = new DateTime;
////print_r($e);
//$frt = $e->setDate(2023, 5, 14);
//print_r($frt);


?>

</body>
</html>
