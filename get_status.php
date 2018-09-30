<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://52.243.57.222/api/v1/wallet/transaction/get_status/");
//curl_setopt($ch, CURLOPT_URL,"https://demo1-api.infd.jp/api/v1/wallet/transaction/get_status/");
curl_setopt($ch, CURLOPT_POST, 1);
$transaction_token = isset($_POST["transaction_token"]) ? $_POST["transaction_token"] : "";
$vars = [
    "transaction_token" => $transaction_token
];
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($vars));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$headers = [
    'Cache-Control: no-cache',
    'Content-Type: application/json',
    'X-Wallet-OS: 5.1',
    'OS: Android',
    'X-Wallet-OS-Level: 23',
    'X-Wallet-App-Ver: 1.00.00',
    'Authorization: Bearer 2c0acf13e1b457863f65a74bde0de50a3cff583365b969c4b39a72bcb1d87f08',
    'Accept: application/json',
    'User-Agent: resona-wallet-app'
];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$server_output = curl_exec ($ch);
curl_close ($ch);

echo  $server_output ;