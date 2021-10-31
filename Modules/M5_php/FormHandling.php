<!DOCTYPE html>
<!--
PHP Form Handling

The PHP superglobals $_GET and $_POST are used to collect form-data
**********************
$_GET vs $_POST

Both $_GET and $_POST create an array (e.g. array key => value, key2 => value2....).
This array holds key/value pairs, where keys are names of the form controls and values
are the input data from the user.

Both $_GET and $_POST are treated as $_GET and $_POST. These are superglobals,
which means that they are always accessible, regardless of scope - 
and you can access them from any function, class or file without having to 
do anything.

$_GET is an array of variables passed to the current script via URL parameters.
$_POST is an array of variables passed to the current script via the HTTP POST method.
*************************

When to use GET?

Information sent from a form with GET method is visible to everyone
(all variable names and values are displayed in the URL). GET also has 
limits on the amount of information to send. The limitation is about 2000
characters. However, becuase the variables are displayed in the URL, it is 
possible to bookmark the page. This can be useful in some cases.

GET may be used for sending non-sensitive data.

NOTE: Get should NEVER be used for sending passwords or other sensitive information!
*****************************

When to use POST?

Information sent from a form with the POST method is invisible to others
(all names/values are embedded within the body of the HTTP request) and has 
no limits on the amount of information to send.

Moreover POST supports advanced functionality such as support for mutli-part 
binary input while uploading files to stream_socket_server

However, becuase the variables are not displayed in the URL, it is not possible
to bookmark the page.

Developers prefer POST for sending form data.
**********************************************
PHP Form Validation 
THE PHP superglobals $_GET and $_POST are used to collect form-data.
-->
<html lang="en">
<head>
    <?php define("title","Form Handling");?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./../css/error.css" type="text/stylesheet" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function (){
            $("#datepicker").datepicker();
        });
    </script>
</head>
<body>
<h1></h1>
    <br/>
    <?php
    include 'inputValidate.php';
    ?>
    <h2>PHP Form Validation Example</h2>
    <span class="error">* required field</span>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" novalidate>
    <!--
        The htmlspecialchars() function converts special characters to HTML
        entities. This means that it will replace HTML, characters like
        < and > with &lt; and &gt;. This prevents attackers from exploiting 
        the code by injecting HTML or Javascript code (Cross-site Scripting attacks)
        in forms.

        Cross-site scripting (XSS), is a type of computer security vulnerability

    -->
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo $name; ?>"/>
    <span class="error">* <?php echo $nameERR; ?></span>
    <br/><br/>

    <label for="email">E-mail:</label>
    <input type="text" id="website" name="website" value="<?php echo $email; ?>"/>
    <span class="error">* <?php echo $emailErr;?></span>
    <br/><br/>

    <label for="website">Website:</label>
    <input type="text" id="website" name="website" value="<?php echo $website;?>"/>
    <span class="error">* <?php echo $websiteErr;?></span>
    <br/><br/>

    Gender:
    <label for="female">Female</label>
    <input type="radio" id="female" name="gender"
    <?php if($gender=="female"){echo "checked";};?>
        value="female"/>
    
    <label for="male">Male</label>
    <input type="radio" id="male" name="gender"
    <?php if($gender == "male"){ echo "checked";}?>
        value="male"/>
    <span class="error">* <?php echo $genderErr;?></span>
    <br/><br/>

    <button>Submit button</button>

    <!--<p>Date: <input type"text" id="datepicker"></p>-->
    </form>
</body>
</html>