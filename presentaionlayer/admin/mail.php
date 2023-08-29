<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form_Mail</title>
    <style>
        *{
            background: brown;
            color: white;
        }
        textarea{
            resize: none;
        }
        form{
            text-align: center;
            margin-top: 50px;
            margin-bottom: 40px;
            border-radius: 2px solid black;
            font-family: arial;
        }
        div{
            border: 1px solid black;
            border-radius: 10px;
            width: 40%;
            background: yellow;
            margin-left: 400px;
        }
        .bg-color{
            background: white;
            color: black;
            border-radius: 6px;
        }
    </style>
</head>
<body>
    <div>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    To <br><br> <input class="bg-color" type="email" name="mail" placeholder="Receiver"><br><br>
    From <br><br> <input class="bg-color" type="email" name="email" placeholder="Sender"><br><br>
    Subject <br><br> <input class="bg-color" type="text" name="sub"><br><br>
    Message<br><br>
    <textarea class="bg-color" name="message" cols="40" rows="15"></textarea><br>
    <input name="esubmit" type="submit" value="Submit">
</form>
</div>
</body>
</html>

<?php
if(isset($_POST['esubmit'])){
    $to_email = $_POST['mail'];
    $subject = $_POST['sub'];
    $message = $_POST['message'];
    $header = $_POST['email'];
    
    if(mail($to_email, $subject, $message, $header)) {
        echo "Mail Sent Successfully";
    }
    else{
        echo "Mail Not Sent";
    }
    header("Location: http://localhost/php/My Project/presentaionlayer/admin/index3.php");
}
?>






