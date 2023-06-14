
const linkSobreNos = document.getElementById('link-sobre-nos');
const linkAgendar = document.getElementById('link-agendar');
const linkConsultar = document.getElementById('link-consultar');
const linkLogin = document.getElementById('link-login');
const linkloginAdmin = document.getElementById('link-loginAdmin');
const linkadmin = document.getElementById('link-admin');

linkSobreNos.addEventListener('click', function(event) {
  event.preventDefault(); 
  window.location.href = 'sobre.php'; 
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


  