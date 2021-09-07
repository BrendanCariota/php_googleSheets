<?php

include 'sheets.php';

$name = $_GET['name'];

$range = 'Sheet1';
$values = [
    [$name, $score],
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
$result = $service->spreadsheets_values->batchUpdate(
    $spreadsheetId,
    $body
);

header('Location: index.php');

?>