<?php include_once("assets/includes/head-menu-porto.php")?>
<main class="container">
    <h1 id="titulo-index">Cadastrar novo representante</h1>
    <form method="post" action="">
    <div class="row mt-5">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="form-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" class="form-control" id="nome" aria-describedby="nome" placeholder="Digite o nome">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="form-group">
                    <label for="e-mail">E-mail</label>
                    <input type="email" class="form-control" id="e-mail" placeholder="Digite o e-mail">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" placeholder="Digite o cpf">
                </div>
            </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="form-group">
                <label for="cep">Cep</label>
                <input type="text" class="form-control" id="cep" placeholder="Digite o CEP">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" aria-describedby="endereco" placeholder="Digite o endereço do cliente">
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="form-group">
                <label for="numero">Número</label>
                <input type="text" class="form-control" id="numero" aria-describedby="numero" placeholder="Digite o Número">
            </div>
        </div>
  
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="form-group">
                    <label for="bairro">Bairro</label>
                    <input type="text" class="form-control" id="bairro" aria-describedby="bairro" placeholder="Digite o bairro">
                </div>
            </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="cidade" aria-describedby="cidade" placeholder="Digite a cidade">
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="form-group">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" id="estado" aria-describedby="estado" placeholder="Digite o estado">
            </div>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="form-group">
                    <label for="registro">Registro</label>
                    <input type="text" class="form-control" id="registro" aria-describedby="registro" placeholder="Digite o registro">
                </div>
            </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" aria-describedby="senha" placeholder="Digite a senha">
            </div>
        </div>
    </div>
            <button type="submit" name="" class="btn btn-info">Cadastrar</button>
        </form>
    </div>
</main>