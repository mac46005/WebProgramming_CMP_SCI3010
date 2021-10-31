<?php
// define variables and set to empty values
$nameErr = $emailErr = $generErr = $websiteERR = "";
$name = $email = $gender = $comment = $website = "";
$isValid = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $isValid = true;

    $name = clean_input($_POST["name"]);
    if(empty($name)){
        $nameErr = "Name is required";
        $isValid = false;
    }
    else{
        // check if name only contains letters and whitespace
        if(!preg_match("/^[a-zA-Z]+$/",$name)){
            /*
            The preg_match() function searches a string for pattern,
            returning true if the pattern exists, and false otherwise.
             */
            $nameErr = "Only letters and white space is allowed";
            $isValid = false;
        }
    }
    $email = clean_input($_POST["email"]);
    if(empty($email)){
        $emailErr = "Email is required";
    }
}
//var_dump($isValid);
function clean_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>