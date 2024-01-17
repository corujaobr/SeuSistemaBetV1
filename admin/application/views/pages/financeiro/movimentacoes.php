<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="container mt-5">
        <div class="card">
            <div class="card-header">
                Movimentações
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Cliente</th>
                            <th>Método</th>
                            <th>Status</th>
                            <th>Registrado</th>
                            <th>Pago</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($transacoes_saque as $transacao) { ?>
                            <tr>
                                <td><?php echo $transacao->nome_usuario; ?></td>
                                <td><?php echo $transacao->tipo; ?></td>
                                <td><?php echo $transacao->status; ?></td>
                                <td><?php echo $transacao->data_hora; ?></td>
                                <td>
                                    <?php if ($transacao->status === 'pago') { ?>
                                        <span class="badge bg-success">Pago</span>
                                    <?php } else { ?>
                                        <span class="badge bg-danger">Não Pago</span>
                                    <?php } ?>
                                </td>
                                <td><?php echo $transacao->valor; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>