<?php

include 'sheets.php';

$name = $_POST['name'];
$score = $_POST['score'];

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
$result = $service->spreadsheets_values->append(
    $spreadsheetId,
    $range,
    $body,
    $params,
    $insert
);

header('Location: index.php');

?>