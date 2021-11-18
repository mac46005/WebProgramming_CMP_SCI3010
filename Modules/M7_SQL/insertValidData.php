<?php
if($isValid){
    try{
        $conn = new PDO(dsn:"mysql:host=$servername;dbname=$dbname",$username,$password);
        // set the PDO error mode to exception

        $conn->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);

        $sql = $conn->prepare(statement:"INSERT INTO users(Name,Email,Phonenumber,Comment,Gender)
        VALUES (:name,:email,:phonenumber,:comment,:gender");
        $sql->bindParam(parameter:':name',&variable:$name);
        $sql->bindParam(parameter:':phonenumber',$variable:$phonenumber);
        $sql->bindParam(parameter:':comment',$variable:$comment);
        $sql->bindParam(parameter:':gender',$variable:$gender);

        $sql->execute();

        $last_id = $conn->lastInsert();
        $_SESSION['last_ID'] = $last_id;

        header(string:"Location: confirmation.php");
    }catch(PDOException $e){
        echo "Connection failed: " . $e.->getMessage();
    }finally{
        $conn = null;
    }
}
?>