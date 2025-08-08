<?php
require_once ('../includes/conexao.php');
echo '<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Confirmação de Compra - Via Nova</title>
  <link rel="stylesheet" href="../css/comprovante_compra.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<div class="comprovante_compra">
  <div class="container">';
  

// RECEBE DADOS
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome            = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $cidade          = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $quantidade      = filter_input(INPUT_POST, 'quantidade', FILTER_VALIDATE_INT);
    $horario_entrega = filter_input(INPUT_POST, 'horario_entrega', FILTER_SANITIZE_STRING);
    $data_entrega    = filter_input(INPUT_POST, 'data_entrega', FILTER_SANITIZE_STRING);
    $local_entrega   = filter_input(INPUT_POST, 'local_entrega', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $valor_final     = filter_input(INPUT_POST, 'valor_final', FILTER_VALIDATE_FLOAT);
    $txid            = uniqid('BON');

    $data_hoje = date('Y-m-d');

    if (!$data_entrega || $data_entrega < $data_hoje) {
        echo "<p>Erro: a data de entrega não pode ser anterior à data atual. <a href='compra_passes.html'>Voltar</a></p>";
        exit;
    }

    if (!$nome || !$cidade || $quantidade <= 0 || $valor_final <= 0) {
        echo "<p>Erro: dados inválidos. <a href='compra_passes.html'>Voltar</a></p>";
        exit;
    }

    if ($cidade === 'Águas de Aurora' && !$horario_entrega) {
        echo "<p>Erro: o campo 'Horário de entrega' é obrigatório para Águas de Aurora. <a href='compra_passes.html'>Voltar</a></p>";
        exit;
    }

    if (($cidade === 'Vale Encantado') && !$local_entrega) {
        echo "<p>Erro: o campo 'Local de entrega' é obrigatório para {$cidade}. <a href='compra_passes.html'>Voltar</a></p>";
        exit;
    }

    // INSERIR NO BANCO
    $stmt = $pdo->prepare("INSERT INTO compras_passes 
        (nome, cidade, quantidade, horario_entrega, data_entrega, local_entrega, valor_total, txid) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->execute([
        $nome,
        $cidade,
        $quantidade,
        $horario_entrega,
        $data_entrega,
        $local_entrega,
        $valor_final,
        $txid
    ]);




    // Gera código Pix Copia e Cola
    $codigoPix = file_get_contents("http://localhost/leading_page_onibus/vendas/gerar_qr_pix.php?valor={$valor_final}&txid={$txid}&raw=1");

    // Monta a mensagem do WhatsApp
    $mensagem = "Olá!%20Sou%20{$nome}%20e%20realizei%20uma%20compra%20de%20passes%20na%20Via Nova.%0A"
              . "Cidade:%20{$cidade}%0A"
              . "Quantidade:%20{$quantidade}%0A"
              . "Valor:%20R$" . number_format($valor_final, 2, ',', '.') . "%0A"
              . "Data%20de%20entrega:%20" . urlencode($data_entrega) . "%0A"
              . "TxID:%20{$txid}%0A"
              . ($cidade === 'Águas de Aurora' ? "Horário%20de%20entrega:%20{$horario_entrega}%0A" : "")
              . "Segue%20meu%20comprovante%20Pix.";

    $link_whatsapp = "https://wa.me/55XXXXXXXX?text={$mensagem}";
?>
<div class="main-container">
  <div class="form-card">
    <h2>Dados da compra</h2>
    
    <div class="dados-compra">
      <div class="dado-item">
        <span class="dado-label">Nome:</span>
        <span class="dado-valor"><?= $nome ?></span>
      </div>
      
      <div class="dado-item">
        <span class="dado-label">Cidade:</span>
        <span class="dado-valor"><?= $cidade ?></span>
      </div>
      
      <div class="dado-item">
        <span class="dado-label">Quantidade:</span>
        <span class="dado-valor"><?= $quantidade ?></span>
      </div>
      
      <div class="dado-item destaque">
        <span class="dado-label">Valor total:</span>
        <span class="dado-valor">R$ <?= number_format($valor_final, 2, ',', '.') ?></span>
      </div>
      
      <div class="dado-item">
        <span class="dado-label">Data de entrega:</span>
        <span class="dado-valor"><?= date("d/m/Y", strtotime($data_entrega)) ?></span>
      </div>

      <?php if ($cidade === 'Águas de Aurora'): ?>
      <div class="dado-item">
        <span class="dado-label">Horário de entrega:</span>
        <span class="dado-valor"><?= $horario_entrega ?></span>
      </div>
      <?php endif; ?>

      <?php if ($cidade === 'Vale Encantado'): ?>
      <div class="dado-item">
        <span class="dado-label">Local de entrega:</span>
        <span class="dado-valor"><?= $local_entrega ?></span>
      </div>
      <?php endif; ?>
    </div>

    <div class="secao-pagamento">
      <h3><i class="fas fa-qrcode"></i> Pagamento via Pix</h3>
      
      <div class="pix-info">
        <div class="pix-item">
          <span class="pix-label">Chave Pix (CNPJ):</span>
          <div class="pix-valor-container">
          <span class="pix-valor" id="cnpjPix">XX.XXX.XXX/XXXX-XX</span>
          <button class="btn-copiar" onclick="copiarCNPJ()">
            <i class="far fa-copy"></i> Copiar
          </button>
        </div>
        </div>
        
        <div class="pix-item">
          <span class="pix-label">TxID (referência):</span>
          <span class="pix-valor"><?= $txid ?></span>
        </div>
      </div>
    </div>

    <div class="secao-comprovante">
      <h3><i class="fas fa-paper-plane"></i> Enviar comprovante</h3>
      <a href="<?= $link_whatsapp ?>" target="_blank" class="btn-whatsapp">
        <i class="fab fa-whatsapp"></i> Enviar pelo WhatsApp
      </a>
    </div>

    <div class="acoes-footer">
      <a href="compra_passes.html" class="btn-cancelar">
        <i class="fas fa-times"></i> Cancelar compra
      </a>
    </div>
  </div>
</div>

    <script>
      function copiarPix() {
        const area = document.getElementById("codigoPix");
        area.select();
        document.execCommand("copy");
        alert("Código Pix copiado para a área de transferência!");
      }

   
  function copiarPix() {
    const area = document.getElementById("codigoPix");
    area.select();
    document.execCommand("copy");
    alert("Código Pix copiado para a área de transferência!");
  }

  function copiarCNPJ() {
    const cnpj = document.getElementById("cnpjPix").innerText;
    const tempInput = document.createElement("input");
    tempInput.value = cnpj;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand("copy");
    document.body.removeChild(tempInput);
    alert("CNPJ copiado para a área de transferência!");
  }

function copiarCNPJ() {
  const cnpj = document.getElementById('cnpjPix').innerText;
  navigator.clipboard.writeText(cnpj).then(() => {
    alert('CNPJ copiado para a área de transferência!');
  }).catch(err => {
    console.error('Erro ao copiar: ', err);
  });
}
    </script>

<?php
} else {
    header("Location: compra_passes.html");
    exit;
}
?>
</div>
</div>
</body>
</html>
