
// FECHAR E ABRIR IMAGEM TURISMO 
// document.addEventListener('DOMContentLoaded', function () {
// function abrirModal(src) {
//     document.getElementById("modalImagem").style.display = "block";
//     document.getElementById("imagemExpandida").src = src;
//   }

//   function fecharModal() {
//     document.getElementById("modalImagem").style.display = "none";
//   }
// });

// 

// document.addEventListener("DOMContentLoaded", function () {
//   const galeria = document.getElementById("galeriaTurismo");
//   const imagens = Array.from(document.querySelectorAll('.turismo-img'));
//   let imagemAtual = 0;
//   let scrollIndex = 0;

  // Ao clicar em uma imagem da galeria
  // imagens.forEach((img, index) => {
  //   img.addEventListener('click', () => {
  //     imagemAtual = index;
  //     abrirModal(img.src); // Captura o caminho da imagem correta
  //   });
  // });

  // Abrir o modal
  // window.abrirModal = function (src) {
  //   document.getElementById("modalImagem").style.display = "block";
  //   document.getElementById("imagemExpandida").src = src;
  // }

  // Fechar o modal
  // window.fecharModal = function () {
  //   document.getElementById("modalImagem").style.display = "none";
  // }

  // Navegar entre imagens no modal
  // window.mudarImagem = function (direcao) {
  //   imagemAtual += direcao;
  //   if (imagemAtual < 0) imagemAtual = imagens.length - 1;
  //   if (imagemAtual >= imagens.length) imagemAtual = 0;

  //   document.getElementById("imagemExpandida").src = imagens[imagemAtual].src;
  // }

  // Navegar no carrossel (antes de abrir a imagem)
//   window.scrollGaleria = function (direcao) {
//     const item = galeria.querySelector(".item-galeria");
//     const itemWidth = item.offsetWidth + 20;

//     scrollIndex += direcao;

//     const maxScroll = galeria.scrollWidth - galeria.clientWidth;
//     const novoScroll = scrollIndex * itemWidth;

//     if (novoScroll < 0) scrollIndex = 0;
//     if (novoScroll > maxScroll) scrollIndex--;

//     galeria.scrollTo({
//       left: scrollIndex * itemWidth,
//       behavior: "smooth"
//     });
//   }
// });



// FECHAR E ABRIR IMAGEM TURISMO 

//  MENU TOGGLE

document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.getElementById("menu-toggle");
    const menu = document.getElementById("menu");

    toggle.addEventListener("click", function () {
      menu.classList.toggle("active"); // 🔥 Esta é a classe correta!
    });
});



//  MENU TOGGLE

// document.addEventListener('DOMContentLoaded', function () {
// function abrirModal(src) {
//   document.getElementById("imagemAmpliada").src = src;
//   document.getElementById("modalImagem").style.display = "block";
// }

// function fecharModal() {
//   document.getElementById("modalImagem").style.display = "none";
// }
// });

//  FAQ PERGUNTAS E RESPOSTAS
document.addEventListener('DOMContentLoaded', function () {
const questions = document.querySelectorAll('.faq-question');

  questions.forEach((btn) => {
    btn.addEventListener('click', () => {
      const answer = btn.nextElementSibling;
      const isOpen = answer.style.maxHeight;

      document.querySelectorAll('.faq-answer').forEach(el => el.style.maxHeight = null);

      if (!isOpen) {
        answer.style.maxHeight = answer.scrollHeight + "px";
      }
    });
  });
});

// Script responsavel por abrir as imagens dos horarios e muda a imagem

// document.addEventListener("DOMContentLoaded", function () {
//   const imagens = [
//     'img/horarios/HORARIOS_EXCEL_PIRANGUCU.jpg',
//     'img/horarios/HORARIOS_EXCEL_PIRANGUINHO.jpg',
//     'img/horarios/HORARIOS_EXCEL_SAO_LOURENCO.jpg'
//   ];

//   let imagemAtual = 0;

//   window.abrirModal = function (src) {
//     imagemAtual = imagens.indexOf(src);
//     document.getElementById("modalImagem").style.display = "block";
//     document.getElementById("imagemExpandida").src = imagens[imagemAtual];
//   }

//   window.fecharModal = function () {
//     document.getElementById("modalImagem").style.display = "none";
//   }

//   window.mudarImagem = function (direcao) {
//     imagemAtual += direcao;
//     if (imagemAtual < 0) imagemAtual = imagens.length - 1;
//     if (imagemAtual >= imagens.length) imagemAtual = 0;
//     document.getElementById("imagemExpandida").src = imagens[imagemAtual];
//   }
// });

// const observer = new IntersectionObserver((entries) => { 
//   entries.forEach(entry => {
//     if (entry.isIntersecting) {
//       entry.target.classList.add('aparecer');
//     }
//   });
// });

// const sectionHorarios = document.querySelector('.grade-horarios');
// const sectionPasses = document.querySelector('.passes');
// const sectionSobre = document.querySelector('.sobre-empresa'); // exemplo

// observer.observe(sectionHorarios);
// observer.observe(sectionPasses);
// observer.observe(sectionSobre);

  

document.addEventListener('DOMContentLoaded', function () {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visivel');
      }
    });
  }, {
    threshold: 0.3 // Quando 30% da imagem estiver visível
  });

  // Aqui está a diferença: anima todas as imagens com a classe animar-esquerda
  const imagensAnimadas = document.querySelectorAll('.animar-esquerda');
  imagensAnimadas.forEach(imagem => observer.observe(imagem));
});


