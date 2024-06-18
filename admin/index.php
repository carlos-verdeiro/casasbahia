<?php

try {

    if ($_GET['pass'] != 123456789) {
       
            header('location: ../');
          exit;
    }
} catch (PDOException $e) {
    echo json_encode(['error' => true, 'mensagem' => 'Erro no servidor: ' . $e->getMessage()]);
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>admin</title>
</head>

<body>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Email</th>
                <th scope="col">Senha</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $conn = new PDO('mysql:host=localhost;dbname=casasbahia', 'root', ''); //conexão e pa^rametros do banco
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//para receber erro
            
            try {

                $stmt = $conn->prepare("SELECT * FROM usuario");
                $stmt->execute();
                $usuarios = $stmt->fetchAll();
                foreach ($usuarios as $key => $value) {
                    echo "<tr>";
                    echo "<th scope='row'>";
                    echo $value['id'];
                    echo "</th>";
                    echo "<td>";
                    echo $value['email'];
                    echo "</td>";
                    echo "<td>";
                    echo $value['senha'];
                    echo "</td>";

                    echo "</tr>";

                }


            } catch (PDOException $e) {
                echo json_encode(['error' => true, 'mensagem' => 'Erro no servidor: ' . $e->getMessage()]);
            }

            ?>
        </tbody>
    </table>
</body>

</html>