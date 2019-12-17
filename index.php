<?php include_once("assets/includes/head-menu.php")?>
<main class="container">
<h1 id="titulo-index">Gerar novo Pedido</h1>
    <div class="row d-flex justify-content-center align-items-center mb-5">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <form method="POST" action="">
                <label class="mt-3">Selecione o Cliente</label>
                <select class="custom-select">
                    <option selected disable>Escolha uma opção</option>
                    <option>Cliente 1</option>
                    <option>Cliente 2</option>
                    <option>Cliente 3</option>
                </select>
                <label class="mt-3">Selecione os produtos</label>
                <select class="custom-select">
                    <option selected disable>Escolha uma opção</option>
                    <option>Produto 1</option>
                    <option>Produto 2</option>
                    <option>Produto 3</option>
                </select>
                <label class="mt-3">Quantidade</label>
                <input  type="number" class="form-control col-4" placeholder="Insira a qtd do produto" />
                <button type="submit" name="" class="btn btn-outline-success d-flex justify-content-end mt-5">Adicionar Produto</button>
            </form>
        </div>
    </div>
    <!-- valor de cada produto, valor total, status, desconto -->
    <div class="row d-flex justify-content-center align-items-center mt-5">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <h4>Cliente : Cliente_Nome</h4>
            <table class="table table-striped table-light">
                <thead>
                    <tr>
                    <th scope="col">Item</th>
                    <th scope="col">Data</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>25/10/2019</td>
                        <td>Produto 1</td>
                        <td>5 quantidades</td>
                        <td>R$ 3,75</td>
                        <td>R$ 18,75</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>25/10/2019</td>
                        <td>Produto 2</td>
                        <td>5 quantidades</td>
                        <td>R$ 3,75</td>
                        <td>R$ 18,75</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>25/10/2019</td>
                        <td>Produto 3</td>
                        <td>5 quantidades</td>
                        <td>R$ 3,75</td>
                        <td>R$ 18,75</td>
                    </tr>
                    <tr>
                        <th>Desconto:</th>
                        <th><input type="text" name="desconto" class="form-control col-4 bg-ligth" value="1,25"/></th>
                        <th scope="row">Total:</th>
                        <th>R$ 10,00</th>
                    </tr>
                </tbody>
            </table>
            <button type="submit" name="" class="btn btn-outline-success d-flex justify-content-end mt-5 mb-5">Gerar o Pedido</button>
        </div>
    </div>
</main>