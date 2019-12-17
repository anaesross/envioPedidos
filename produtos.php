<?php include_once("assets/includes/head-menu-porto.php")?>
<main class="container">
    <h1 id="titulo-index">Cadastrar novo produto</h1>
    <form method="post" action="">
    <div class="row mt-5">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" id="descricao" aria-describedby="descricao" placeholder="Descrição do Produto">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="form-group">
                    <label for="unidade">Unidade</label>
                    <input type="text" class="form-control" id="unidade" placeholder="Unidade do produto">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="form-group">
                    <label for="valor">Valor</label>
                    <input type="text" class="form-control" id="valor" placeholder="Digite o valor do produto">
                </div>
            </div>
    </div>
            <button type="submit" name="" class="btn btn-info">Cadastrar</button>
        </form>
    </div>
</main>