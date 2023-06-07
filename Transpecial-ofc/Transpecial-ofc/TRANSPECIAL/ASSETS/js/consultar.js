// Função para consultar a viagem
function consultarViagem() {
  // Obter o valor do campo de texto
  const idViagem = document.getElementById('id').value;

  // Verificar se o campo de texto não está vazio
  if (idViagem.trim() === '') {
    alert('Por favor, digite o ID da viagem.');
    return;
  }

  // Simular a consulta da viagem pelo ID 
  const viagemEncontrada = {
    id: idViagem,
    status: 'Agendado',
    data: '25/05/2023',
    causa: 'Lazer',
    ida: '10:30',
    volta: '15:30',
    destino: 'Rua José Castilho'
  };

  // Exibir o resultado da consulta na tela
  const resultadoConsulta = document.getElementById('resultadoConsulta');
  resultadoConsulta.innerHTML = `
    <p>ID da viagem: ${viagemEncontrada.id}</p>
    <p>Status: ${viagemEncontrada.status}</p>
    <p>Data: ${viagemEncontrada.data}</p>
    <p>Causa: ${viagemEncontrada.causa}</p>
    <p>Ida: ${viagemEncontrada.ida}</p>
    <p>Volta: ${viagemEncontrada.volta}</p>
    <p>Destino: ${viagemEncontrada.destino}</p>
  `;

  // Limpar o campo de texto
  document.getElementById('id').value = '';
}
