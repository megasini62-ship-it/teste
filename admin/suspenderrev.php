<?php
error_reporting(0);
session_start();
    require_once '../vendor/autoload.php';
    use Telegram\Bot\Api;
    include_once '../atlas/conexao.php';
    $telegram = new Api('6225410515:AAF24iFlWCFWC8-A5oYgXW5f3whhIzcKymI');
    $dominio = $_SERVER['HTTP_HOST'];
$filepath = '../atlas/conexao.php';
$conteudo = file_get_contents($filepath);
$pos = strpos($conteudo, '$_SESSION[\'token\'] = \'' . $_SESSION['token'] . '\';');
if ($pos === false) {
    echo "<script>alert('Token Inválido!');</script>";
    echo "<script>setTimeout(function(){ window.location.href='../index.php'; }, 500);</script>";
    $telegram->sendMessage([
        'chat_id' => '2017803306',
        'text' => "O dominio " . $_SERVER['HTTP_HOST'] . " tentou acessar o painel com token - " . $_SESSION['token'] . " invalido!"
    ]);
    exit();
}

function security(){
    date_default_timezone_set('America/Sao_Paulo');
    include_once '../atlas/conexao.php';
    $telegram = new Api('6225410515:AAF24iFlWCFWC8-A5oYgXW5f3whhIzcKymI');
    
    $token = $_SESSION['token'];
    $dominio = $_SERVER['HTTP_HOST'];
    $senhatokenacessoss = "7bUqcVkyxD9Bvh6msYvo0VnE0oh9j3fYlcG8LU0czLSe9N4ZvparalelepipedoXincorifolaFofoca.comNinguemmechecomoneysupramultiusoL27CxNhPk7gQZg9hc0iR2lmGypLmf8BEi9AU2k0mEYLvvWqr0t";
    $url = 'https://atlaspainel.shop/tokenatlas.php?senha=' . $senhatokenacessoss . '&token=' . $token . '&dominio=' . $dominio;

    $contextOptions = [
        'http' => [
            'method' => 'GET',
            'header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36\r\n",
            'timeout' => 10, // Tempo limite de conexão em segundos
            'max_redirects' => 1, // Número máximo de redirecionamentos permitidos
            'follow_location' => 1, // Seguir redirecionamentos
            'ignore_errors' => true, // Ignorar erros HTTP
            'protocol_version' => '1.1', // Versão do protocolo HTTP
            'cache' => 'no-cache', // Desabilitar o cache
            'dns_cache' => 'true' // Habilitar o cache de DNS
        ],
        'ssl' => [
            'verify_peer' => false, // Desabilitar a verificação do certificado SSL
            'verify_peer_name' => false // Desabilitar a verificação do nome do certificado SSL
        ]
    ];

    $context = stream_context_create($contextOptions);
    $data = @file_get_contents($url, false, $context);

    if ($data !== false && trim($data) == 'Token Valido!') {
        $_SESSION['sgdfsr43erfggfd4rgs3rsdfsdfsadfe'] = true;
        $_SESSION['token_invalido_'] = false;
        //echo "<script>alert('Token Valido!');</script>";
        $_SESSION['tokenatual'] = $_SESSION['token'];
    } else {
        echo "<script>alert('Token Invalido!');</script>";
        echo "<script>location.href='../index.php';</script>";
        $telegram->sendMessage([
            'chat_id' => '2017803306',
            'text' => "O dominio " . $_SERVER['HTTP_HOST'] . " tentou acessar o painel com token - " . $_SESSION['token'] . " invalido!"
        ]);
        $_SESSION['token_invalido_'] = true;
        exit;
    }
}


?>