<?php

if(isset($_POST['submit'])){
$to = "tattooWebsiteAleks@yandex.ru"; // Здесь нужно написать e-mail, куда будут приходить письма
$first_name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$letter = $_POST['letter'];
$subject = "Форма отправки сообщений с сайта";
$message = $first_name . " оставил заявку на сайте:" . "\n\n" . "Email: " . $email . "\n\n" . "Телефон: " . $phone . "\n\n" . "Сообщение: " . $letter;

$headers = "From:" . $from;
$headers2 = "From:" . $to;

mail($to,$subject,$message,$headers);
// mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - Отключено!
echo "Сообщение отправлено. Спасибо Вам " . $first_name . ", мы скоро свяжемся с Вами.";
echo "<br /><br /><a href='http://alexwilart.ru/'>Вернуться на сайт.</a>";

} 
else{
   $first_name = $_POST['name'];
   $phone = $_POST['phone'];
   $message = $first_name . " оставил заявку на обратный звонок:" . "\n\n" . "Телефон: " . $phone;

   echo $message;
   echo "<br /><br /><a href='http://alexwilart.ru/'>Вернуться на сайт.</a>";
}

?>

<!--Переадресация на главную страницу сайта, через 3 секунды-->
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="http://alexwilart.ru/");}
window.setTimeout("changeurl();",4000);
</script>