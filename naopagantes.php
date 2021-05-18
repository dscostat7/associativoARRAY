<?php

$correntistas = ["Giovani", "João", "Maria", "Luis", "Luisa", "Rafael"];

$correntistasNaoPagantes = ["Luis", "Luisa", "Rafael"];

$correntistasPagantes = array_diff($correntistas, $correntistasNaoPagantes);

echo "<h1>Pagantes: </h1>";
foreach ($correntistasPagantes as $pagantes) {
    echo "<p>$pagantes</p>";
}