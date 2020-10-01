<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$ssn =  $_GET['ssn']??null;
$phone =  $_GET['phone']??null;
if($ssn){
    /*
    $validate = preg_match("#([0-9]{3})-([0-9]{2})-([0-9]{4})$#",$ssn, $jon);
    if ($validate){
        echo "Good, Your SSN is VALID";
    }else{
        echo "Your SSN is not in a valid format";
    }
    */
}
if ($phone){
    // (917) 555-6677
    $pattern =  "#^\+[0-9]{1,4} \([0-9]{3}\) ([0-9]{3})-([0-9]{4})$#";
    $validate_phone = preg_match($pattern,$phone, $jon);
    if ($validate_phone){
        echo "Your phone is VALID";
    }else{
        echo "Your phone is BAD";
    }
    echo "<pre>";
    print_r($jon);
    echo "</pre>";
}
?>
<form>
    <p>
    <p>SSN: <input name="ssn" type="text" placeholder="123-56-6789" value="<?php echo $ssn;?>"></p>
    <p>Phone: <input name="phone" type="text" placeholder="(347) 576-4951" value="<?php echo $phone;?>"></p>
        <button type="submit">GO</button>
    </p>
</form>




</body>
</html>