<!DOCTYPE html>
<html lang="en">
<head>
    <?php define("title","Variables");?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo title; ?></title>
</head>
<body>
    <!--
        Creating (Declaration) PHP Variables

        In PHP, a variable starts with the $ sign,
        followed by the name of the variable

        When you assign a text value to a variable, put quotes around the value

        Unlike other programming languages, PHP has no command for declaring a variable.
        It is created the moment you first assign a value to it.

        Think of variables as containers for storing data.
        *****************************
        PHP Variables

        A variable can have a short name (like x and y)
        or a more descriptive name (age, carname, total_volume)

        Rules for PHP variables

        A variable starts with the $ sign, followed by the name of the variable
        A variable name must start with a letter or the underscore character
        A variable name cannot start with a number
        A variable name can only contain alpha-numeric characters and underscore
        (A-z,0-9, and _)

        Variable names are case-sensitive ($age and $AGE are two different variables)
        *************************************

        Output Variables

        The PHP echo statement is often used to output data to the screen

        ***************************************

        PHP Case Sensitivity

        In PHP, all keywords (e.g if,else,while,echo,etc..), classes,
        functions, and user-defined functions are NOT case-sensitive

        However all variable names are case-sensitive.
        ****************************************
        
        PHP is a loosely typed language

        We do not have to tell PHP which data type the variable is.

        PHP automatically converts the variable to the correct data type,
        depending on its value.

        In other langauages such as C,C++, and Java, the programmer must declare
        the name and type of the variable before using it.

        *********************************

        PHP Variable Scope

        In PHP, variables can be declared anywhere in the script.

        The scope of a variable is the part of the script where the
        variable can be referenced/used.

        PHP has three different variable scopes:

            local
            global
            static
        *************************************
        Global and Local Scope

        A variable declared outside a function has a GLOBAL SCOPE
        and can only be used outside a FUNCTION

        A variable declared within a function has a LOCAL SCOPE
        and can only be accessed within that function

        You can have local variables with the same name in different
        functions, because local variables are only recognized by 
        the function in which they are declared.
        ************************************

        PHP The global Keyword

        The global keyword is used to access a global variable from within a function

        PHP also stores all global variables in an array called $GLOBALS[index].
        The index holds the name of the variable. This array is also accessible
        from within functions and can be used to update global variables directly
        ************************************

        PHP The static Keyword

        Normally, when a function is completed/executed, all of its variables are deleted.
        However, sometimes we want a local variable NOT to be deleted.
        We need it for a further job.

        To do this, use the static keyword when you first declare the variable
        ******************************************




-->
<h1><?php echo title;?></h1>
<br>
<?php
/*In the example below, all three echo statements below are legal (and equal) */
ECHO "Hello World!<br/>";
echo "Hello World!<br/>";
EcHo "Hello World!<br/>";

/*
In the example below, only the first statement will display the value of the
$color variables (this is because $color, $COLOR, and $coOR are treated as
three different variables)
 */
$color = "red";
echo "My car is " .$color. "<br/>";
echo "My house is " .$COLOR. "<br/>";
echo "My boat is " .$coLOR. "<br/><br/><br/>";
/*
After the excution of the statement below,
the variable $txt will hold the value Hello world!,
the variable $x will hold the value 10,
and the variable $y will hold the value 10.5.
 */
$txt = "Hello world";
// You can also use comments to leave out parts of a code line
$x = 5 /* + 15*/ + 5;
$y = 10.5;

/*
The following examples will show how to output text and a variable
 */
echo "I love $txt examples!<br/><br/>";
echo 'I love $txt examples!<br/><br/>';
echo "I love '$txt' examples?<br/><br/>";
echo "I love" .$txt. " examples!<br/><br/>";

/*
The following example will output the sum of the two variables
 */
echo "$x + $y" . ($x + $y);
echo "<br/><br/>";

function localScopeTest(){
    /*
    If we do not declare variable x locally and try to use
    the global variable x, without the global keyword,
     */
    $x = 30;
    echo "<p>Variable x inside function is: $x</p>";
}
localScopeTest();
echo "<p>Variable x outside function is : $x</p>";

function globalKeywordTest(){
    /*
    Using the global Keyword.
     */
    global $x;
    echo "<p>Global Variable x inside function is: $x</p>";
}
globalKeywordTest();

function globalArrayTest(){
    /*
    Using the array $GLOBALS[index]
     */
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}


globalArrayTest();
echo "After modifying the array GLOBALS[index] y is " . $y;
echo "<br/><br/>";

function staticTest(){
    static $z = 0;
    echo "static variable z: " . $z . "<br/><br/>";
    echo "static variable z: " . $z . "&lt;br/&gr;<br/><br/><br/>"
    $z++;
}

/*
Then, each time the function is called, that variable will still have
the information it contained from the last time the function was called

The variable z is still local to the function
 */
staticTest();
staticTest();
staticTest();
 
?>

</body>
</html>