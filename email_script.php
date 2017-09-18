<?PHP

$from="davehinds007@gmail.com";
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['subject'];

mail($email, $subject, $message, "From:".$from);

"Your message has been sent: </br>$email,/br>$subject</br>$message</p>";
?>
