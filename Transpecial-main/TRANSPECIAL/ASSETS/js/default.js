// Seleciona os links do menu
const linkSobreNos = document.getElementById('link-sobre-nos');
const linkAgendar = document.getElementById('link-agendar');
const linkConsultar = document.getElementById('link-consultar');
const linkLogin = document.getElementById('link-login');

// Adiciona um listener para o evento de clique em cada link do menu
linkSobreNos.addEventListener('click', function(event) {
  event.preventDefault(); // Impede o comportamento padrão do link (não recarrega a página)
  window.location.href = 'sobre.html'; // Redireciona para a página sobre-nos.html
});

linkAgendar.addEventListener('click', function(event) {
  event.preventDefault(); 
  window.location.href = 'agendar.html';
});

linkConsultar.addEventListener('click', function(event) {
  event.preventDefault(); 
  window.location.href = 'consultar.html';
});

linkLogin.addEventListener('click', function(event) {
  event.preventDefault(); 
  window.location.href = 'login.html';
});


  