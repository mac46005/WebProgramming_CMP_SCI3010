<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $userModel = simplexml_load_file("newUser.xml");
    ?>
    <p>Testing xml file access</p>
    <?php
    echo $userModel->id . "<br/>";
    echo $userModel->userName . "<br/>";
    echo $userModel->password . "<br/>";
    echo $userModel->firstName . "<br/>";
    echo $userModel->lastName . "<br/>";
    echo $userModel->address01 . "<br/>";
    echo $userModel->address02 . "<br/>";
    echo $userModel->city . "<br/>";
    echo $userModel->state . "<br/>";
    echo $userModel->zip . "<br/>";
    echo $userModel->phoneNumber . "<br/>";
    echo $userModel->email . "<br/>";
    echo $userModel->gender . "<br/>";
    echo $userModel->maritalStatus . "<br/>";
    echo $userModel->dob . "<br/>";

    $userModel->id = 2000;
    $userModel->userName = "Jose5545";
    $userModel->password = "thebestPasswordEver";
    $userModel->firstName = "Jose";
    $userModel->lastName = "Preciado";
    $userModel->address01 = "Unknown";
    $userModel->address02 = "307 waters st.";
    $userModel->city = "Saint Louis";
    $userModel->state = "MO";
    $userModel->zip = "632541";
    $userModel->phoneNumber = "3456646464";
    $userModel->email = "someemail@email.com";
    $userModel->gender = "Female";
    $userModel->maritalStatus = "Single";
    echo "<br/><br/><br/>";
    echo $userModel->id . "<br/>";
    echo $userModel->userName . "<br/>";
    echo $userModel->password . "<br/>";
    echo $userModel->firstName . "<br/>";
    echo $userModel->lastName . "<br/>";
    echo $userModel->address01 . "<br/>";
    echo $userModel->address02 . "<br/>";
    echo $userModel->city . "<br/>";
    echo $userModel->state . "<br/>";
    echo $userModel->zip . "<br/>";
    echo $userModel->phoneNumber . "<br/>";
    echo $userModel->email . "<br/>";
    echo $userModel->gender . "<br/>";
    echo $userModel->maritalStatus . "<br/>";
    echo $userModel->dob . "<br/>";
    ?>
</body>
</html>