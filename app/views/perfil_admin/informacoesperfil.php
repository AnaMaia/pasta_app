<?php require_once "indexperfil.php";

?>

<div id="page-wrapper">
    <div id="page-inner" class="container">
        <a class="btn btn-primary" href="editaradmin.php"><i class="fa fa-edit "></i> Editar</a>

        <a class="btn btn-danger" style="background-color: #ba2a1d" href="http://localhost/tcc/app/controllers/admin_controller.php?acao=excluir&id_usuario=<?= $_SESSION['id_user'];?>">Excluir conta</a>


        <!-- Page Content -->


        <div class="col-md-6 col-sm-4" style="margin-left: 250px; margin-top: 100px">
            <div class="panel panel-primary" >
                <div class="panel-heading">
                    Informações
                </div>
                <div class="panel-footer">
                    Nome:  <?= $admin->getNome(); ?>
                </div>

                <div class="panel-footer">
                    Email: <?= $admin->getEmail(); ?>
                </div>

                <div class="panel-footer">
                    Telefone: <?= $admin->telefone; ?>
                </div>

                <div class="panel-footer">
                    CNPJ: <?php echo $admin->cnpj; ?>
                </div>

                <div class="panel-footer">
                    Razão Social: <?php echo $admin->razao_social; ?>
                </div>

                <div class="panel-footer">
                    Nome Fantasia: <?php echo $admin->nome_fantasia; ?>
                </div>

            </div>
        </div>


        <!-- /. PAGE WRAPPER  -->
    </div>


    <?php require_once "rodape.php"; ?>


