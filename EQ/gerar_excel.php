<?php

session_start(); // Iniciar a sessão

// Limpar o buffer
ob_start();

// Incluir a conexão com BD
include_once './conexao.php';

// QUERY para recuperar os registros do banco de dados
if (!empty($_GET['query'])) {
    $query_usuarios = $_GET["query"];
} else {
    ?>

<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Executor de Querys</title>
    <link rel="shortcut icon" href="img/logo-icon-orange.png" type="image/x-icon">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">
    <!--CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">

    <!--JS Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <!-- Custom styles for this template -->
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/cover.css" rel="stylesheet">
</head>

<body style="background: url('css/img/gsh.jpg'); background-attachment: fixed;
  width: 100%;
  height: 100%;
  background-size: 100%;
  background-position: center;
  background-repeat: repeat-y;">
    <center>
        <img src="img/interrogacao.png" alt="" style="width: 500px; margin: 0;
        position: absolute;
        scale: none;
        top: 40%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%)">
        <label for="index.php" style="width: 500px; margin: 0;
        position: absolute;
        scale: none;
        top: 87%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
        color: #fff">
            <h1>Volte à página principal e preencha o campo de consulta.</h1>
        </label>
    </center>
</body>

</html>
<?php
    exit;
}

// Preparar a QUERY
$result_usuarios = $conn->prepare($query_usuarios);

// Executar a QUERY
$result_usuarios->execute();

// Acessa o IF quando encontrar registro no banco de dados
if(($result_usuarios) and ($result_usuarios->rowCount() != 0)){

    // Aceitar csv ou texto 
    header('Content-Type: text/csv; charset=utf-8');

    // Nome arquivo
    header('Content-Disposition: attachment; filename=arquivo.csv');

    // Gravar no buffer
    $resultado = fopen("php://output", 'w');

    // while($linha = fgetcsv($resultado, 0, ';')){
    //     echo $linha;
    // }

    // Criar o cabeçalho do Excel - Usar a função mb_convert_encoding para converter carateres especiais
    $cabecalho = [mb_convert_encoding('RESULTADO CONSULTA QUERY', 'ISO-8859-1', 'UTF-8')];

    // Escrever o cabeçalho no arquivo
    fputcsv($resultado, $cabecalho,';');

    // Ler os registros retornado do banco de dados
    while($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)){

        // Escrever o conteúdo no arquivo
        fputcsv($resultado, $row_usuario, ';');
    }

    // Fechar arquivo
    // fclose($resultado);
}else{ // Acessa O ELSE quando não encontrar nenhum registro no BD
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Nenhum dado encontrado!</p>";
    header("Location: index.php");
}