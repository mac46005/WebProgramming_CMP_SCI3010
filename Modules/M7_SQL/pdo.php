<!DOCTYPE html>
<html lang="en">
<?php
include 'connectionmysql.php';
?>

<head>
    <?php define("title","PDO"); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo title;?></title>
    <style>
    .error {
        color: #FF0000;
    }
    </style>
</head>

<body>
    <?php
    include 'inputValidate.php'; 
    ?>



    <h1><?php echo title;?></h1>
    <br>
    
    <h2>PDO Form Validation Example</h2>
    <p><span class="error">* Required Field.</span></p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    
        <label for="mf_name">Name:</label>
        <input type="text" class="mf_name" name="mf_name" value="<?php echo $mf_name; ?>">
            <span class="error"><?php echo $nameErr;?></span>
        <br><br>

        <label for="mf_email">E-mail:</label>
        <input type="text" class="mf_email" name="mf_email" value="<?php echo $mf_email?>">
        <span class="error">* <?php echo $emailErr?></span>
        <br><br>

        <label for="mf_phonenumber">Phonenumber:</label>
        <input type="text" name="mf_phonenumber" id="mf_phonenumber" value="<?php echo $phonenumberErr; ?>">
        <span class="error">* <?php echo $genderErr;?></span>
        <br><br>

        <label for="mf_comment">Comment:</label>
        <textarea name="mf_comment" id="mf_comment" cols="30" rows="10"><?php echo $mf_comment;?></textarea>
        <br><br>

        Gender:
        <label for="female">Female:</label>
        <input type="radio" name="mf_gender" id="female" value="Female" <?php if($mf_gender == "Female"){ echo "checked";};?>>
        <label for="male">Male:</label>
        <input type="radio" name="male" id="mf_gender" value="Male" <?php if($mf_gender == "Male"){ echo "checked";};?>>
        <br><br>

        <button>Submit</button>
    </form>
    <?php
    include 'insertValidData.php';
    ?>

    
    
</body>

</html>