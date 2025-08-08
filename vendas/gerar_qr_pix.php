<?php
require_once __DIR__ . '/../vendor/autoload.php';

use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

// Parâmetros recebidos
$chavePix = 'seu-email@pix.com.br'; // sua chave real Pix
$nomeRecebedor = 'Bonanza Transportes';
$cidade = 'Sao Lourenco';
$valor = number_format($_GET['valor'] ?? 0, 2, '.', '');
$txid = $_GET['txid'] ?? uniqid('BON');

// Função para gerar payload Pix (simples, com Copia e Cola)
function gerarPayloadPix($chave, $nome, $cidade, $valor, $txid) {
    return "000201"
         . "26360014BR.GOV.BCB.PIX"
         . "0114" . strlen($chave) . $chave
         . "52040000"
         . "5303986"
         . "540" . str_pad(strlen($valor), 2, '0', STR_PAD_LEFT) . $valor
         . "5802BR"
         . "5913" . str_pad(substr($nome, 0, 13), 13)
         . "6009" . str_pad(substr($cidade, 0, 9), 9)
         . "62070503***"
         . "6304";
}

$payload = gerarPayloadPix($chavePix, $nomeRecebedor, $cidade, $valor, $txid);

// Retorna apenas o código Pix, se solicitado
if (isset($_GET['raw']) && $_GET['raw'] === '1') {
    header('Content-Type: text/plain; charset=UTF-8');
    echo $payload;
    exit;
}

// Geração do QR Code
$options = new QROptions([
    'outputType' => QRCode::OUTPUT_IMAGE_PNG,
    'eccLevel' => QRCode::ECC_L,
    'scale' => 6,
]);

header('Content-Type: image/png');
echo (new QRCode($options))->render($payload);