<?php include_once("assets/includes/head-menu-porto.php")?>
<main class="container">
<h1 id="titulo-index">Gerir os Pedidos</h1>
    <div class="row d-flex justify-content-center align-items-center mb-5">
        <table class="table table-striped mt-5">
            <thead>
                <tr>
                    <th scope="col">Número Pedido</th>
                    <th scope="col">Data</th>
                    <th scope="col">Representante</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" title="Ver pedido"><a href="ver_pedidos.php">0001</a></th>
                    <td>25/10/2019</td>
                    <td>Representante 1</td>
                    <td>Cliente 1</td>
                    <td>Em atendimento</td>
                </tr>
                <tr>
                    <th scope="row" title="Ver pedido"><a href="ver_pedidos.php">0002</a></th>
                    <td>25/10/2019</td>
                    <td>Representante 2</td>
                    <td>Cliente 2</td>
                    <td>Aberto</td>
                </tr>
                <tr>
                    <th scope="row" title="Ver pedido"><a href="ver_pedidos.php">0003</a></th>
                    <td>25/10/2019</td>
                    <td>Representante 3</td>
                    <td>Cliente 3</td>
                    <td>Concluído</td>
                </tr>
            </tbody>
        </table>
    </div>
</main>