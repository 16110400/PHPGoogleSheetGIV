<?php
global $message;
    
if (isset($_POST["data"])) {
        $message = "<div class='alert alert-danger' 
        role='alert'>Warning! Please check your input</div>";
} else {

    $data = $_POST["data"];

// Operasi CREATE
$rangeCreate = 'Sheet';
$create = [
    [$data]
];

$body = new Google_Service_Sheets_ValueRange([
    'values' => $create
]);

$params = [
    'valueInputOption' => 'RAW'
];

$insert = "insertDataOption=INSERT_ROWS";

$result = $service->spreadsheets_values
->append($spreadsheetId, $rangeCreate, $body, $params, $insert);

$message = "<div class='alert alert-success' 
        role='alert'>Data Successfuly Sent to Googlesheet </div>";
}
