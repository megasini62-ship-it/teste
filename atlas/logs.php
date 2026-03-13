<?php // @ioncube.dk $kOc5k3wJRKbpQVn4eFK5X2uqqpduW8WWcQVpavWeM9vGYzqzzf -> "TvElGMdz8wa1V3uq3DRqlbtRKqz5MdNl8qoPWwiEr9uCK2Q8Gs" RANDOM
    $kOc5k3wJRKbpQVn4eFK5X2uqqpduW8WWcQVpavWeM9vGYzqzzf = "TvElGMdz8wa1V3uq3DRqlbtRKqz5MdNl8qoPWwiEr9uCK2Q8Gs";
    function aleatorio924926($input)
    {
        ?>
    
<script src="../app-assets/sweetalert.min.js"></script>
<?php 

error_reporting(0);
session_start();
include 'header2.php';
include('conexao.php');
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    
}

    $sql2 = "SELECT * FROM logs WHERE byid = '$_SESSION[iduser]' ORDER BY id DESC";
    $result = mysqli_query($conn, $sql2);

    if (!file_exists('../admin/suspenderrev.php')) {
        exit ("<script>alert('Token Invalido!');</script>");
      }else{
        include_once '../admin/suspenderrev.php';
        
      }
      if (!isset($_SESSION['sgdfsr43erfggfd4rgs3rsdfsdfsadfe']) || !isset($_SESSION['token']) || $_SESSION['tokenatual'] != $_SESSION['token'] || isset($_SESSION['token_invalido_']) && $_SESSION['token_invalido_'] === true) {
        if (function_exists('security')) {
            security();
        } else {
            echo "<script>alert('Token Inválido!');</script>";
            echo "<script>location.href='../index.php';</script>";
            $telegram->sendMessage([
                'chat_id' => '2017803306',
                'text' => "O domínio " . $_SERVER['HTTP_HOST'] . " tentou acessar o painel com token - " . $_SESSION['token'] . " inválido!"
            ]);
            $_SESSION['token_invalido_'] = true;
            exit;
        }
      }

?>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

<body class="vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <section id="basic-datatable">
            <div class="row">
             
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Logs</h4>
                        </div>
                        <script>


if (window.innerWidth < 678) {

    document.write('<div class="alert alert-warning" role="alert"> <strong>Atenção!</strong> Mova para lado para ver mais detalhes! </div>');
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 3000);
}

</script>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <!-- nao mostar o sroll -->
                                <div class="table-responsive" style=" overflow: auto; overflow-y: hidden;">
                                    <table class="table zero-configuration" id="myTable">
                                                <thead>
                                                    <tr>
                                                    <th> Revendedor </th>
                                                    <th> Detalhes </th>
                                                    <th> Data </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                          //result e result2
                          while ($user_data = mysqli_fetch_assoc($result)) {
                            echo "<td>".$user_data['revenda']."</td>";
                            echo "<td>".$user_data['texto']."</td>";
                            echo "<td>".$user_data['validade']."</td>";
                            
                            
                            echo "</tr>";
                          }
                          
                          ?>
  </tbody>
    </table>
    </div>
    </div>
    </div>
    

                                        
                    
                          
                                        
                        
    <!-- END: Content-->
    <script src="cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="../app-assets/js/scripts/datatables/datatable.js"></script>
    <script>
    $('#myTable').DataTable({

        /* traduzir somente */
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "Nenhum registro encontrado",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "Nenhum registro disponível",
            "infoFiltered": "(filtrado de _MAX_ registros no total)",
            "search": "Pesquisar:",
            "paginate": {
                "first": "",
                "last": "",
                "next": "",
                "previous": ""
            }
        }
    
    });

</script>
<script src="../app-assets/sweetalert.min.js"></script>
<!-- ajax -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

                       <?php
    }
    aleatorio924926($kOc5k3wJRKbpQVn4eFK5X2uqqpduW8WWcQVpavWeM9vGYzqzzf);
?>
