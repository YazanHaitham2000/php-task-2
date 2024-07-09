<?php
/*   1 : -  */ /*
for ($i = 1; $i <= 10; $i++) {
    echo $i;
    if ($i < 10) {
        echo "-";
    }
}*/
/*   2 : -  */ /*
$total = 0;

for ($i = 0; $i <= 30; $i++) {
    $total += $i;
}

echo "Total: " . $total;*/
/*   3 : -  */ /*
$letters = array('A', 'B', 'C', 'D', 'E'); 

for ($i = 0; $i < count($letters); $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo $letters[$i] . " ";
    }
    echo "<br>";
}*/
/*   4 : -  *//*
$size = 5; 

for ($i = 1; $i <= $size; $i++) {
    for ($j = 1; $j <= $size; $j++) {
        if ($j <= $size - $i) {
            echo "1 ";
        } else {
            echo $i . " ";
        }
    }
    echo "<br>";
}*/
/*   5 : -  *//*
$size = 5; 

for ($i = 1; $i <= $size; $i++) {
    for ($j = 1; $j <= $size; $j++) {
        if ($i == $j) {
            echo $i . " ";
        } else {
            echo "0 ";
        }
    }
    echo "<br>";
}*/
/*   6 : -  *//*
$number = 5;
$factorial = 1; 


for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}


echo "The factorial of $number is: $factorial";*/
/*   7 : -  *//*
$n = 10; 


$fibonacci = array(0, 1);


for ($i = 2; $i < $n; $i++) {
    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
}


for ($i = 0; $i < $n; $i++) {
    echo $fibonacci[$i];
    if ($i < $n - 1) {
        echo ", ";
    }
}*/
/*   8 : -  *//*
$text = "Orange Coding Academy";


$lowercaseText = strtolower($text);


$count = substr_count($lowercaseText, 'c');


echo "The number of 'c' characters in the text is: " . $count;*/
/*   9 : -  *//*
// بدء إنشاء الجدول مع تحديد مسافة الخلية والتباعد بين الخلايا
echo '<table cellpadding="3px" cellspacing="0px" border="1">';

// حلقة لتمرير الصفوف من 1 إلى 6
for ($r = 1; $r <= 6; $r++) {
    echo '<tr>'; // بدء صف جديد
    // حلقة لتمرير الأعمدة من 1 إلى 5
    for ($c = 1; $c <= 5; $c++) {
        $result = $r * $c; // حساب النتيجة
        echo '<td>' . "$r * $c = $result" . '</td>'; // إنشاء خلية جديدة وتعبئتها بالنص
    }
    echo '</tr>'; // إغلاق الصف
}

// إنهاء الجدول
echo '</table>';
/*   10: -  *//*
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo $i . " ";
    }
}*/
/*   11 : -  *//*
function floydTriangle($n) {
    $num = 1;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $num . " ";
            $num++;
        }
        echo "<br>";
    }
}

// حدد عدد الأسطر المطلوبة
$n = 5; // يمكنك تغيير هذه القيمة لعرض عدد مختلف من الأسطر
floydTriangle($n);*/
/*   12 : -  *//*
$height = 7; // عدد الأسطر في النمط
$middle = intval($height / 2); // النقطة الوسطى للنمط

for ($i = 0; $i < $height; $i++) {
    // حساب عدد الأحرف في السطر الحالي
    $numChars = $i <= $middle ? $i + 1 : $height - $i;
    
    // طباعة الأحرف للسطر الحالي
    for ($j = 0; $j < $numChars; $j++) {
        echo chr(65 + $j) . " ";
    }
    
    echo "<br>"; // استخدام "<br>" بدلاً من "\n" للطباعة في متصفح الويب
}*/
?>