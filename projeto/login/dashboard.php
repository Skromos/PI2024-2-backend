<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Doação e Recebimento de Órgãos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #166aaf;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 20px;
            padding: 20px;
        }

        .card {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h3 {
            color: #333;
            margin-bottom: 10px;
        }

        .large {
            grid-column: span 2;
        }

        .chart-placeholder {
            width: 100%;
            height: 200px;
            background-color: #e0e0e0;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #888;
        }

        .footer {
            background-color: #166aaf;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        @media (max-width: 900px) {
            .container {
                grid-template-columns: 1fr;
            }

            .large {
                grid-column: span 1;
            }
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Dashboard de Doação e Recebimento de Órgãos</h1>
    </div>

    <div class="container">
        <!-- Card: Doações Realizadas -->
        <div class="card">
            <h3>Total de Doações Realizadas</h3>
            <p><strong>150</strong> órgãos doados</p>
        </div>
        <div class="card">
            <h3>Total de Recebimentos Realizados</h3>
            <p><strong>120</strong> órgãos recebidos</p>
        </div>
        <div class="card">
            <h3>Doadores Cadastrados</h3>
            <p><strong>350</strong> doadores registrados</p>
        </div>


        <div class="card">
            <h3>Receptores Cadastrados</h3>
            <p><strong>200</strong> receptores aguardando</p>
        </div>
        <div class="card large">
            <h3>Doações por Tipo de Órgão</h3>
            <div class="chart-placeholder">
                <p>[Gráfico de Doações por Tipo de Órgão]</p>
            </div>
        </div>

        <div class="card large">
            <h3>Recebimentos por Região</h3>
            <div class="chart-placeholder">
                <p>[Gráfico de Recebimentos por Região]</p>
            </div>
        </div>
        <div class="card">
            <h3>Órgãos mais Doado</h3>
            <p>Rins: <strong>45</strong></p>
            <p>Corações: <strong>30</strong></p>
        </div>
        <div class="card">
            <h3>Tempo Médio de Espera</h3>
            <p>Rins: <strong>6 meses</strong></p>
            <p>Fígado: <strong>4 meses</strong></p>
        </div>

        <div class="card large">
            <h3>Taxa de Sucesso das Cirurgias</h3>
            <div class="chart-placeholder">
                <p>[Gráfico da Taxa de Sucesso]</p>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>© 2024 - Sistema de Doação de Órgãos</p>
    </div>

</body>
</html>
