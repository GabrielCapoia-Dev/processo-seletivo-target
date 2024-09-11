<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Questão 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card" style="width: 300px;">
            <div class="card-body">
                <h1 class="card-title text-center">Verificar Número de Fibonacci</h1>
                <form id="fibonacci-form">
                    <div class="form-group">
                        <label for="number">Informe um número:</label>
                        <input type="number" id="number" name="number" class="form-control form-control-sm" required>
                    </div>
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-sm">Verificar</button>
                        <br><br>
                        <a href="../index.php" class="btn btn-success">Voltar ao Índice</a>
                    </div>
                </form>
                <div id="result" class="mt-4"></div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('fibonacci-form').addEventListener('submit', function(event) {
            event.preventDefault();
            const number = parseInt(document.getElementById('number').value);
            let result = '';

            function isFibonacci(num) {
                if (num < 0) return false;
                let a = 0,
                    b = 1;
                while (a < num) {
                    let temp = a;
                    a = b;
                    b = temp + b;
                }
                return a === num;
            }

            if (isFibonacci(number)) {
                result = `O número ${number} pertence à sequência de Fibonacci.`;
            } else {
                result = `O número ${number} não pertence à sequência de Fibonacci.`;
            }

            document.getElementById('result').innerHTML = `<div class="alert alert-info" role="alert">${result}</div>`;
            document.getElementById('number').value = ''; // Limpar o campo de entrada
        });
    </script>

    <!-- Script do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>