<?php
$myEma11 = roditieliev@ial.ukr.education
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
Введіть власну адресу електронної пошти
echo 'Error: invalid email address. <br />';
echo 'Click <a href="index.html">here</a> to return to the home page.';
}
else {
?>
>
$to = $myEmail;
$subject = "New message from: $name";
$body = $message;
$headers = "From: $email";
mail($to, $subject, $message, $headers);
header('Location: index.html');