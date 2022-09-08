<?php

//Operasi READ
    $rangeRead = 'Sheet!A2:A30';
    $response = $service->spreadsheets_values->get($spreadsheetId, $rangeRead);
    $values = $response->getValues();