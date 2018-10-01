<?php
$ch = curl_init();
//curl_setopt($ch, CURLOPT_URL,"http://52.243.57.222/api/v1/wallet/transaction/get_status/");
curl_setopt($ch, CURLOPT_URL,"https://demo1-api.infd.jp/api/v1/wallet/transaction/get_status/");
curl_setopt($ch, CURLOPT_POST, 1);
$transaction_token = isset($_POST["transaction_token"]) ? $_POST["transaction_token"] : "";
$vars = [
    "transaction_token" => $transaction_token
];
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($vars));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$headers = [
    'Accept: application/json' ,
    'Content-Type: application/json', 
    'X-Wallet-OS: iOS', 
    'X-Wallet-OS-Ver: 8.0',
    'X-Wallet-OS-Level: 80',
    'Authorization:Bearer 2c0acf13e1b457863f65a74bde0de50a3cff583365b969c4b39a72bcb1d87f08',
    'X-Wallet-App-Ver: 1.00.00',
    'User-Agent: resona-wallet-app',
];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$server_output = curl_exec ($ch);
curl_close ($ch);

echo  $server_output ;