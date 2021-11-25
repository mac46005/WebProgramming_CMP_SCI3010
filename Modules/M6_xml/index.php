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
    ?>
</body>
</html>