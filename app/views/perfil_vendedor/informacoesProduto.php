<?php require_once "indexperfil.php"; ?>

<div id="page-wrapper">
    <!-- Page Content -->

    <div id="page-inner" class="container">

        <div class="row">

            <div class="col-md-6 col-sm-12">
                <div class="thumbnail">
                    <a href="#"><img class="card-img-top" src="http://www.azzaboutique.com.br/image/cache/data/blazer%20chic-600x600.jpg" alt=""></a>

                </div>
                <h3 class="ui horizontal divider header"><i class="tag icon"></i>Descrição</h3>
                <div class="panel panel-primary">

                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                    </div>


                </div>




            </div>

            <div class="col-md-5" style="background: rgba(173, 216, 230, 0.55);">

                    <h2 style="color: #0a256a; margin-top: 20px"><?= $produto->nome; ?></h2>
                    <h3>Referência: <?= $produto->referencia; ?></h3>
                    <h3 style="color: #0A0A0A">Preço:<?= $produto->preco; ?></h3>
                    <h3 style="color: #0a256a">Tamanho:</h3>
                <div><h4><?= $produto->tamanho; ?></h4></div>

                <h3 style="color: #0a256a">Cor:</h3>
                <div><h4><?= $produto->cor; ?></h4></div>
                    <h3 style="color: #0a256a">Quantidade:</h3>
                <div><h4><?= $produto->quantidade; ?></h4></div>
                <br><br>


                <div>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                </div>




            </div>

        </div>


    </div>



    <!-- /. PAGE WRAPPER  -->
</div>

<?php require_once "rodape.php"; ?>