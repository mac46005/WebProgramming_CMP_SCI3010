<!DOCTYPE html>
<html lang="en">
<head>
    <?php define("title","Constants")?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo title;?></title>
</head>
<body>
    <!--
        PHP Constants

        Constants are like variable except that once they are defined

        Constants are like variables except that once they are defined
        they cannot be changed or undefined.

        A constant is an identifier (name) for a simple value.
        The value cannot be changed during the script.

        A valid constant name starts with a letter or underscore
        (no $ sign before the constant name).

        Unlike variables, constants are automatically global across the entire script.
        *********************************
        Create a PHP Constant 

        To create a constant, use the define() function.

        Syntax:
            define(name,value,case-insenesitive)
        Parameters:
            name: Specifies the name of the constant
            Value: Specifies the value of the constant
            case-insensitive: Specifies whether the constant
                name should be a case-insensitive. Default is false
        **************************************
        Constants are GLOBAL

        Constants are automatically global and can be used across the entire script.

    -->
    <h1><?php echo title;?></h1>
    <br>
    <?php
    /*
    Creates a constant with a case-sensitive name
     */
    define("GREETING","Welcome to CMP SCI 30101");
    echo GREETING;
    echo "<br/><br/>"

    /*
    Use a constant inside a function, even if it is defined outside the function
     */
    define("ZELDA","Breath of the Wild is the best");
    function constantTest(){
        echo ZELDA;
    }
    constantTest();

    
    ?>
</body>
</html>