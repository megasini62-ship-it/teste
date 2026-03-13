<?php // @ioncube.dk $kOc5k3wJRKbpQVn4eFK5X2uqqpduW8WWcQVpavWeM9vGYzqzzf -> "TvElGMdz8wa1V3uq3DRqlbtRKqz5MdNl8qoPWwiEr9uCK2Q8Gs" RANDOM
    $kOc5k3wJRKbpQVn4eFK5X2uqqpduW8WWcQVpavWeM9vGYzqzzf = "TvElGMdz8wa1V3uq3DRqlbtRKqz5MdNl8qoPWwiEr9uCK2Q8Gs";
    function aleatorio839611($input)
    {
        ?>
    


<?php
    
    session_start();
    error_reporting(0);
    include('atlas/conexao.php');
ini_set('memory_limit', '-1');

//se senha nao existir
if (!isset($_SESSION['senhaatualizar'])) {
    header('Location: index.php');
    exit;
}else{
    if ($_POST['versao'] == 'ultima') {
        $url = 'https://atlaspainel.shop/atualizacao3.zip';
    }elseif ($_POST['versao'] == '3.8.6') {
        $url = 'https://raw.githubusercontent.com/LucasBonny/atlas/main/3.8.6/atualizacao3.zip';
    }elseif ($_POST['versao'] == '4.4.2') {
        $url = 'https://raw.githubusercontent.com/LucasBonny/atlas/main/4.4.2/atualizacao3.zip';
    }
    $zip = file_get_contents($url);
    file_put_contents('atualizacao3.zip', $zip);

    $zip = new ZipArchive;
    $res = $zip->open('atualizacao3.zip');
     if ($res === TRUE) {
        //extrair no diretorio atual
        $zip->extractTo('./');
      $zip->close();
    } else {
        echo 'failed';
    }
    unlink('atualizacao3.zip'); 
}
echo 'Atualizado com sucesso!';


?>
                       <?php
    }
    aleatorio839611($kOc5k3wJRKbpQVn4eFK5X2uqqpduW8WWcQVpavWeM9vGYzqzzf);
?>
