<?php
/*   1 : -  *//*
function is_prime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}


$input = 3;

if (is_prime($input)) {
    echo "$input is a prime number";
} else {
    echo "$input is not a prime number";
}*/
/*   2 : -  *//*
function reverse_string($str) {
    return strrev($str);
}


$input = "remove";
$output = reverse_string($input);

echo "Original string: $input<br>";
echo "Reversed string: $output";*/
/*   3 : -  *//*
function is_all_lowercase($str) {
    return ctype_lower($str);
}


$input = "remove";

if (is_all_lowercase($input)) {
    echo "Your String is Ok";
} else {
    echo "Your String is not all lowercase";
}*/
/*   4 : -  *//*
function swap(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$x = 12;
$y = 10;

echo "before swap: x = $x, y = $y<br>";

swap($x, $y);

echo "after swap: x = $x, y = $y";*/
/*   5 : -  */
/*
function swap(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$x = 12;
$y = 10;

echo "before swap: x = $x, y = $y<br>";

swap($x, $y);

echo "after swap: x = $x, y = $y";*/
/*   6 : -  *//*
function is_armstrong_number($number) {
    $sum = 0;
    $temp = $number;
    $num_of_digits = strlen((string)$number);

    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $num_of_digits);
        $temp = (int)($temp / 10);
    }

    return $sum == $number;
}

$input = 407;

if (is_armstrong_number($input)) {
    echo "$input is an Armstrong Number";
} else {
    echo "$input is not an Armstrong Number";
}*/
/*   7 : -  *//*
function is_palindrome($string) {
    $cleaned_string = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $string));
    $reversed_string = strrev($cleaned_string);
    return $cleaned_string == $reversed_string;
}


$input = "Eva, can I see bees in a cave?";

if (is_palindrome($input)) {
    echo "Yes it is a palindrome";
} else {
    echo "No it is not a palindrome";
}*/
/*   8 : -  *//*

function remove_duplicates($array) {
    return array_unique($array);
}


$input_array = array(2, 4, 4, 7, 8, 8, 2);

$unique_array = remove_duplicates($input_array);


echo "Original array: ";
print_r($input_array);

echo "<br>Unique array: ";
print_r($unique_array);*/
?>