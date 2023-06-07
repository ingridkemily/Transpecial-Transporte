function buscaCep() {
    let cep = document.getElementById('txtCep').value;
    if(cep !== ""){
        let url = "https://brasilapi.com.br/api/cep/v1/" + cep;

        let req = new XMLHttpRequest();
        req.open("GET", url);
        req.send();
        //tratar a resposta da requisição 
        req.onload = function() {
            if(req.status === 200){
                let endereco = JSON.parse(req.response);
                document.getElementById("txtRua").value = endereco.street;
                document.getElementById("txtBairro").value = endereco.neighborhood;
                document.getElementById("txtCidade").value = endereco.city;
                document.getElementById("txtEstado").value = endereco.state;
            }
            else if (req.status === 404){
                alert("CEP inválido");
            }       
            else{
                alert("Erro ao fazer requisição");
            } 

        }
    }

}

window.onload = function (){
    let txtCep = document.getElementById("txtCep");
    txtCep.addEventListener("blur", buscaCep);
}

// Função para gerar um ID único
function gerarIdUnico() {
    return Math.random().toString(36).substr(2, 9);
  }
  
  // Função para agendar a viagem
  function agendarViagem() {
    // Obter os valores dos campos do formulário
    const localDestino = document.getElementById('txtCep').value;
    const data = document.getElementById('data').value;
    const causa = document.querySelector('input[name="devweb"]:checked').value;
    const horarioIda = document.getElementById('ida').value;
    const horarioVolta = document.getElementById('volta').value;
  
    // Gerar um ID único para o agendamento
    const idAgendamento = gerarIdUnico();
  
    // Exibir o ID na tela com uma mensagem de aviso/alerta
    const mensagem = `Seu agendamento foi realizado com sucesso! O código de agendamento é: ${idAgendamento}. Anote-o para consultar ou cancelar essa viagem!`;
    alert(mensagem);
  
    // Limpar os campos do formulário
    document.getElementById('txtCep').value = '';
    document.getElementById('data').value = '';
    document.querySelector('input[name="devweb"]:checked').checked = false;
    document.getElementById('ida').value = '';
    document.getElementById('volta').value = '';
  }
  
  // Adicionar um evento de escuta para o envio do formulário
  const formAgendar = document.querySelector('form');
  formAgendar.addEventListener('submit', function(event) {
    event.preventDefault();
    agendarViagem();
  });
  