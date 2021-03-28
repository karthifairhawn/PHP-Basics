<?php 

// 1.Indexed Arrays 2.Associated Arraus 3.Multi Dimensional Arrays

//          Indexed Array

$array_1 = ['hello','world']; //declaration
$array_2 = array('hello','world');  //declaration

$array_2[]='new'; // append
array_push($array_2,'new_val'); // append 2

echo $array_1[1]; // indexed print
print_r($array_2); // whole array print
echo count($array_2); // count of array
print_r(array_merge($array_1,$array_2));


//          End of Indexed Array

//          Associative Array

$ass_arr = ['color'=>'black'];
$ass_arr2 = array('color'=>'black');
echo $ass_arr['color'];
print_r($ass_arr2);




?>

<html>
    <head>
        <title>Lesson 5 Arrays PHP</title>
    </head>
    <body>
    </body>
</html>