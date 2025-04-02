<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">

    <style>


body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

#app-container {
    width: 300px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
}
h2 {
    text-align: center;
    color: #4a148c;
}

input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
}

button {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    background-color: #4a148c;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}
button:hover {
    background-color: #6a1b9a;
}

a {
    color: #4a148c;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

button[type="button"] {
    background-color: #9c27b0;
    margin-top: 10pbody {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

#app-container {
    width: 300px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
}
h2 {
    text-align: center;
    color: #4a148c;
}

input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
}

button {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    background-color: #4a148c;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}
button:hover {
    background-color: #6a1b9a;
}

a {
    color: #4a148c;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

button[type="button"] {
    background-color: #9c27b0;
    margin-top: 10px;
}
button[type="button"]:hover {
    background-color: #7b1fa2;
}

.hidden {
    display: none;
}x;
}
button[type="button"]:hover {
    background-color: #7b1fa2;
}

.hidden {
    display: none;
}
    </style>
</head>
<body>
    <div id="app-container">
        <!-- Tela de Login -->
        <div id="login-form">
            <h2>Login</h2>
            <form>
                <input type="text" id="cpf" placeholder="CPF" required>
                <input type="password" id="senha" placeholder="Senha" required>
                <button type="submit">Entrar</button>
                <p>
                    <a href="javascript:void(0)" onclick="showRecoverPassword()">Recuperar Senha</a> | 
                    <a href="javascript:void(0)" onclick="showCreateAccount()">Criar Conta</a>
                </p>
            </form>
        </div>

        <!-- Tela de Recuperação de Senha -->
        <div id="recuperar-senha-form" class="hidden">
            <h2>Recuperar Senha</h2>
            <form>
                <input type="text" id="cpf-recuperar" placeholder="Digite seu CPF" required>
                <button type="submit">Enviar Código</button>
                <button type="button" onclick="showLogin()">Voltar</button>
            </form>
        </div>

        <!-- Tela de Redefinir Senha -->
        <div id="redefinir-senha-form" class="hidden">
            <h2>Redefinir Senha</h2>
            <form>
                <input type="password" id="nova-senha" placeholder="Nova Senha" required>
                <input type="password" id="confirmar-senha" placeholder="Confirmar Senha" required>
                <button type="submit">Enviar</button>
                <button type="button" onclick="showLogin()">Voltar para Login</button>
            </form>
        </div>

        <!-- Tela de Criar Conta -->
        <div id="criar-conta-form" class="hidden">
            <h2>Criar Conta</h2>
            <form>
                <input type="text" id="nome" placeholder="Nome Completo" required>
                <input type="text" id="cpf-criar" placeholder="CPF" required>
               <input type="text" id="email-criar" placeholder="Email" required>
                <input type="text" id="fone" placeholder="Telefone" required>
                <input type="password" id="senha-criar" placeholder="Senha" required>
                <input type="password" id="confirmar-senha-criar" placeholder="Confirmar Senha" required>
                <button type="submit">Cadastrar</button>
                <button type="button" onclick="showLogin()">Voltar</button>
            </form>
        </div>
    </div>

    <script>
        // Funções para alternar entre as telas

function showLogin() {
    hideAllForms();
    document.getElementById("login-form").classList.remove("hidden");
}

function showRecoverPassword() {
    hideAllForms();
    document.getElementById("recuperar-senha-form").classList.remove("hidden");
}

function showCreateAccount() {
    hideAllForms();
    document.getElementById("criar-conta-form").classList.remove("hidden");
}

function showResetPassword() {
    hideAllForms();
    document.getElementById("redefinir-senha-form").classList.remove("hidden");
}

// Função para esconder todas as telas
function hideAllForms() {
    document.getElementById("login-form").classList.add("hidden");
    document.getElementById("recuperar-senha-form").classList.add("hidden");
    document.getElementById("redefinir-senha-form").classList.add("hidden");
    document.getElementById("criar-conta-form").classList.add("hidden");
}

// Iniciar com a tela de login
showLogin();
    </script>
</body>
</html>



