<!DOCTYPE html>
<html lang="en">
<head>
    <?php define("title","Strings");?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo title; ?></title>
</head>
<body>
    <!--
        PHP Strings
        A string is a sequence of characters, like "Hello world!".
        ****************************
        String Function: Get the Length of a String

        The PHP strlen() function returns the length of a string.
        ***************************
        String Function: Cunt the number of words in a String

        The PHP str_word_count() function counts the number of words in a string.
        **************************
        String Function: Reverse a String

        The PHP strrev() function reverses a string.
        ***************************
        String Function: Seach for a specific text within a String

        The PHP strpos() function searches for a specific text within a string

        If a match is found returns the character osition of the first matc.
        If no match is found, it will return false.

        The first character position in a String is 0 
        *****************************
        String Function: Replace text withing a String

        The PHP str_replace() function replaces some characters with some
        other characters in a string
        ********************************

    -->
    <?php
    /*
    Length of the string "Hello world"
     */
    $myStr = "Hello world";
    echo strlen($myStr);
    echo "<br/>";
    echo $myStr[2], "<br/><br/>";

    /*
    Number of words in the string "Hello world"
     */
    echo str_word_count($myStr);
    echo "<br/><br/>";

    /*
    Reverse of the string "Hello world"
     */
    echo strrev($myStr);
    echo "<br/><br/>";

    /*
    Replaces the test "world" with "dolly"
     */
    echo str_replace("world","Dolly",$myStr);
    echo "<br/><br/>";

</body>
</html>