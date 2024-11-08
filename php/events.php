<?php
// Informações dos eventos
$eventos = array(
    array(
        "nome" => "Americas Challengers",
        "descricao" => "O grande torneio continental tier 2 de LoL. Com paiN Gaming e Vivo Keyd Stars.",
        "disponivel" => true,
        "link" => "americaschallengers.php",
        "valor" => 50
    ),
    array(
        "nome" => "Free Fire World Series",
        "descricao" => "Mundial de Free Fire no Brasil. Em busca do Trimundial.",
        "disponivel" => true,
        "link" => "evento2.php",
        "valor" => 100
    ),
    array(
        "nome" => "IEM Rio 2024",
        "descricao" => "O CS2 volta ao brasil com tudo! Será que esse ano o Brasil leva o título?",
        "disponivel" => true,
        "link" => "evento1.php",
        "valor" => 200
    ),
    array(
        "nome" => "LTA 2025",
        "descricao" => "Garanta o seu ingresso para o primeiro split de 2025 em São Paulo!",
        "disponivel" => true,
        "link" => "evento1.php",
        "valor" => 300
    ),
    array(
        "nome" => "Worlds 2024",
        "descricao" => "O maior torneio de eSports do mundo, garanta já o seu ingresso!",
        "disponivel" => true,
        "link" => "worlds2024.php",
        "valor" => 1200
    ),
);

// Exibir os eventos lado a lado
foreach ($eventos as $evento) {
    echo "<button class='events'data-nome='" . $evento['nome'] . "' data-descricao='" . $evento['descricao'] . "' data-link='" . $evento['link'] . "' data-valor='" . $evento['valor'] ."'>";
    echo "<div class='img-placeholder'>";
    echo "<img src='./media/images/" . strtolower(str_replace(" ", "_", $evento['nome'])) . ".jpg' alt='" . $evento['nome'] . "'>";
    echo "</div>";
    echo "<h2>" . $evento['nome'] . "</h2>";
    echo "<p>" . $evento['descricao'] . "</p>";
    echo "</button>";
}
?>
