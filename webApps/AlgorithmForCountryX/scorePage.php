<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php

/* Email scores */

$to      = 'saladinl@newtown.k12.ct.us';
$subject = 'Score';
$message = '';

foreach ($_POST as $key => $value)
{
	$message .= $key.":".$value."\n";
}

$headers = 'From: apps@mrsaladin.com' . "\r\n";

mail($to, $subject, $message, $headers);

?>

</head>

<body>
Your score is: <?php echo($_POST["numRawData"]); ?>
</body>
</html>