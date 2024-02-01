<?php
    $to = "info@digitalescape.co.za";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
	$number = $_REQUEST['number'];
    $headers = "From: $from";
    

    $fields = array();
    $fields{"name"} = "Name";
    $fields{"email"} = "E-mail";
    $fields{"number"} = "Number";
    $fields{"message"} = "Message";

    $body = "Here is the message from www.digitalescape.co.za:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, "New mail from website :: $name" , $body, $headers);
?>
