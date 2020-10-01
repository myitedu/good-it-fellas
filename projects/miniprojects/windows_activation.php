<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Windows Activation Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">
    <div id="activation_form">
        <div class="content1">
            <div class="content1_title">Windows XP Professional Setup</div>
            <div class="content1_button"><img
                        src="https://1001freedownloads.s3.amazonaws.com/icon/thumb/652/Close_Box_Red.png"></div>
        </div>
        <div class="content2">
            <div class="content2_title">
                <h5>Your Product Key</h5>
                <span>Your Product Key uniquely identifies your copy of Windows XP</span>
            </div>
            <div class="content2_button"><img
                        src="https://1001freedownloads.s3.amazonaws.com/icon/thumb/98/social_windows_button.png"></div>
        </div>
        <div class="content3">
            <div class="content3_top">
                <div class="content3_top_img">
                    <img src="../../img/sample_product_barcode.png">
                </div>
                <div class="content3_top_text">
                    The 25-character Product Key appears on the yellow sticker<br>
                    on the back of your Windows CD folder.<br><br>
                    Type the Product key below:
                </div>
                <div class="myitedu">WWW.MYITEDU.US</div>
            </div>
            <div class="content3_bottom">
                <div class="content3_title">Product Key:</div>
                <input required="required" maxlength="5" minlength="5" class="serial_key" name="serial1" type="text"
                       placeholder="AAAAA"> -
                <input required="required" maxlength="5" minlength="5" class="serial_key" name="serial2" type="text"
                       placeholder="12345"> -
                <input required="required" maxlength="5" minlength="5" class="serial_key" name="serial3" type="text"
                       placeholder="AAAAA"> -
                <input required="required" maxlength="5" minlength="5" class="serial_key" name="serial4" type="text"
                       placeholder="12345"> -
                <input required="required" maxlength="5" minlength="5" class="serial_key" name="serial5" type="text"
                       placeholder="AAAAA">
            </div>
        </div>
        <div class="content4">
            <div class="content4_buttons">
                <button type="button">< Back</button>
                <button type="submit">Next ></button>
            </div>

        </div>
    </div>
</div>
<style>
    /*Content3 codes*/

    .myitedu{
        font-size: 27px;
        color: darkred;
        font-weight: bolder;
        position: relative;
        top: 16px;
    }

    .content3_top_img img {
        width: 85%;
    }

    .content3_top_img {
        width: 35%;
        display: inline-block;
        float: left;
        margin-top: 20px;
        text-align: right;
    }

    .content3_top_text {
        width: 65%;
        display: inline-block;
        float: right;
        margin-top: 20px;
        text-align: left;
        padding-left: 20px;
    }

    .content3_title {
        text-align: left;
        padding-left: 50px;
    }

    .content3_top {
        height: 60%;
    }

    .content3_bottom {
        height: 40%;
    }

    .serial_key {
        width: 100px;
        height: 40px;
        text-align: center;
        margin: 5px;
        border-radius: 5px;
        border: 1px solid darkgray;
        display: inline-block;
    }

    .content4_buttons button:first-child:hover {
        background-color: #15233f;
        color: white;
    }

    .content4_buttons button:last-child:hover {
        background-color: darkgreen;
        color: white;
    }

    .content4_buttons button {
        width: 90px;
        padding: 3px;
    }

    .content4_buttons {
        width: 40%;
        float: right;
        margin-top: 11px;
    }

    .content3 {
        width: 100%;
        height: 300px;
        background-color: #efe8e8;
        color: black;
        border-bottom: 1px solid black;
        text-align: center;
    }

    /*Content2 codes*/
    .content2_title h5 {
        margin-bottom: 0px;
    }

    .content2_title span {
        padding-left: 29px;
        margin-top: 0px;
    }

    .content2_button img {
        width: 66px;
    }

    .content2_button {
        width: 30%;
        display: inline-block;
        float: right;
        text-align: right;
        padding: 2px;

    }

    .content2_title {
        width: 70%;
        display: inline-block;
        float: left;
        padding: 2px;
        font-size: 80%;
    }

    .content2 {
        width: 100%;
        height: 70px;
        background-color: white;
        color: black;
        border-bottom: 1px solid black;
    }

    /*Content1 codes*/
    .content1_button img {
        width: 20px;
    }

    .content1_button {
        width: 30%;
        display: inline-block;
        float: right;
        text-align: right;

    }

    .content1_title {
        width: 70%;
        display: inline-block;
        float: left;
        padding: 2px;
        font-size: 80%;
        text-shadow: 2px 2px black;
    }

    .content1 {
        width: 100%;
        height: 25px;
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(18,18,140,1) 24%, rgba(0,212,255,1) 100%);
        color: white;
        border-bottom: 1px solid black;
    }

    /*Other codes*/
    #activation_form {
        width: 700px;
        height: 450px;
        border: 1px solid black;
        background-color: lightgrey;
        margin: 50px auto;
    }
</style>
</body>
</html>