<?php

if(isset($_POST['submit'])){
$to = "pas.sergei2014@yandex.ru"; // Здесь нужно написать e-mail, куда будут приходить письма
$from = $_POST['email']; // this is the sender's Email address
$first_name = $_POST['first_name'];
$phone = $_POST['phone'];
$subject = "Форма отправки сообщений с сайта";
$subject2 = "Copy of your form submission";
$message = $first_name . " оставил сообщение:" . "\n\n" . "Телефон: " . $phone . "\n\n" . "Email: " . $email . "\n\n" . "Сообщение: " . $_POST['message'];
$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

$headers = "From:" . $from;
$headers2 = "From:" . $to;

mail($to,$subject,$message,$headers);
// mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - Отключено!
echo "Сообщение отправлено. Спасибо Вам " . $first_name . ", мы скоро свяжемся с Вами.";
echo "<br /><br /><a href='http://www.bredli.ru/myWork/drummers/index.php'>Вернуться на сайт.</a>";

}

?>

<!--Переадресация на главную страницу сайта, через 3 секунды-->
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="http://www.bredli.ru/myWork/drummers/index.php");}
window.setTimeout("changeurl();",3000);
</script>