<!DOCTYPE html>
<html lang="en">
<head>
    <?php define("title","Data Types")?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo title; ?></title>
</head>
<body>
    <!--
        PHP Data Types

        Variables can store data of different types,
        and different data types can do different things.

        PHP supports the following data types:
        String
        Integer
        Float
        Boolean
        Array
        Object
        NULL
        Resources
    ***************************

    PHP String

    A string is a sequence of characters, like "Hello world!".
    A string can be any text inside quotes. You can use single or double quotes.
    ****************************
    PHP Integer

    An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.

    Rules for integer:
        An integer must have at least one digit
        An integer must not have a decimal point
        An integer can be either positive or negative
        Integers can be specified in three formats:
            decimal (10-based)
            hexadecimal (16-based - prefixed with 0x)
            octal (8-based - prefixed with 0)
    **********************************
    PHP Float

    A Float (floating point number) is a number with a decimal point
    or a number in exponential form.
    *******************************
    PHP Boolean

    A Boolean represents two possible states: TRUE or FALSE.
    Booleans are often used in conditional testing.
    ********************************
    PHP Array
    An array multiple values in one single variables.
    *******************************
    PHP Object
    An object is a data type which stores data and information on how to process that data.
    In PHP, an object must be explicitly declared.
    *******************************
    PHP NULL
    NULL is a special data type which can have only one value: NULL.
    A variable of data type NULL is a variable that has no value assigned to it.
    If a variable is created without a value, it is automatically assigned a value of NULL.
    ********************************
    PHP Resources

    Subset of the Object type. These are Objects that refer to external
    resources.

    The special resource type is not an actual data type.
    It is the storing of a reference to functions and resources external to PHP.

    A common example of using the resource data type is a database call.

    We will talk about the resource type here, since it is an advances topic.
    ********************************
    -->
    <h1><?php echo title;?></title></h1>
    <br>
    <?php
    /*
    In the following example $x is an integer.
    The PHP var dump() function returns the data type and value
     */
    $x = 666;
    var_dump($x);
    echo "<br/><br/>";

    /*
    First we must declare a class of object.
    For this, we use the class keyword.
    A class is a structure that can contain properties and methods.
     */
    class Car{
        String model;
        function Car(){
            $this->model = "VW";
        }
    }
    $myCar = new Car();
    $mySecondCar = new Car();
    var_dump($myCar);
    echo "<br/>", $myCar->model,"<br/>";
    var_dump($mySecondCar);
    echo "<br/><br/>";

    /*
    In the following example $n is a String then set to NULL.
    The PHP var_dump() function return the data type and value.
     */
    $n = "This represents my income post family expenses."
    $n = null;
    var_dump($n);
</body>
</html>