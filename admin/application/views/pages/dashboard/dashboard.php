<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Estatísticas</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          </div>
        </div>
      </div>
        <div class="row" id="dashboard-admin">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="media p-3">
                                    <div class="media-body">
                                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Lucro 24H</span>
                                        <h2 class="mb-0">R$0</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="media p-3">
                                    <div class="media-body">
                                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Lucro 7D</span>
                                        <h2 class="mb-0">R$0</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="media p-3">
                                    <div class="media-body">
                                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Lucro 1M</span>
                                        <h2 class="mb-0">R$0</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="media p-3">
                                    <div class="media-body">
                                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Lucro Total</span>
                                        <h2 class="mb-0"><?php if(!empty($statistics[0]->lucro_total)): ?>R$ <?php echo $statistics[0]->lucro_total; ?><?php else: ?>R$ - <?php endif; ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2" id="dashboard-admin">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="media p-3">
                                    <div class="media-body">
                                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Depósitos nas últimas 24H</span>
                                        <h2 class="mb-0">R$ 0</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="media p-3">
                                    <div class="media-body">
                                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Depósitos nos últimas 7D</span>
                                        <h2 class="mb-0">R$ 0</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="media p-3">
                                    <div class="media-body">
                                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Depósitos no 1M</span>
                                        <h2 class="mb-0">R$ 0</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="media p-3">
                                    <div class="media-body">
                                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Deposito total</span>
                                        <h2 class="mb-0"><?php if(!empty($statistics[0]->deposito_total)): ?>R$ <?php echo $statistics[0]->deposito_total; ?><?php else: ?>R$ -<?php endif; ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2" id="dashboard-admin">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="media p-3">
                                    <div class="media-body">
                                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">PIX's Gerados 24H</span>
                                        <h2 class="mb-0">0</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="media p-3">
                                    <div class="media-body">
                                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">PIX's Pagos 24H</span>
                                        <h2 class="mb-0">0</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="media p-3">
                                    <div class="media-body">
                                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">PIX's Gerados</span>
                                        <h2 class="mb-0"><?php echo $statistics[0]->pixs_gerados_total; ?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="media p-3">
                                    <div class="media-body">
                                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">PIX's Pagos</span>
                                        <h2 class="mb-0">0</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2" id="dashboard-admin">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="media p-3">
                                    <div class="media-body">
                                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Cadastros 24H</span>
                                        <h2 class="mb-0"><?php echo $usuariostotais; ?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="media p-3">
                                    <div class="media-body">
                                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Cadastros 7D</span>
                                        <h2 class="mb-0"><?php echo $usuariostotais; ?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="media p-3">
                                    <div class="media-body">
                                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Cadastros 30D</span>
                                        <h2 class="mb-0"><?php echo $usuariostotais; ?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="media p-3">
                                    <div class="media-body">
                                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Cadastros Totais</span>
                                        <h2 class="mb-0"><?php echo $usuariostotais; ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
