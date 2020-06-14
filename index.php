<?php
//1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line.
// There will be no hyphen(-) at starting and ending position.
for ($x = 1; $x <= 10; $x++) {
    if ($x < 10) {
        echo "$x-";
    } else {
        echo "$x" . "\n";
    }
}
print '<br>';
print '<br>';

//2. Create a script using a for loop to add all the integers between 0 and 30 and display the total.
$sum = 0;
for ($x = 1; $x <= 30; $x++) {
    print $x . ' '; // isprintinam visus skaiciuos nuo 1 iki 30
    $sum += $x; // visi skaiciai nuo 1 iki 30 susumuojami
};
print '<br>';
print '<br>';

print $sum;

print '<br>';
print '<br>';

//3. Create a script to construct the following pattern, using nested for loop.
//*
//* *
//* * *
//* * * *
//* * * * *
//I-as budas
$kintamasis = '';
$kintamasis2 = '*';
for ($x = 1; $x <= 5; $x++) {
    print $kintamasis .= ' * '; //su kiekvienu ciklu prideda is galo po viena *
    print '<br>';
}
print '<br>';
print '<br>';

//II-as budas
for ($x = 1; $x <= 5; $x++) {
    print str_repeat(" * ", $x) . '<br>';
}
print '<br>';
print '<br>';

//4. Create a script to construct the following pattern, using a nested for loop.
//*
//* *
//* * *
//* * * *
//* * * * *
//* * * * *
//* * * *
//* * *
//* *
//*

for ($x = 1; $x <= 5; $x++) {
    print str_repeat(" * ", $x) . '<br>';
}
for ($x = 5; $x >= 1; $x--) {
    print str_repeat(" * ", $x) . '<br>';
}

print '<br>';
print '<br>';

//5. Write a program to calculate and print the factorial of a number using a for loop.
// The factorial of a number is the product of all integers up to and including that number,
// so the factorial of 4 is 4*3*2*1= 24.

$x = 1;

for ($i = 4; $i >= 1; $i--) {
    print $i . ', ';
    $x *= $i;

}
print '<br>';
print '<br>';

print $x;

print '<br>';
print '<br>';


//6. Write a program which will give you all of the potential combinations of a two-digit decimal
//combination, printed in a comma delimited format :

//I-as budas
for ($i = 00; $i < 100; $i++) {
    print str_pad($i, 2, '0', STR_PAD_LEFT) . ', ';
}

print '<br>';
print '<br>';

//II-as budas
for ($a = 0; $a < 10; $a++) {
    for ($b = 0; $b < 10; $b++) {
        echo $a . $b . ', ';
    }
}
print '<br>';
print '<br>';

//7. Write a program which will count the "r" characters in the text "w3resource".
//I-as budas
print substr_count("w3resourcer", "r");

print '<br>';
print '<br>';

//II-as budas
$txt = 'w3resourcer';
$sum_symbol = strlen(($txt)); //susumuoja kiek yra raidziu

$r_count = 0;
for ($i = 0; $i < $sum_symbol; $i++) {
    if ($txt[$i] == 'r') {
        $r_count += 1;
    }
}
print $r_count;

print '<br>';
print '<br>';

//8. Write a PHP script that creates the following table using for loops.

//function table()
//{
//    print '<table cellpadding="3px"; cellspacing="0px" align="left" border="1">';
//    for ($y = 1; $y <= 6; $y++) { //6 eilutes
//        print '<tr>';
//        for ($x = 1; $x <= 5; $x++) {//5 stulpeliai
//            $sum = $x * $y;
//            print '<td>' . $y . ' * ' . $x . ' = ' . $sum . '</td>';
//        }
//        print '</tr>';
//    }
//    print '</table>';
//}

//9. Write a PHP script using nested for loop that creates a chess board as shown below.

//function table()
//{
//    print '<table align="left" border="1" cellpadding="3" cellspacing="0">';
//    for ($y = 1; $y <= 8; $y++) {
//        print '<tr>';
//        for ($x = 1; $x <= 8; $x++) {
//            if (($x + $y) % 2 == 0) {
//                print '<td style="background-color: black; color: white;">' . 'tekstas' . '</td>';
//            } else {
//                print '<td style="background-color: white;">' . 'tekstas' . '</td>';
//            }
//        }
//        print '</tr>';
//    }
//    print '</table>';
//}
//10. Write a PHP script that creates the following table (use for loops).
function table()
{
    print '<table align="left" border="1" cellpadding="3" cellspacing="0">';
    for ($y = 1; $y <= 10; $y++) {
        print '<tr>';
        for ($x = 1; $x <= 10; $x++) {
            $sum = $x * $y;
            print '<td>' . $sum . '</td>';
        }
        print '</tr>';
    }
    print '</table>';
}
print '<br>';
print '<br>';
//11. Write a PHP program which iterates the integers from 1 to 50. For multiples of three print "Fizz"
//instead of the number and for the multiples of five print "Buzz". For numbers which are multiples of both
//three and five print "FizzBuzz".

for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz" . ', ';
    } else if ($i % 3 == 0) {
        echo "Fizz" . ', ';
    } else if ($i % 5 == 0) {
        echo "Buzz". ', ';
    } else {
        echo $i . ', ';
    }
}
print '<br>';
print '<br>';

//12. Write a PHP program to generate and display the first n lines of a Floyd triangle. (use n=5 and n=11 rows).

$n = 5;
$automatinis_kintamasis = 1;

for ($eilute = 1; $eilute <= $n; $eilute++) {
    for ($stulpelis = 1; $stulpelis <= $eilute; $stulpelis++) {
        print $automatinis_kintamasis . '  ';
        $automatinis_kintamasis++;
    }
    print '<br>';
    print '<br>';
}
//13. Write a PHP program to print alphabet pattern 'A'.

print '<table>';
for ($row = 0; $row <= 8; $row++) {
    for ($column = 0; $column <= 7; $column++) {
        if ((($column == 1 or $column == 5) and $row != 0) or (($row == 0 or $row == 3) and ($column > 1 and $column < 5)))
            print "*";
        else
            print "&nbsp;&nbsp;";
    }
    print '<br>';
}
print '</table>';



?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Penktadienis</title>
</head>
<body>

<?php table(); ?>

</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>
</html>
