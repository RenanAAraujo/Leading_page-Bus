
# 🚍 Viação ViaNova - Site Institucional e Sistema de Compra de Passes

## 📄 Descrição do Projeto
O site da **Viação ViaNova** é uma landing page com funcionalidades integradas para apresentar:
- Horários de transporte
- Frota de veículos
- Compra de passes online com geração automática de QR Code Pix
- Integração com WhatsApp para envio de comprovante
- Layout responsivo e carrossel de imagens

Este projeto proporciona uma experiência rápida e intuitiva para o usuário, centralizando **informações institucionais e serviços digitais** da empresa.

## 📂 Estrutura de Pastas

```
LEADING_PAGE_ONIBUS/
│
├── css/                  # Estilos do site
│   ├── compra_passes.css
│   ├── responsive.css
│   └── style.css
│
├── img/                  # Imagens organizadas
│   ├── horarios/
│   ├── ilustracoes/
│   ├── logo/
│   └── onibus/
│
├── includes/             # Componentes reutilizáveis
│   ├── conexao.php       # Conexão com o banco de dados
│   ├── footer.php        # Rodapé do site
│   └── header.php        # Cabeçalho do site
│
├── js/                   # Scripts JavaScript
│   ├── carousel.js       # Carrossel de imagens
│   └── script.js         # Scripts gerais
│
├── vendas/               # Páginas de venda e processamento
│   ├── compra_passes.html
│   ├── gerar_qr_pix.php  # Geração do código Pix Copia e Cola
│   ├── processa_compra.php
│   └── teste_qr.php
│
├── vendor/               # Gerenciador de dependências (Composer)
│
├── composer.json         # Configuração de pacotes PHP
├── composer.lock
├── index.html            # Página principal do site
├── phpinfo.php # Teste de ambiente PHP
└── README.md # Documentação do projeto
`

## ⁇ ️ Tecnologias Utilizadas

- **Frontend:** HTML5, CSS3, JavaScript
- **Back-end:** PHP 7+
- **Banco de Dados:** MySQL
- **Integração Pix:** API local de geração de QR Code Pix
- **Estilo Responsivo:** Flexbox, consultas de mídia

## 🚀 Funcionalidades

- ✅ Exibição de horários e informações de transporte
- ✅ Compra de passes por cidade, quantidade e preço calculado automatizado
- ✅ Seleção de dados via calendário (impede datas passadas)
- ✅ Campos dinâmicos no formulário:
  - Horário de entrega obrigatório para **Águas de Aurora**
  - Local de entrega obrigatório (Garagem/Guichê) para **Vale Encantado**
- ✅ Integração Pix com geração automática de código Copia e Cola
- ✅ Geração de TxID único para cada compra
- ✅ Integração com WhatsApp para meio de comprovante
- ✅ Carrossel de imagens da frota
- ✅ Layout adaptado para dispositivos móveis
- ✅ Componentes reutilizáveis (cabeçalho, rodapé, conexão)

## ✅ Validações do Sistema

- A **dados de entrega** não pode ser anterior aos dados atuais.
- Ó campo **Horário de entrega** é obrigatório apenas para uma cidade **Águas de Aurora**.
- Ó campo **Local de entrega (Garagem ou Guichê)** é obrigatório para as cidades **Vale Encantado**.
- O valor total é calculado automatizado conformar uma cidade e uma quantidade de passes.

## ⁇ ️ Como Executar o Projeto

1. Clone ou copie os arquivos para seu servidor local.
2. Configurar o banco de dados MySQL com uma tabela seguinte:
`sql
CRIAR COMPras_passes DE TABELA (
 ID INT AUTO_INCREMENT PRIMARY KEY,
 nome VARCHAR(100) NÃO NULO,
 cidade VARCHAR(50) NÃO NULA,
 quantidade INT NOT NULL,
 horario_entrega VARCHAR(10),
 data_entrega DATA NÃO NULA,
 local_entrega VARCHAR(20),
 valor_total DECIMAL(10,2) NÃO NULO,
 txid VARCHAR(50) NÃO NULO
);
`
3. Ajuste as credenciais do banco no arquivo `inclui/conexao.php`.
4. Executar o local localização através de um servidor (XAMPP, WAMP ou Apache).
5. Verifique se o arquivo `gerar_qr_pix.php` está operacional para a geração dos QR Codes Pix.

## 📱 Links e Contatos

- WhatsApp: 📱 (35) 99984-2822 
- E-mail: 📧 renanarauj5@gmail.com
- Desenvolvido por Renan Araújo
