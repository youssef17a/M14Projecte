<?php
if (isset($_GET['character_id'])) {
    $characterId = $_GET['character_id'];

    $url = 'https://rickandmortyapi.com/api/character/' . $characterId;
    $response = file_get_contents($url);

    if ($response) {
        $character = json_decode($response, true);

        $pdfContent = "Nombre: " . $character['name'] . "\n";
        $pdfContent .= "Especie: " . $character['species'] . "\n";
        $pdfContent .= "Género: " . $character['gender'] . "\n";

        require_once('tcpdf/tcpdf.php');
        $pdf = new TCPDF();
        $pdf->AddPage();
        $pdf->SetFont('Helvetica', '', 12);
        $pdf->Write(0, $pdfContent);
        $pdf->Output($character['name'] . '.pdf', 'D');
        exit;
    }
}
