<!DOCTYPE html>
<html lang="en">
<head>
    <?php define("title","Arrays")?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo title;?></title>
</head>
<!--
    PHP Arrays 
    An array is a special variable, which can hold more than one value at a time
    An array can hold values under a single name, and you can access the
    values by referring to an index number

    In PHP, the array() funtion is used to create an array.

    In PHP, there are three types of arrays:

    - Indexes Arrays = arrays with a numeric index
    - Associative Arrays = arrays with named keys
    - Multidimensional arrays = arrays containing one or more arrays

    **************************
    PHP Indexed arrays

    There are two ways to create Indexed arrays:

    - The index can be assigned automatically (index always starts with 0)
    - The index can be assigned manually
    e.g. 
    $cars[0] = "Batmobile";
    $cars[1] = "Turtle Van";
    etc...

    The count function is used to return the length of an array (the number of elements)

    To loop through and print all the values of an array use loop
    **************************

    PHP Associative Arrays

    Associative arrays are arrays that use named keys that you assign to them,

    There are two ways to create an associative array:

    e.g.
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    e.g.
    $age['Peter'] = "35";
    $age['Ben'] = "37";
    $age['Joe'] = "43";

    Tip: For displaying all values in associative array it is 
    best to use a FOREACH LOOP
    ********************************
    PHP Multidimensional

    A multidimensional array is an array containing one or more arrays

    PHP understands multidimensional arrays that are two,three,four,five
    or more levels deep. However, arrays more than three levels deep are hard
    to manage for most people.

    The dimension of an array indicates the number of indices you need to 
    select an element:
    - For a two dimensional array you need two indices to select an element
    - For a three dimensional array you need three indices to select an element
    *******************************
    PHP sorting arrays 

    The elements in an array can be sorted in alphabetical or numerical order,
    descending or ascending

    We will go through th following PHP array sort functions:

    sort() = sort arrays in ascending order
    rsort() = sort arrays in descending order
    asort() = sort associative array in ascending order, according to value
    ksort() = sort associative array in descending order, accoding to key
    arsort() = sort associative array in descending order, according to value
    krsort() = sort assovciative array in descending order, according to key
    *******************************8


-->
<body>
    <?php
    /*
    Indexed Arrays
     */
    $cars = array("Batmobile","Turtle van","Nissan Altima");
    $carsLength = count($cars);

    echo "The car I currently own is a " . $cars[2] . ". But i might want a different car soon";
    echo $carsLength . "<br/>";

    for ($i=0; $i < $carsLength; $i++) { 
        echo $cars[$i];
        echo "<br/>";
    }
    echo "<br/><br/>";


    /*
    Associative Arrays
     */
    $age = array("Danielle" => 19, "Katheryn" => 26, "Marco" => 28);
    echo "Danielle is " . $age['Danielle'] . " years old. She is very young.<br/>";

    foreach ($age as $key => $value) {
        echo "Key=" . $key . ", Value=" . $value;
        echo "<br/>";
    }
    echo "<br/><br/>"

    /*
    Multidimensional Array
     */
    $cars = array(
        array("Volvo" , 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2, "Jagged"),
        array("Land Rover", 17, 15)
    );

    
    ?>
</body>
</html>