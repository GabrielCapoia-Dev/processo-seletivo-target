<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Questão 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg p-4">
        <h1 class="text-center text-success">Resultado da Soma</h1>
        <p class="text-center">O valor final da variável SOMA é:</p>
        <div class="alert alert-success text-center" role="alert">
            <?php
            $INDICE = 13;
            $SOMA = 0;

            for ($K = 1; $K <= $INDICE; $K++) {
                $SOMA += $K;
            }

            echo $SOMA;
            ?>
        </div>

        <!-- Acordeão que mostra o código PHP e a explicação -->
        <div class="accordion mt-3" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Explicação detalhada
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <h5>Como o código funciona:</h5>
                        <p>O código PHP usa um laço <code>for</code> para somar todos os números de 1 até 13. A cada iteração, o valor de <code>$K</code> é somado à variável <code>$SOMA</code>. Veja abaixo o código e o processo:</p>
                        <pre><code>
                            $INDICE = 13;
                            $SOMA = 0;

                            for ($K = 1; $K <= $INDICE; $K++) {
                                $SOMA += $K;
                            }
                            echo $SOMA;
                        </code></pre>
                        <p>Explicando o laço <code>for</code>:</p>
                        <ul>
                            <li><strong>Inicialização:</strong> A variável <code>$K</code> começa com valor 1.</li>
                            <li><strong>Condição:</strong> O laço continua enquanto <code>$K</code> for menor ou igual a <code>$INDICE</code> (13).</li>
                            <li><strong>Incremento:</strong> A cada iteração, <code>$K</code> é incrementado em 1.</li>
                            <li><strong>Soma:</strong> A cada iteração, o valor de <code>$K</code> é adicionado a <code>$SOMA</code>.</li>
                        </ul>
                        <p>Ao final do laço, o valor de <code>$SOMA</code> será a soma de todos os números de 1 a 13, resultando em 91.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Botão Voltar -->
        <div class="text-center mt-4">
            <a href="../index.php" class="btn btn-success">Voltar ao Índice</a>
        </div>

    </div>



    <!-- Script do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>