<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/calculadora.css') }}">
</head>
<body>

    <div class="calculator">
        <h2>💻 Calculadora</h2>

        <form method="POST" action="{{ route('calculadora.calcular') }}">
            @csrf

            <input type="number" name="numero1" placeholder="Primer número" step="any" required>
            <input type="number" name="numero2" placeholder="Segundo número" step="any" required>

            <select name="operacion" required>
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicación</option>
                <option value="division">División</option>
            </select>

            <button type="submit">Calcular</button>
        </form>

        @if(session('resultado') !== null)
            <div class="result">
                Resultado: {{ session('resultado') }}
            </div>
        @endif

        @if(session('error'))
            <div class="result" style="color: #ff5c5c;">
                {{ session('error') }}
            </div>
        @endif
    </div>

</body>
</html>
