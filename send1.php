<?php
if (isset($_POST['submit'])) {
    extract($_POST);
    if (!empty($subject) and !empty($name) and !empty($email) and!empty($message)) {
        $to = "busscameroun@gamil.com"
        $from = $email;
        $header += "From:/"$name/"<$from/n"
        $header += "Replay-To:$from/"
        if (mail($to, $subject, $message)) {
            echo "your mail has been sent"
        }else{
            echo "error: retry"
        }
    }
}