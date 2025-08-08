document.addEventListener('DOMContentLoaded', function() {
  // Elementos do formulário
  const cidadeSelect = document.getElementById('cidade');
  const quantidadeInput = document.getElementById('quantidade');
  const entregaContainer = document.getElementById('entrega-container');
  const valorTotalText = document.getElementById('valor_total');
  const horarioEntrega = document.getElementById('horario_entrega');
  const dataEntrega = document.getElementById('data_entrega');
  
  const finalizarCompraBtn = document.getElementById('finalizarCompra');
  const contatoWhatsBtn = document.getElementById('contatoWhats');
  
  const localEntregaContainer = document.getElementById('local-entrega-container');
  const localEntregaSelect = document.getElementById('local_entrega');
  
  const dataEntregaContainer = document.getElementById('data-entrega-container');
  const quantidadeContainer = document.getElementById('quantidade-container');
  
  // Preços por cidade
  const precosPorCidade = {
    "Serra do Vale": 5.0,
    "Águas de Aurora": 6.35,
    "Vale Encantado": 5.35,
    "Estudante": 5.0
  };
  
  // Atualiza o valor total
  function atualizarValorTotal() {
    const cidade = cidadeSelect.value;
    const quantidade = parseInt(quantidadeInput.value) || 0; // Garante número
    
    if (cidade && quantidade > 0 && precosPorCidade[cidade]) {
      const precoUnitario = precosPorCidade[cidade];
      const total = (precoUnitario * quantidade).toFixed(2);
      valorTotalText.textContent = `Valor total: R$ ${total.replace('.', ',')}`;
      document.getElementById('valor_final').value = total;
    } else {
      valorTotalText.textContent = `Valor total: R$ 0,00`;
      document.getElementById('valor_final').value = '';
    }
  }
  
  // Função para mostrar/ocultar elementos
  function toggleElement(element, show) {
    if (show) {
      element.classList.remove('hidden');
    } else {
      element.classList.add('hidden');
    }
  }
  
  // Evento de mudança na cidade
  cidadeSelect.addEventListener('change', function() {
    const cidade = this.value;
    
    // Reset inicial - esconde todos os elementos condicionais
    toggleElement(entregaContainer, false);
    toggleElement(localEntregaContainer, false);
    toggleElement(dataEntregaContainer, false);
    toggleElement(quantidadeContainer, false);
    
    // Remove atributos required
    horarioEntrega.removeAttribute('required');
    localEntregaSelect.removeAttribute('required');
    dataEntrega.removeAttribute('required');
    quantidadeInput.removeAttribute('required');
    
    // Limpa valores
    horarioEntrega.value = '';
    localEntregaSelect.value = '';
    
    // Lógica para cada cidade
    if (cidade === 'Serra do Vale') {
      toggleElement(contatoWhatsBtn, true);
      toggleElement(finalizarCompraBtn, false);
    } else if (cidade) {
      toggleElement(contatoWhatsBtn, false);
      toggleElement(finalizarCompraBtn, true);
      toggleElement(dataEntregaContainer, true);
      toggleElement(quantidadeContainer, true);
      dataEntrega.setAttribute('required', 'required');
      quantidadeInput.setAttribute('required', 'required');
      
      // Regras específicas por cidade
      if (cidade === 'Águas de Aurora' || cidade === 'Estudante') {
        toggleElement(entregaContainer, true);
        horarioEntrega.setAttribute('required', 'required');
      }
      
      if (cidade === 'Vale Encantado') {
        toggleElement(localEntregaContainer, true);
        localEntregaSelect.setAttribute('required', 'required');
      }
    }
    
    atualizarValorTotal();
  });
  
  // Evento de mudança na quantidade
  quantidadeInput.addEventListener('input', atualizarValorTotal);
  
  // Inicialização
  cidadeSelect.dispatchEvent(new Event('change'));
});