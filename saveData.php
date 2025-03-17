<?php
// Imposta gli header per consentire le richieste AJAX
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Ottieni i dati inviati
$data = json_decode(file_get_contents("php://input"), true);

// Verifica che i dati siano validi
if (isset($data['players'])) {
    // Percorso del file data.json
    $file = 'data.json';
    
    // Scrivi i dati nel file
    $result = file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
    
    if ($result !== false) {
        // Risposta di successo
        echo json_encode(["message" => "Dati salvati con successo"]);
    } else {
        // Errore nella scrittura del file
        http_response_code(500);
        echo json_encode(["message" => "Errore nel salvataggio dei dati"]);
    }
} else {
    // Dati non validi
    http_response_code(400);
    echo json_encode(["message" => "Dati non validi"]);
}
?>