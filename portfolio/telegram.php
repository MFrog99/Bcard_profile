<?php
$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "7664986796:AAFBaf6QKiR0p1kB9mU77tJO4XhrA_dePSA";
$chat_id = "484775887";

$arr = array(
  'Имя пользователя: ' => $name,
  'Почта:' => $email,
  'Текст сообщения: ' => $phone
);

// Инициализация переменной $txt
$txt = "";

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

if ($sendToTelegram) {
  header('Location: index.html');
} else {
  echo "Error";
}
?>