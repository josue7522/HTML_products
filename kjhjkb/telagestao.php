<!DOCTYPE html>
<html>
<head>
    <style>
        /* Estilos para a tabela */
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        /* Estilos para os diferentes status */
        h2 {
            margin-top: 30px;
            font-size: 22px;
            text-transform: uppercase;
        }

        .aguardando {
            color: #007bff;
        }

        .em-preparo {
            color: #ff9800;
        }

        .saiu-para-entrega {
            color: #4caf50;
        }

        .entregue {
            color: #757575;
        }

        /* Estilos adicionais */
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .status-label {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: bold;
        }

        .status-label.aguardando {
            background-color: #007bff;
            color: white;
        }

        .status-label.em-preparo {
            background-color: #ff9800;
            color: white;
        }

        .status-label.saiu-para-entrega {
            background-color: #4caf50;
            color: white;
        }

        .status-label.entregue {
            background-color: #757575;
            color: white;
        }

        .edit-button {
            padding: 8px 12px;
            border-radius: 4px;
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 14px;
            margin-right: 8px;
        }

        .edit-button2 {
            padding: 8px 12px;
            border-radius: 4px;
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        .edit-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Dados dos pedidos
        $pedidos = array(
            array(
                'numero' => '#Pedido1',
                'status' => 'Aguardando',
                'cliente' => 'João Silva',
                'endereco' => 'Rua A, 123',
                'pagamento' => 'Cartão de crédito',
                'valor' => 'R$ 100,00'
            ),
            array(
                'numero' => '#Pedido2',
                'status' => 'Em preparo',
                'cliente' => 'Maria Santos',
                'endereco' => 'Av. B, 456',
                'pagamento' => 'Transferência bancária',
                'valor' => 'R$ 50,00'
            ),
            array(
                'numero' => '#Pedido3',
                'status' => 'Saiu para entrega',
                'cliente' => 'Carlos Oliveira',
                'endereco' => 'Rua C, 789',
                'pagamento' => 'Dinheiro',
                'valor' => 'R$ 75,00'
            ),
            array(
                'numero' => '#Pedido4',
                'status' => 'Em Preparo',
                'cliente' => 'Carlos Oliveira',
                'endereco' => 'Rua C, 789',
                'pagamento' => 'Dinheiro',
                'valor' => 'R$ 75,00'
            ),
            // Adicione mais pedidos aqui
        );

        // Função para exibir uma tabela de pedidos
        function exibirTabelaPedidos($status, $pedidos) {
            echo "<h2 class='$status'>$status</h2>";
            echo "<table>";
            echo "<tr><th>Número do Pedido</th><th>Cliente</th><th>Endereço</th><th>Forma de Pagamento</th><th>Valor</th><th>Ações</th></tr>";

            foreach ($pedidos as $pedido) {
                if ($pedido['status'] == $status) {
                    echo "<tr>";
                    echo "<td>" . $pedido['numero'] . "</td>";
                    echo "<td>" . $pedido['cliente'] . "</td>";
                    echo "<td>" . $pedido['endereco'] . "</td>";
                    echo "<td>" . $pedido['pagamento'] . "</td>";
                    echo "<td>" . $pedido['valor'] . "</td>";
                    echo "<td>";
                    echo "<button class='edit-button'>Editar</button>";
                    echo "<button class='edit-button2'>Aguardando</button>";
                    echo "</td>";
                    echo "</tr>";
                }
            }

            echo "</table>";
        }

        // Exibir as tabelas para cada status
        exibirTabelaPedidos('Aguardando', $pedidos);
        exibirTabelaPedidos('Em preparo', $pedidos);
        exibirTabelaPedidos('Saiu para entrega', $pedidos);
        ?>
    </div>
</body>
</html>