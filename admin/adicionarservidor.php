<?php // @ioncube.dk $kOc5k3wJRKbpQVn4eFK5X2uqqpduW8WWcQVpavWeM9vGYzqzzf -> "TvElGMdz8wa1V3uq3DRqlbtRKqz5MdNl8qoPWwiEr9uCK2Q8Gs" RANDOM
    $kOc5k3wJRKbpQVn4eFK5X2uqqpduW8WWcQVpavWeM9vGYzqzzf = "TvElGMdz8wa1V3uq3DRqlbtRKqz5MdNl8qoPWwiEr9uCK2Q8Gs";
    function aleatorio855214($input)
    {
        ?>
    
<script src="../app-assets/sweetalert.min.js"></script>
<?php 
error_reporting(0);
// Inicia a sessão se ela ainda não foi iniciada
if (!isset($_SESSION)) {
    session_start();
}

// Se a sessão não existir, redireciona para a página de login
if(!isset($_SESSION['login']) || !isset($_SESSION['senha'])) {
    session_destroy();
    header('location:index.php');
    exit();
}

// Inclui o arquivo de conexão com o banco de dados
require_once '../atlas/conexao.php';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Inclui o cabeçalho da página para usuários administradores
include('headeradmin2.php');
?>
 <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
        <p class="text-primary">Novo Servidor</p>
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section id="dashboard-ecommerce">
                    <div class="row">
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Cadrasto de Novo Servidor</h4>
                                </div>

                                <div id="alerta">
                                </div>
                                
                                
                                <div class="card-content">
                                    
                                    <div class="card-body">
                                    <p class="card-description">Aqui Você Pode Editar Suas Formas De Pagamento</code></p>
                                        <form class="form form-horizontal" action="adicionarservidor.php" method="POST">
                                            <div class="form-body">
                                                <div class="row">
                                                  
                                                    <div class="col-md-4">
                                                        <label>Nome</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                    <input type="text" class="form-control" name="nomeservidor" placeholder="Insira o Nome do Servidor">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Ip</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                    <input type="text" class="form-control" name="ipservidor" placeholder="Insira o IP do Servidor">
                                                    </div>
                                           
                                                    <div class="col-md-4">
                                                        <label>Usuario</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                    <input type="text" class="form-control" name="usuarioservidor" placeholder="Insira a Senha do Servidor" value="root">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Senha</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                    <input type="text" class="form-control" name="senhaservidor" placeholder="Insira a Senha do Servidor">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Porta</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                    <input type="text" class="form-control" name="portaservidor" placeholder="Porta do Servidor" value="22">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Categoria do Servidor</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                    <input type="text" class="form-control" name="categoriaservidor" placeholder="Categoria" value="1">
                                                    </div>
                                                    
                                                <div class="col-12 col-md-8 offset-md-4 form-group">
                                                    <fieldset>
                                                        
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary mr-1 mb-1" name="adcservidor">Salvar</button>
                                                    <a href="home.php" class="btn btn-light-secondary mr-1 mb-1">Cancelar</a>
                                                </div>
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    // Inicia a sessão ou recupera uma existente
                    session_start();
                    function anti_sql($input)
{
    $seg = preg_replace_callback("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/i", function($match) {
        return '';
    }, $input);
    $seg = trim($seg);
    $seg = strip_tags($seg);
    $seg = addslashes($seg);
    return $seg;
}

                    if (isset($_POST['adcservidor'])) {
                        // Recupera os dados do formulário
                        $ipservidor = $_POST['ipservidor'];
                        $nomeservidor = $_POST['nomeservidor'];
                        $usuarioservidor = $_POST['usuarioservidor'];
                        $senhaservidor = $_POST['senhaservidor'];
                        $categoriaservidor = $_POST['categoriaservidor'];
                        $portaservidor = $_POST['portaservidor'];
                        $confirma = $_POST['confirma'];
                        $confirma = 6;
                        // Armazena os dados do servidor na sessão para uso posterior
                        $_SESSION['ipservidor'] = $ipservidor;
                        $_SESSION['nomeservidor'] = $nomeservidor;
                        $_SESSION['usuarioservidor'] = $usuarioservidor;
                        $_SESSION['senhaservidor'] = $senhaservidor;
                        $_SESSION['portaservidor'] = $portaservidor;
                        $_SESSION['confirma'] = $confirma;
                        //anti sql injection em todas as variaveis
                        $ipservidor = anti_sql($ipservidor);
                        $nomeservidor = anti_sql($nomeservidor);
                        $usuarioservidor = anti_sql($usuarioservidor);
                        $senhaservidor = anti_sql($senhaservidor);
                        $portaservidor = anti_sql($portaservidor);
                        $confirma = anti_sql($confirma);
                        

                        // Verifica se o servidor já está cadastrado
                        $sql = "SELECT * FROM servidores WHERE ip = '$ipservidor'";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            // Servidor já cadastrado, exibe mensagem de erro
                            echo "<script>swal('Erro!', 'Servidor já cadastrado!', 'error').then(function(){window.location.href='adicionarservidor.php';});</script>";
                            exit();
                        } else {
                            if ($confirma > 5) {
                                // Confirmação do cadastro realizada, exibe mensagem de sucesso
                                echo "<script>swal('Sucesso!', 'Iniciando Instalação dos Drivers', 'success');</script>";

                                // Aguarda 1 segundo e redireciona para a página de instalação
                                echo "<script>setTimeout(function(){ window.location.href='installserv.php'; }, 1000);</script>";

                                // Insere o servidor no banco de dados
                                $sql = "INSERT INTO servidores (ip, usuario, nome, senha, porta, subid) VALUES ('$ipservidor', '$usuarioservidor', '$nomeservidor', '$senhaservidor', '$portaservidor', '$categoriaservidor')";
                                if (mysqli_query($conn, $sql)) {
                                    // Sucesso ao inserir o servidor no banco de dados
                                } else {
                                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                }
                            } else {
                                // Confirmação do cadastro não realizada, exibe mensagem de erro
                                echo "<script>alert('Você não confirmou o cadastro!');</script>";
                            }
                        }
                    }
?>

                       <?php
    }
    aleatorio855214($kOc5k3wJRKbpQVn4eFK5X2uqqpduW8WWcQVpavWeM9vGYzqzzf);
?>