document.addEventListener('DOMContentLoaded', function () {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visivel');
      }
    });
  }, {
    threshold: 0.2 // Ativa quando 20% do elemento estiver visível
  });

  // Observa todos os elementos que terão slide-in
  const elementosAnimados = document.querySelectorAll('.slide-top, .animar-esquerda');
  elementosAnimados.forEach(elemento => observer.observe(elemento));
});

function fecharModal(event) {
  // Impede que clicar na imagem feche o modal
  if (event && event.target.tagName === 'IMG') {
    return;
  }

  document.getElementById("modalImagem").style.display = "none";
}

let imagensModal = [
  'img/horarios/HORARIOS_EXCEL_MONTE_BELO_MOBILE.jpg',
  'img/horarios/HORARIOS_EXCEL_VALE_ENCANTADO.jpg',
  'img/horarios/HORARIOS_EXCEL_SERRA_DO_VALE_MOBILE.jpg'
];

let imagemAtual = 0;

function abrirModal(src) {
  imagemAtual = imagensModal.indexOf(src);
  document.getElementById("modalImagem").style.display = "block";
  document.getElementById("imagemExpandida").src = src;
}

function fecharModal(event) {
  // Fecha apenas se clicar diretamente no fundo do modal
  if (event.target.id === 'modalImagem') {
    document.getElementById("modalImagem").style.display = "none";
  }
}

function mudarImagem(direcao, event) {
  event.stopPropagation(); // 👉 Impede que o clique nas setas feche o modal

  imagemAtual += direcao;

  if (imagemAtual < 0) {
    imagemAtual = imagensModal.length - 1;
  } else if (imagemAtual >= imagensModal.length) {
    imagemAtual = 0;
  }

  document.getElementById("imagemExpandida").src = imagensModal[imagemAtual];
}

// Fechar o modal clicando no botão de fechar
document.querySelector('.fechar-modal').addEventListener('click', function (event) {
  event.stopPropagation(); // 👉 Impede que o clique no X feche pelo evento pai
  document.getElementById("modalImagem").style.display = "none";
});

let imagensVeiculos = [
  'img/onibus/onibus1.jpg',
  'img/onibus/onibus2.jpg',
  'img/onibus/onibus3.jpg',
  'img/onibus/onibus4.jpg',
];

let imagemAtualVeiculos = 0;

function abrirModalVeiculos(index) {
  imagemAtualVeiculos = index;
  document.getElementById("modalVeiculos").classList.remove('hidden');
  document.getElementById("imagemExpandidaVeiculos").src = imagensVeiculos[imagemAtualVeiculos];
}

function fecharModalVeiculos(event) {
  if (event.target.id === 'modalVeiculos' || event.target.classList.contains('fechar-modal-veiculos')) {
    document.getElementById("modalVeiculos").classList.add('hidden');
  }
}

function mudarImagemVeiculos(direcao, event) {
  event.stopPropagation();

  imagemAtualVeiculos += direcao;

  if (imagemAtualVeiculos < 0) imagemAtualVeiculos = imagensVeiculos.length - 1;
  if (imagemAtualVeiculos >= imagensVeiculos.length) imagemAtualVeiculos = 0;

  document.getElementById("imagemExpandidaVeiculos").src = imagensVeiculos[imagemAtualVeiculos];
}

// js para modal do saiba mais na sessao sobre 

// Função auto-executável para evitar vazamento de escopo
(function() {
  // Elementos do modal com prefixo único
  const modal = {
    overlay: document.getElementById('infoModal'),
    openBtn: document.getElementById('btnSaibaMais'),
    closeBtn: document.querySelector('.modal-close-btn')
  };

  // Verifica se os elementos existem
  if (!modal.overlay || !modal.openBtn || !modal.closeBtn) return;

  // Abre o modal
  modal.openBtn.addEventListener('click', function(e) {
    e.stopPropagation(); // Impede a propagação do evento
    modal.overlay.style.display = 'flex';
    document.body.style.overflow = 'hidden';
  });

  // Fecha o modal
  function closeModal() {
    modal.overlay.style.display = 'none';
    document.body.style.overflow = 'auto';
  }

  modal.closeBtn.addEventListener('click', closeModal);
  
  // Fecha ao clicar fora
  modal.overlay.addEventListener('click', function(e) {
    if (e.target === modal.overlay) {
      closeModal();
    }
  });

  // Fecha com ESC
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && modal.overlay.style.display === 'flex') {
      closeModal();
    }
  });
})();

// Modao para o fretamento 

// Função auto-executável para evitar vazamento de escopo
(function() {
  // Elementos do modal com prefixo único
  const modal = {
    overlay: document.getElementById('infoModalCars'),
    openBtn: document.getElementById('btnSaibaMaisCars'),
    closeBtn: document.querySelector('.modal-close-btn-cars')
  };

  // Verifica se os elementos existem
  if (!modal.overlay || !modal.openBtn || !modal.closeBtn) return;

  // Abre o modal
  modal.openBtn.addEventListener('click', function(e) {
    e.stopPropagation(); // Impede a propagação do evento
    modal.overlay.style.display = 'flex';
    document.body.style.overflow = 'hidden';
  });

  // Fecha o modal
  function closeModal() {
    modal.overlay.style.display = 'none';
    document.body.style.overflow = 'auto';
  }

  modal.closeBtn.addEventListener('click', closeModal);
  
  // Fecha ao clicar fora
  modal.overlay.addEventListener('click', function(e) {
    if (e.target === modal.overlay) {
      closeModal();
    }
  });

  // Fecha com ESC
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && modal.overlay.style.display === 'flex') {
      closeModal();
    }
  });
})();