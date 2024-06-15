<?php
require '../mydb/conexao.php';

$sql = "SELECT COUNT(c.id) AS contIDcat, c.nome AS categoria
        FROM produtos AS p
        JOIN categorias AS c ON p.id_categorias = c.id
        GROUP BY c.id
        ORDER BY contIDcat DESC
        LIMIT 3";

$resultado = $pdo->query($sql);

?>
