// let currentIndex = 0;
// const slides = document.querySelectorAll('.slide');
// const totalSlides = slides.length;

// function showSlide(index) {
//   if (index < 0) {
//     currentIndex = totalSlides - 1;
//   } else if (index >= totalSlides) {
//     currentIndex = 0;
//   } else {
//     currentIndex = index;
//   }

//   const translateValue = -currentIndex * 100 + '%';
//   document.querySelector('.slider-container').style.transform = `translateX(${translateValue})`;
// }

// // Adicione botões ou outra lógica para navegar pelos slides
// //
// // VER MAIS

// document.addEventListener("DOMContentLoaded", function () {
//   const gallery = document.getElementById("carousel-produtos");
//   const verMaisBtn = document.getElementById("verMaisBtn");

//   let offset = 0; // Offset para controle da consulta ao banco de dados

//   // Função para carregar mais fotos
//   function carregarMaisFotos() {
//       // Substitua o código abaixo pela lógica real de consulta ao banco de dados
//       const novasFotos = [
//           "foto1.jpg",
//           "foto2.jpg",
//           // Adicione mais fotos conforme necessário
//       ];

//       // Adicionar novas fotos à galeria
//       novasFotos.forEach((fotoSrc) => {
//           const img = document.createElement("img");
//           img.src = fotoSrc;
//           img.classList.add("photo");
//           carousel-produtos.appendChild(img);
//       });

//       // Incrementar o offset para a próxima consulta ao banco de dados
//       offset += novasFotos.length;
//   }

//   // Evento de clique no botão "Ver Mais"
//   verMaisBtn.addEventListener("click", carregarMaisFotos);

//   // Carregar as primeiras fotos
//   carregarMaisFotos();
// });
