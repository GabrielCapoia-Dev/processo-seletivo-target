<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Questão 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card" style="width: 500px;">
            <div class="card-body">
                <h1 class="card-title text-center">Inversão de String</h1>
                <form method="post">
                    <div class="mb-3">
                        <label for="inputString" class="form-label">Digite uma string:</label>
                        <input type="text" id="inputString" name="inputString" class="form-control" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Inverter</button>
                    </div>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['inputString'])) {
                    $inputString = $_POST['inputString'];

                    // Função para inverter a string manualmente
                    function inverterString($str)
                    {
                        $inversao = '';
                        $tamanho = strlen($str);

                        for ($i = $tamanho - 1; $i >= 0; $i--) {
                            $inversao .= $str[$i];
                        }

                        return $inversao;
                    }

                    $stringInvertida = inverterString($inputString);

                    echo '<div class="mt-4">';
                    echo '<p><strong>String original:</strong> ' . htmlspecialchars($inputString) . '</p>';
                    echo '<p><strong>String invertida:</strong> ' . htmlspecialchars($stringInvertida) . '</p>';
                    echo '</div>';
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