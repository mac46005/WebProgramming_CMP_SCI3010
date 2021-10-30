<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
        PHP GLobal Variables - Superglobals
        Several predefined variables in PHP are "superglobals", which means that
        they are always accesible, regardless of scope - and you can access them form
        any function, class or file without having to do anything special

        The PHP superglobal variables are:
        $GLOBALS
        $_SERVER
        $_REQUEST
        $_POST
        $_GET
        $_FILES
        $_ENV
        $_COOKIE
        $_SESSION
        ***********************

        PHP $GLOBALS

        $GLOBALS is a PHP super global variable which is used to access global variables
        from anywhere in the PHP script (also from within functions or methods).

        PHP stores all global variables in an array called $GLOBALS[index]. The index
        holds the name of the variable
        **************************
        PHP $_SERVER

        $_SERVER is a PHP super global variable which holds information about
        headers, paths, and script locations
        **************************
        PHP $_REQUEST
        PHP $_REQUEST is used to collect data after submitting an HTML form
        ****************************
        PHP $_POST
        PHP $_POST is widely used to collect form data after submitting an 
        HTML form with method="post" . $_POST is also widely used to pass variables
        ***************************
        PHP $_GET

        PHP $_GET can also be used to collect form data after submitting an
        HTML form with method="get"

        $_GET can also collect data sent in the URL
        ***************************


    -->
    <?php
    /*
    $GLOBALS
     */
    $x = 75;
    $y = 25;

    function addition(){
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    addition();
    echo "$z<br/><br/>";

    /*
    $_SERVER
     */
    echo $_SERVER['PHP_SELF'];
    echo "<br/>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br/>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br/>";
    echo $_SERVER['SERVER_PROTOCOL'];
    echo "<br/>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo $_SERVER['SCRIPT_NAME'];
    echo "<br/>";


    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label for="fName">Name:</label>
        <input type="text" id="fName" name="fName">
        <input type="submit">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // collect value of input field
        $name = $_POST['fName'];
        if(empty($name)){
            echo "Name is empty<br/>";
        }else{
            echo $name . " from POST<br/>";
        }
    }
    var_dump($_POST);
    /*$_GET */

    ?>
    <a href="test_get.php?subject=SPMSCI3010&school=UMSL"
    target="_blank">Test $GET</a>
</body>
</html>