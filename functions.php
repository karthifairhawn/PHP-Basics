<?php

//   Functions

function say_hello($name = 'moni'){

    echo "Good Morning $name".'<br>';
}
say_hello('karthi');
say_hello();


function formatProduct($product){
    // echo "{$product['name']} costs £{$product['price']} to buy <br />";
    return "The {$product['name']} costs £{$product['price']} to buy <br />";
}

//formatProduct(['name' => 'gold star', 'price' => 20]);

// $formatted = formatProduct(['name' => 'gold star', 'price' => 20]);
// echo $formatted;

?>