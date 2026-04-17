<!-- 
A tag <main> representa o conteúdo principal da página.
Tudo que está dentro dela é o foco principal do site (neste caso, um formulário).
-->
<main>

    <!-- Título da página -->
    <h1>Formulário</h1>

    <!-- 
    A tag <form> cria um formulário para envio de dados.

    action="?abobora=tab":
    - Define para onde os dados serão enviados.
    - Aqui está passando um parâmetro na URL (abobora=tab).
    - Normalmente usado em PHP para decidir qual lógica executar.

    method="post":
    - Define que os dados serão enviados via POST (mais seguro que GET para dados sensíveis).
    -->
    <form action="?abobora=tab" method="post">

    <!-- Campo de nome -->
    <label for="nome">Nome: </label>

    <!-- 
    input type="text": campo de texto simples.
    name="nome": nome do campo (usado no backend para recuperar o valor).
    id="nome": conecta com o label.
    placeholder: texto de dica dentro do campo.
    aria-label: acessibilidade (leitores de tela).
    -->
    <input type="text" name="nome" id="nome" placeholder="Digite o seu nome" aria-label="nome"><br>


    <!-- Campo de e-mail -->
    <label for="email">E-mail: </label>

    <!-- 
    type="email": valida automaticamente formato de e-mail no navegador.
    -->
    <input type="email" name="email" id="email"><br>


    <!-- Campo de senha -->
    <label for="senha">Senha: </label>

    <!-- 
    type="password": oculta os caracteres digitados.
    -->
    <input type="password" name="senha" id="senha"><br>


    <!-- Confirmação de senha -->
    <label for="conf_senha">Confirmar Senha: </label>
    <input type="password" name="conf_senha" id="conf_senha"><br>


    <!-- Data de nascimento -->
    <label for="data_nasc">Data de Nascimento: </label>

    <!-- 
    type="date": permite selecionar uma data em um calendário.
    -->
    <input type="date" name="data_nasc" id="data_nasc"><br>


    <!-- Hora atual -->
    <label for="hora">Hora Atual: </label>

    <!-- 
    type="time": permite selecionar um horário.
    -->
    <input type="time" name="hora" id="hora"><br>


    <!-- Seleção de gênero -->
    <label for="genero">Genero: </label>

    <!-- 
    <select> cria uma lista suspensa (dropdown).
    name="genero": valor enviado ao backend.
    -->
    <select name="genero" id="genero">

        <!-- Cada <option> é uma opção da lista -->
        <option value="m">Masculino</option>
        <option value="f">Feminino</option>
        <option value="o">Outro</option>
    </select>

    <!-- Botão de envio -->
    <button type="submit">Enviar</button>

    </form>
</main>

<!-- 
Resumo geral:
- <form> coleta dados do usuário.
- method="post" envia os dados de forma mais segura.
- name="" é essencial para recuperar os dados no PHP ($_POST).
- Diferentes tipos de input ajudam na validação automática.
- action com parâmetro (?abobora=tab) permite controlar o backend.
-->