<html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Email: <input name="email" type="text" autocomplete="off"/><br/><br/>
        Subject: <input name="subject" type="text" /><br/><br/>
        Message: <br/>
        <textarea name="message" rows="15" cols="40"></textarea><br/><br/>
        <input name="esubmit" type="submit" />
</form>
</body>
</html>
<?php
if(isset($_POST['esubmit'])){
    $to = "ashijain0310@gmail.com";
    $subject= $_POST['subject'];
    $message=$_POST['message'];
    $from=$_POST['email'];
    $headers= "From : $from";
    
    mail($to , $subject, $message, $from);
    echo "Mail Sent !!";
}
?>