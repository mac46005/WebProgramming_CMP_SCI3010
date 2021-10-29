<!DOCTYPE html>
<!--
    PHP echo and Print statements

    In PHP there are two basic ways to get output: echo and print

    echo and print are more or less the same.
    They are both used to output data to the screen.

    The differences are small: echo has no return value while print
    has a return value of 1 so it can be used in expressions. echo
    can take multiple parameters (although such usage is rare) while
    print can take one argument. echo is marginally faster than print.

    ****************

    The PHP echo Statement

    The echo statement can be used with or without parantheses: echo or echo()

    ********************

    The PHP print Statement 

    The print statement can be used with or without parentheses: print or print()

    *************************

    The PHP print Statement

    The print statement can be used with or without parentheses: print or print()
    Returns 1, always.
    ****************************************

-->
<html lang="en">
<head>
    <?php define("title","Echo and Print");?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo title;?></title>
    <style>
        P{
            font-weight: bold;

        }
    </style>
</head>
<body>
    <h1><?php echo title;?></h1>
    <br>
    <?php
    /*
    The example below shows how to output text with the echo command
    (notice that the text can contain HTML markup)
     */
    echo ("<h2>This class is the best!</h2>");
    echo "<p>Tell your friends</p><br/>";
    echo "Well maybe not, small class size is best<br/>";
    echo "This ", $myStr, "was ", "made ", "with multiple parameters";
    /*
    The example below shows how to output text with the print command
    (notice that the text can contain HTML markup)
     */
    print("<h2>My instructor is the best!</h2>");
    print("Yes, indeed I am<br/>");
    $returnInt = print "and modest too!<br/>";
    print($returnInt);
    ?>
</body>
</html>