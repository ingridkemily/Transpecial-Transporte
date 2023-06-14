# Transpecial
Site para o agendamento de transporte especial, inspirado no sistema de transporte de Sorocaba-SP.
Um projeto voltado ao agendamento do transporte especial, embasado na cidade de Sorocaba e suas necessidades.
O Site será voltado para público que utiliza o transporte especial, aqueles que não possuem condições  
financeiras para arcar com os altos custos de um transporte particular adaptado. Sendo uma ferramenta para colocar
em prática a inclusão social dessas pessoas, permitindo que elas tenham acesso a serviços básicos como saúde, educação e lazer com fácil acesso.

## Funcionalidades
- Praticidade para a Urbes e empresa contratada pela prefeitura.
- Agendamento de transporte.
- Consulta de agendamentos futuros.

## Pré-requisitos
1. Instalar o Visual Studio Code (caso não possua)
- Acesse o site oficial do Visual Studio Code em https://code.visualstudio.com/.
- Clique no botão "Download" para baixar o instalador do VS Code.
- Execute o instalador e siga as instruções para concluir a instalação

2. Configuração das extensões para execução de HTML, CSS e JavaScript no Visual Studio Code:
- Abra o Visual Studio Code.
- Na barra lateral esquerda, clique no ícone de extensões.
- Na caixa de pesquisa, digite "HTML" e pressione Enter.
- Serão exibidas várias extensões relacionadas a HTML. Selecione uma extensão popular e confiável, como "HTML Preview" ou "Live Server", e clique em "Instalar".
- Repita o mesmo processo para as extensões relacionadas a CSS e JavaScript que julgar necessário.
- Certifique-se de instalar extensões que possibilitem a execução e a visualização do código HTML, CSS e JavaScript no navegador.

2. Instalar o XAMPP:
- Acesse o site oficial do XAMPP em https://www.apachefriends.org/.
- Clique no botão "Download" para baixar o instalador do XAMPP.
- Execute o instalador e siga as instruções para concluir a instalação.

## Como rodar a aplicação
1. Abra o Visual Studio Code: Após instalar o Visual Studio Code, abra a IDE em seu computador.

2. Abra o projeto: No Visual Studio Code, vá em "File" (Arquivo) e selecione "Open Folder" (Abrir Pasta). Navegue até o diretório do projeto. No caso do projeto "Transpecial", o diretório raiz deve estar localizado em "C:\xampp\htdocs\transpecial-main". Se você instalou o XAMPP no disco local C, siga esse caminho para encontrar a pasta raiz do projeto.

3. Configuração do servidor local:
- Abra o painel de controle do XAMPP.
- Inicie os serviços do Apache e MySQL para criar um ambiente de desenvolvimento local.

4. Importe o arquivo SQL:
- Abra o seu navegador e digite "http://localhost/phpmyadmin" na barra de endereço. Isso abrirá a interface do phpMyAdmin.
- Faça login no phpMyAdmin utilizando as credenciais do seu servidor MySQL local, se necessário.
- Crie um novo banco de dados: Na página inicial do phpMyAdmin, clique em "Novo" no menu lateral esquerdo.
- Digite o nome do banco de dados como "TransPecial".
- Selecione a codificação padrão ("utf8mb4_unicode_ci").
- Clique em "Criar" para criar o novo banco de dados.
- Após criar o banco de dados, clique no nome dele no menu lateral esquerdo para selecioná-lo.
- Na página do banco de dados, clique na guia "Importar" na parte superior.
- Clique no botão "Escolher arquivo" e navegue até o local onde o arquivo "TransPecial.sql" está armazenado em seu computador.
- Selecione o arquivo "TransPecial.sql".
- Verifique se o formato de importação está definido como "SQL".
- Clique em "Importar" para importar o arquivo SQL para o banco de dados.

5. Estabelecendo a conexão:
- Abra o arquivo "connect.php" no projeto usando o Visual Studio Code.
- Verifique se as informações de conexão estão corretas, como o nome do servidor, usuário e senha do banco de dados. Se necessário, altere-os para corresponder às suas configurações locais do MySQL.

6. Abrir o projeto no servidor local:
- No navegador de sua preferência, digite o seguinte endereço na barra de endereços: "http://localhost/transpecial-main/index.php". 
- Pressione Enter.

## Desenvolvedores e contribuintes
1. Abra o Visual Studio
2. Na janela inicial, selecione Clonar um repositório
3. Insira ou digite a localização do repositório e, em seguida, selecione o botão Clonar
4. A partir dai é só rodar o código em seu desktop e realizar as alterações para contribuição

## Linguagens, ferramentas e IDE utilizadas 
No projeto do Site Transpecial, foram utilizadas as seguintes linguagens, ferramentas e IDEs:

Linguagens:
1. HTML: Utilizada para estruturar e criar os elementos da página web.
2. CSS: Utilizada para estilizar e dar uma aparência visual ao site.
3. JavaScript: Utilizada para adicionar interatividade e funcionalidades dinâmicas ao site.
4. PHP: Utilizada para processar os dados do formulário e interagir com o banco de dados.

Ferramentas:
1. XAMPP: Utilizado como ambiente de desenvolvimento local para executar o servidor Apache, MySQL e PHP.
2. Apache: Servidor web utilizado para hospedar e servir o site localmente.
3. MySQL: Sistema de gerenciamento de banco de dados utilizado para armazenar os dados relacionados aos agendamentos de ônibus.
4. phpMyAdmin: Interface web utilizada para gerenciar o banco de dados MySQL.
5. GitHub: Plataforma de hospedagem de código-fonte utilizada para versionamento e colaboração no projeto.

IDE (Ambiente de Desenvolvimento Integrado):
Visual Studio Code: Uma IDE popular e gratuita que oferece suporte a várias linguagens de programação, como HTML, CSS, JavaScript e PHP. O Visual Studio Code possui recursos úteis, como realce de sintaxe, depuração e extensibilidade, que auxiliam no desenvolvimento do projeto.

## Resolvendo problemas
iremos listar algumas dificuldades encontradas em nosso projeto e conforme forem resolvidas iremos atualizar esse documento.
- Como realizar um cadastro do usuário sem ferir as normas legais do município
- Atualização de senha devido ser algo relacionado a secretaria da cidadania e Urbes
- Aplicação do javascript devido a falta de conhecimentos 
- Conexão com o banco de dados

## Design
No projeto do Site Transpecial, aplicamos princípios de User Experience (UX) para garantir uma interação intuitiva e inclusiva. 
Considerando as necessidades especiais dos usuários, focamos em um design renovado e responsivo. 
Além disso, implementamos a mudança de cor dos botões ao passar o mouse para fornecer feedback visual claro. 
Nosso objetivo é oferecer uma experiência acessível, amigável e eficiente para todos os usuários.
Utilizamos uma paleta de cores vibrantes e harmoniosas para transmitir uma sensação de energia e confiança.
Adicionamos ícones e ilustrações personalizadas para tornar a navegação mais visual e agradável.

## Licença
MIT License

Copyright (c) 2023 MsC. Ponto e vírgula
Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.!


THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.


