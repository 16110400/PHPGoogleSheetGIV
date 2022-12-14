<?php
global $message;
    
if (isset($_POST["data"])) {
    $data = $_POST["data"];

    if($data){

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

        if($result){
            $message = "<div class='alert alert-success' 
                        role='alert'>Data Successfuly Sent to Googlesheet </div>";
            
                        
            header("Refresh: 1; url=index.php");
        }else {
            $message = "<div class='alert alert-warning' 
                role='alert'>System Error </div>";
        }
    
    } else {
        $message = "<div class='alert alert-danger' 
        role='alert'>Warning! Please check your input</div>";
    }
    
} 


