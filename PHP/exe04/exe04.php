<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Questão 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card" style="width: 600px;">
            <div class="card-body">
                <h1 class="card-title text-center">Percentual de Faturamento por Estado</h1>
                <?php
                // Valores de faturamento por estado
                $faturamento = [
                    'SP' => 67836.43,
                    'RJ' => 36678.66,
                    'MG' => 29229.88,
                    'ES' => 27165.48,
                    'Outros' => 19849.53
                ];

                // Calcula o faturamento total
                $total = array_sum($faturamento);

                // Calcula o percentual de cada estado
                $percentuais = array_map(function ($valor) use ($total) {
                    return ($valor / $total) * 100;
                }, $faturamento);

                // Exibe os resultados
                echo '<table class="table">';
                echo '<thead><tr><th>Estado</th><th>Faturamento (R$)</th><th>Percentual (%)</th></tr></thead>';
                echo '<tbody>';
                foreach ($faturamento as $estado => $valor) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($estado) . '</td>';
                    echo '<td>R$ ' . number_format($valor, 2, ',', '.') . '</td>';
                    echo '<td>' . number_format($percentuais[$estado], 2, ',', '.') . '%</td>';
                    echo '</tr>';
                }
                echo '</tbody>';
                echo '</table>';
                ?>

                <!-- Botão Voltar -->
                <div class="text-center mt-4">
                    <a href="../index.php" class="btn btn-success">Voltar ao Índice</a>
                </div>

            </div>
        </div>
    </div>

    <!-- Script do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>