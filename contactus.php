<?php
//get data from form 
if(isset($_POST['submit']))
{
    session_start();
    $wid = $_POST["id"];
    $name = $_POST['name'];
    $email= $_POST['email'];
    $message= $_POST['message'];
    $to = $wid;
    $subject = "Mail From website";
    $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
    $headers = "From: noreply@sheHero.com" . "\r\n" .
    "CC: somebodyelse@example.com";
    if($email!=NULL){
        mail($to,$subject,$txt,$headers);
    }
    //redirect
    header("dump.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
    <form action="contactus.php" method="post">
        <label for="name">Your Name</label>
        <input type="text"  name="name" placeholder="Your name..">
        <label for="lname">Email</label>
        <input type="email"  name="email" placeholder="Your email..">
       
        <label for="message">Message</label>
        <textarea  name="message" placeholder="Write something.." style="height:200px"></textarea>
        <input type="submit" name="submit" value="Submit">
      </form>
</body>
</html>