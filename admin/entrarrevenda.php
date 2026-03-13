<?php // @ioncube.dk $kOc5k3wJRKbpQVn4eFK5X2uqqpduW8WWcQVpavWeM9vGYzqzzf -> "TvElGMdz8wa1V3uq3DRqlbtRKqz5MdNl8qoPWwiEr9uCK2Q8Gs" RANDOM
    $kOc5k3wJRKbpQVn4eFK5X2uqqpduW8WWcQVpavWeM9vGYzqzzf = "TvElGMdz8wa1V3uq3DRqlbtRKqz5MdNl8qoPWwiEr9uCK2Q8Gs";
    function aleatorio735520($input)
    {
        ?>
    
<?php
    session_start();
    include_once("../atlas/conexao.php");
    $conexao = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    $id = $_SESSION['identrarrevenda'];
    $sql = "SELECT * FROM accounts WHERE id = '$id'";
    $result = mysqli_query($conexao, $sql);
    $user_data = mysqli_fetch_array($result);
    
    //destrói as sessões existentes
    $_SESSION['login'] = $user_data['login'];
    $_SESSION['senha'] = $user_data['senha'];
    $_SESSION['iduser'] = $user_data['id'];
    $_SESSION['admin564154156'] = true;

    echo "<script>window.location.href='../home.php';</script>";
    ?>
                       <?php
    }
    aleatorio735520($kOc5k3wJRKbpQVn4eFK5X2uqqpduW8WWcQVpavWeM9vGYzqzzf);
?>
