// Seleciona os links do menu
const linkSobreNos = document.getElementById('link-sobre-nos');
const linkAgendar = document.getElementById('link-agendar');
const linkConsultar = document.getElementById('link-consultar');
const linkLogin = document.getElementById('link-login');
const linkloginAdmin = document.getElementById('link-loginAdmin');
const linkadmin = document.getElementById('link-admin');


// Adiciona um listener para o evento de clique em cada link do menu
linkSobreNos.addEventListener('click', function(event) {
  event.preventDefault(); // Impede o comportamento padrão do link (não recarrega a página)
  window.location.href = 'sobre.php'; // Redireciona para a página sobre-nos.php
});

linkAgendar.addEventListener('click', function(event) {
  event.preventDefault(); 
  window.location.href = 'agendar.php';
});

linkConsultar.addEventListener('click', function(event) {
  event.preventDefault(); 
  window.location.href = 'consultar.php';
});

linkLogin.addEventListener('click', function(event) {
  event.preventDefault(); 
  window.location.href = 'login.php';
});

linkadmin.addEventListener('click', function(event) {
  event.preventDefault(); 
  window.location.href = 'admin.php';
});

linkloginAdmin.addEventListener('click', function(event) {
  event.preventDefault(); 
  window.location.href = 'loginAdmin.php';
});


  