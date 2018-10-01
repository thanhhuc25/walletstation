<?php
$ch = curl_init();
//curl_setopt($ch, CURLOPT_URL,"http://52.243.57.222/api/v1/wallet/payment_method/list/");
curl_setopt($ch, CURLOPT_URL,"https://demo1-api.infd.jp/api/v1/wallet/payment_method/list/");
curl_setopt($ch, CURLOPT_POST, 1);
$vars = [];
curl_setopt($ch, CURLOPT_POSTFIELDS, $vars);  //Post Fields
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// $headers = [
//     'Cache-Control: no-cache',
//     'X-Wallet-OS: Android',
//     'X-Wallet-OS-Ver: 5.1',
//     'X-Wallet-OS-Level: 21',
//     'X-Wallet-Domain: resona',
//     'X-Wallet-App-Pkg: infcurion.wallet.server',
//     'X-Wallet-App-Ver: 1.00.00',
//     'Content-Type: application/json',
//     'Authorization: Bearer 2c0acf13e1b457863f65a74bde0de50a3cff583365b969c4b39a72bcb1d87f08',
//     'User-Agent: resona-wallet-app',
//     'OS: Android',
// ];
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