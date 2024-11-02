<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
    /<font size="5"><a href="testaux">Home</a></font>/
		<font size="5"><a href="">Contato</a></font>/
		<font size="5"><a href="">Pedido</a></font>/                <!-- essa é a barra de navegação do nosso site, deixei os href vazios para colocar as paginas de todos os integrantes -->
		<font size="5"><a href="">Sobre</a></font>/                 <!-- O home pertence ao Luan, fiz um arquivo de teste para simular o home, pode tirar o "testaux" sem problema-->
		<font size="5"><a href="cadastro.php">Cadastrar</a></font>/ <!-- Minha responsabilidade era apenas o cadastro e o entrar -->
		<font size="5"><a href="entrar.php">Entrar</a></font>/
	<hr> <!--linha horizontal-->
    </header>
    
<div>
    <h3>Local:SP-São paulo</h3>
    <h3>Telefone:(11) 3566-6384</h3>
    <h3>Email:Contatos@EpicEvents.com</h3>

</div>
    <form action="" method="post">
    <h2>Formulário de Contato</h2>

    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" required placeholder="Seu nome"><br>
    <label for="Email">Email:</label>
    <input type="email" name="Email" id="Email" required placeholder="SeuEmail@Services.com"><br>
    <label for="tel">Telefone</label>
    <input type="tel" id="Telefone" name="Telefone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"placeholder="5511999999"><br>
    <label for="Assunto">Assunto:</label>
    <input type="text" name="Assunto" id="Assunto"><br>
    <label for="mesagem">mesagem:</label><br>
    <textarea name="mesagem" id="mesagem" rows="4" cols="50" placeholder="Escreva Sua mesagem aqui"></textarea><Br></Br>
    <button type="submit">Enviar</button>

    </form>
</body>
</html>