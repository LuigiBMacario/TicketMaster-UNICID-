<?php
    session_start();
	$_SESSION["Pedido"] =1;
	if (isset($_SESSION["login"]) && $_SESSION["login"] == "s") {
		echo "Você já está logado " . $_SESSION["parahome"];
	
		
		if (isset($_SESSION["Pedido"])>0){
	
		echo"Imprimir Seu pedidos";
		}else{
		echo"<h2>Voce não tem pedidos</h2>
		<button type='button'>Ir compra ingresso</button>";
		}       
	}else{
		echo "<h2>Voce não esta Logado</h2>
		<button type='button'>Faça seu login</button>";
	}
	$_SESSION["Pedidos"] = [
		"Pedido 001" => [
			"id" => 1,
			"evento" => "Evento 1",
			"data" => "2024-10-20",
			"quantidade" => 2,
			"preco" => 50.00,
			"preco_total" => 100.00
		],
		"Pedido 002" => [
			"id" => 2,
			"evento" => "Evento 2",
			"data" => "2024-11-05",
			"quantidade" => 1,
			"preco" => 75.00,
			"preco_total" => 75.00
		],
		"Pedido 003" => [
			"id" => 3,
			"evento" => "Evento 3",
			"data" => "2024-12-01",
			"quantidade" => 5,
			"preco" => 20.00,
			"preco_total" => 100.00
		]
	];
	
// Imprimindo a tabela
echo "<table border='1'>";
echo "<tr>
        <th>ID</th>
        <th>Evento</th>
        <th>Data</th>
        <th>Quantidade</th>
        <th>Preço Unitário</th>
        <th>Preço Total</th>
        <th>Imprimir</th>
	
      </tr>";

foreach ($_SESSION["Pedidos"] as $_SESSION["Pedidos"] => $detalhes) {
    echo "<tr>";
    echo "<td>" . $detalhes['id'] . "</td>";
    echo "<td>" . $detalhes['evento'] . "</td>";
    echo "<td>" . $detalhes['data'] . "</td>";
    echo "<td>" . $detalhes['quantidade'] . "</td>";
    echo "<td>R$ " . number_format($detalhes['preco'], 2, ',', '.') . "</td>";
    echo "<td>R$ " . number_format($detalhes['preco_total'], 2, ',', '.') . "</td>";
	echo "<td><button type='button'>Imprimir</button></td>";
    echo "</tr>";
}

echo "</table>";

?>
<?php





?>




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
<table border="1" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th>ID do Pedido</th>
                <th>Evento</th>
                <th>Data</th>
                <th>Quantidade</th>
				<th>Preço</th>
                <th>Preço Total</th>
                <th>Imprimir</th>
            </tr>
        </thead>
        
    </table>

    <h2>Detalhes do Pedido</h2>
    <p>ID do Pedido: <strong>#001</strong></p>
    <p>Evento: <strong>Show de Rock</strong></p>
    <p>Data: <strong>25/10/2024</strong></p>
    <p>Quantidade: <strong>2 Ingressos</strong></p>
    <p>Preço Total: <strong>R$ 300,00</strong></p>
    <p>Status: <strong>Confirmado</strong></p>

    <h3>Endereço de Entrega</h3>
    <p>Rua das Flores, 123</p>
    <p>Cidade: São Paulo</p>
    <p>CEP: 01234-567</p>

</div>
</body>
</html>