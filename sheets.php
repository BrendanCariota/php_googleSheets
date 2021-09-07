<?php

require __DIR__ . '/vendor/autoload.php';

//Reading data from spreadsheet.
$client = new \Google_Client();
$client->setApplicationName('Google Sheets and PHP');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . '/credentials.json');

$service = new Google_Service_Sheets($client);

$spreadsheetId = '1UKQu_1YS65BFOU-fgbIQKwsOp7tkAW5MsbHtTn9_hKA';
$range = 'Sheet1';
$values = [
    ["rep", "KY", 1, "Democrat", "Cariota", "Brendan"],
];
$body = new Google_Service_Sheets_ValueRange([
    'values' => $values
]);
$params = [
    'valueInputOption' => 'RAW'
];
$insert = [
    "insertDataOption" => "INSERT_ROWS"
];
/*
$result = $service->spreadsheets_values->append(
    $spreadsheetId,
    $range,
    $body,
    $params,
    $insert
);
*/