<?php
//Bu calculator uchun kerak bolgan 1nch raqam
$number1 = $_GET['number1']??5;

//Bu calculator uchun kerak bolgan 2nch raqam
$number2 =$_GET['number2']??5;


//Bu calculator uchun kerak bolgan operatsion belgi
$operator = $_GET['operator']??'+';
?>
<form action="backend.php">
    <p>
        Number 1: <input value="<?php echo $number1?>" name="number1" placeholder="Number 1" type="text">
        <select name="operator">
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="-">-</option>
            <option value="+">+</option>
            <option value="%">%</option>
        </select>
        Number 2: <input value="<?php echo $number2?>"  name="number2" placeholder="Number 1" type="text">
        <button type="submit">Calculate</button>
    </p>
</form>

<?php
//Bu calculator ni result;
$result =  eval("return ".$number1 ."$operator". $number2.";");
echo $result;
?>















