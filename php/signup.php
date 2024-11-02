<?php include 'head.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/signup.css">
    <script src="../js/signup.js"></script>
    <title>Cadastrar-se | TicketMaster</title>
</head>
<body>
    <!--Luigi: Verifica se o usuário está logado, se sim, encamin ha ele à pagina de perfil-->
    <?php include 'verify_session.php';?>
    <div id="loading-screen">
        <h2>Carregando...</h2>
    </div>
    <div class="stars-container">
        <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
    </div>
    <div class="animation-container">
    <div class="form-container">
        <form action="./db_write.php" method="post" class="form">
            <div class="wrapper">
                <a class="logo-link" href="../index.php">TicketMaster</a>
                <h1 class="signup-title">Inscrever-se</h1>
                    <label class="signup-label" for="username">
                        <span>Nome de usuário</span>
                        <input type="text" id="username" name="username" class="input" required autocomplete="username">
                    </label>
                    <label class="signup-label" for="cpf">
                        <span>CPF</span>
                        <input type="text" name="cpf" class="input" required autocomplete="123.456.789-12">
                    </label>
                    <label class="signup-label" for="cpf">
                        <span id="span-date">Data de Nascimento</span>
                        <input type="date" name="birthday" class="input" required>
                    </label>
                    <label class="signup-label" for="email">
                        <span>E-mail</span>
                        <input type="email" name="email" class="input" required autocomplete="email">
                    </label>
                    <label class="signup-label" for="password">
                        <span>Senha</span>
                        <input type="password" name="password" class="input" required autocomplete="123456">
                    </label>
                    <label class="signup-label" for="confirm-password">
                        <span>Confirme a senha</span>
                        <input type="password" name="confirm-password" id="confirm-password" class="input" required autocomplete="123456">
                        <span>
                    </label>
            </div>
            <div class="bottom-wrapper">
                <button type="submit" name="submit" class="signup-button" disabled>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M11.293 4.707 17.586 11H4v2h13.586l-6.293 6.293 1.414 1.414L21.414 12l-8.707-8.707-1.414 1.414z"/></svg>
                </button>
                <a href="#" class="signup-link">Não consegue inscrever-se?</a>
                <a href="./login.php" class="signup-link">Entrar</a>
            </div>  
        </form>
    </div>
</div>
    <form action="db_write.php" method="POST">
        Estado Civil:
        <select name="estado_civil" required>
            <option value="">Selecione</option>
            <option value="solteiro">Solteiro</option>
            <option value="casado">Casado</option>
            <option value="divorciado">Divorciado</option>
            <option value="viuvo">Viúvo</option>
        </select></br>
        Estado:
        <select name="estado" required>
            <option value="">Selecione um estado</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select></br>
        Gênero:
        <input type="radio" name="genero" value="masculino" required>Masculino
        <input type="radio" name="genero" value="feminino">Feminino</br>

        <input type="submit" name="botao1" value="Enviar">
    </form>
</body>
</html>
