// --- Função 1: Validação de cadastro ---

/*
Função responsável por validar o formulário de cadastro
antes de enviar os dados
*/
function criarConta() {

  /*
  getElementById:
  - Pega elementos do HTML pelo ID

  .value:
  - Pega o valor digitado no input

  trim():
  - Remove espaços antes e depois
  */
  const nome = document.getElementById("nome").value.trim();
  const email = document.getElementById("email").value.trim();
  const senha = document.getElementById("senha").value;
  const confirmarSenha = document.getElementById("confirmarSenha").value;

  /*
  Elemento onde será exibida a mensagem para o usuário
  */
  const msg = document.getElementById("mensagemCadastro");

  /*
  Validação 1:
  Verifica se algum campo está vazio
  */
  if (!nome || !email || !senha || !confirmarSenha) {

    /*
    textContent:
    - Define o texto dentro do elemento HTML
    */
    msg.textContent = "Preencha todos os campos!";

    /*
    style.color:
    - Altera a cor do texto
    */
    msg.style.color = "red";

    /*
    return false:
    - Impede o envio do formulário
    */
    return false;
  }

  /*
  Validação 2:
  Verifica se as senhas são iguais
  */
  if (senha !== confirmarSenha) {

    msg.textContent = "As senhas não coincidem!";
    msg.style.color = "red";
    return false;
  }

  /*
  Se tudo estiver correto:
  */
  msg.textContent = "Conta criada com sucesso!";
  msg.style.color = "green";

  /*
  reset():
  - Limpa todos os campos do formulário
  */
  document.getElementById("formCadastro").reset();

  /*
  Impede envio real (mantém na página)
  */
  return false;
}


// --- Função 2: Carrossel simples ---

/*
Array com os caminhos das imagens
*/
const imagens = [
  "img/gelo.png",
  "img/sombra.png",
  "img/tempestade.png",
  "img/tita.png"
];

/*
Variável que controla qual imagem está sendo exibida
*/
let indice = 0;


/*
Função para mudar imagem do carrossel

Parâmetro:
- direcao → pode ser 1 (avançar) ou -1 (voltar)
*/
function mudarImagem(direcao) {

  /*
  Atualiza o índice com base na direção
  */
  indice += direcao;

  /*
  Se passar do último, volta para o início
  */
  if (indice >= imagens.length) indice = 0;

  /*
  Se for menor que 0, vai para o último
  */
  if (indice < 0) indice = imagens.length - 1;

  /*
  Troca a imagem no HTML

  .src:
  - Define o caminho da imagem exibida
  */
  document.getElementById("imgCarrossel").src = imagens[indice];
}


// --- Função 3: autoplay do carrossel ---

/*
setInterval:
- Executa uma função repetidamente a cada X milissegundos

() => mudarImagem(1):
- Função que avança a imagem automaticamente

5000:
- Tempo em milissegundos (5000ms = 5 segundos)
*/
setInterval(() => mudarImagem(1), 5000);


/*
Resumo geral:

- criarConta():
  → valida formulário (campos + senha)
  → mostra mensagens para o usuário

- mudarImagem():
  → controla o carrossel manual

- setInterval():
  → faz o carrossel rodar automaticamente

Conceitos usados:
- DOM (getElementById)
- Eventos
- Arrays
- Condições (if)
- Funções
- setInterval (execução automática)
*/