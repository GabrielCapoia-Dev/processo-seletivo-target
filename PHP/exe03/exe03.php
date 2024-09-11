<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Questão 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card" style="width: 500px;">
            <div class="card-body">
                <h1 class="card-title text-center">Faturamento Diário</h1>
                <form method="post" enctype="multipart/form-data" id="upload-form">
                    <div class="mb-3">
                        <label for="file" class="form-label">Carregar arquivo JSON:</label>
                        <input type="file" id="file" name="file" class="form-control" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Calcular</button>
                    </div>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['file'])) {
                    $file = $_FILES['file']['tmp_name'];
                    $data = json_decode(file_get_contents($file), true);

                    if (json_last_error() === JSON_ERROR_NONE) {
                        $values = array_values($data);
                        $filteredValues = array_filter($values, fn($v) => $v > 0);

                        $minValue = min($filteredValues);
                        $maxValue = max($filteredValues);
                        $average = array_sum($filteredValues) / count($filteredValues);
                        $aboveAverageCount = count(array_filter($filteredValues, fn($v) => $v > $average));

                        echo '<div class="mt-4">';
                        echo '<p><strong>Menor valor de faturamento:</strong> R$ ' . number_format($minValue, 2, ',', '.') . '</p>';
                        echo '<p><strong>Maior valor de faturamento:</strong> R$ ' . number_format($maxValue, 2, ',', '.') . '</p>';
                        echo '<p><strong>Número de dias acima da média:</strong> ' . $aboveAverageCount . '</p>';
                        echo '</div>';
                    } else {
                        echo '<div class="alert alert-danger mt-4" role="alert">Erro ao processar o arquivo JSON.</div>';
                    }
                }
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