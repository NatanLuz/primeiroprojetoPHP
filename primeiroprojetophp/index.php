<?php

function perguntar($pergunta) {
    echo $pergunta . "\n";
    return readline();
}

$nome = perguntar("Escreva o seu nome:");
$idade = perguntar("Informe sua idade:");
$profissao = perguntar("Informe sua profissão:");

echo "Olá, {$nome}. Você tem {$idade} anos e trabalha como {$profissao}.\n";
?>
