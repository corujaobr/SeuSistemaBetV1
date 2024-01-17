<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="content">
        <div class="container-fluid pageContent">
            <div class="row page-title">
                <div class="col-md-12">
                    <h4 class="mb-1 mt-0">Configurações de Afiliados</h4>
                </div>
            </div>
            <?php if ($this->session->flashdata('msg')): ?> 

                <div class="alert alert-<?= $this->session->flashdata('tipo'); ?> text-center"" role="alert">
                 <?= $this->session->flashdata('msg'); ?>
                </div>

            <?php endif; ?>
            <form class="row" method="post" action="<?php echo site_url('dashboard/saveAfiliados'); ?>">
                <div class="col-md-6 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mb-1">
                                <label for="cpaLvl1">CPA LvL 1 (R$):</label>
                                <input type="text" id="cpaLvl1" name="cpaLvl1" class="form-control" value="<?php echo $afiliado[0]->cpaLvl1 ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mb-1">
                                <label for="cpaLvl2">CPA LvL 2 (R$):</label>
                                <input type="text" id="cpaLvl2" name="cpaLvl2" class="form-control" value="<?php echo $afiliado[0]->cpaLvl2 ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mb-1">
                                <label for="cpaLvl3">CPA LvL 3 (R$):</label>
                                <input type="text" id="cpaLvl3" name="cpaLvl3" class="form-control" value="<?php echo $afiliado[0]->cpaLvl3 ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mb-1">
                                <label for="chanceCpa">Chance do afiliado ganhar CPA (%):</label>
                                <input type="text" id="chanceCpa" name="chanceCpa" class="form-control" value="<?php echo $afiliado[0]->chanceCpa ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mb-1">
                                <label for="revShareFalso">Porcentagem de Rev. Share Falso (%):</label>
                                <input type="text" id="revShareFalso" name="revShareFalso" class="form-control" value="<?php echo $afiliado[0]->revShareFalso ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mb-1">
                                <label for="revShareLvl1">Revenue Share LvL 1 (%):</label>
                                <input type="text" id="revShareLvl1" name="revShareLvl1" class="form-control" value="<?php echo $afiliado[0]->revShareLvl1 ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mb-1">
                                <label for="revShareLvl2">Revenue Share LvL 2 (%):</label>
                                <input type="text" id="revShareLvl2" name="revShareLvl2" class="form-control" value="<?php echo $afiliado[0]->revShareLvl2 ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mb-1">
                                <label for="revShareLvl3">Revenue Share LvL 3 (%):</label>
                                <input type="text" id="revShareLvl3" name="revShareLvl3" class="form-control" value="<?php echo $afiliado[0]->revShareLvl3 ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mb-1">
                                <label for="minDepForCpa">Depósito Mínimo Para Afiliado Ganhar CPA:</label>
                                <input type="text" id="minDepForCpa" name="minDepForCpa" class="form-control" value="<?php echo $afiliado[0]->minDepForCpa ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mb-1">
                                <label for="minResgate">Mínimo de Resgate (R$):</label>
                                <input type="text" id="minResgate" name="minResgate" class="form-control" value="<?php echo $afiliado[0]->minResgate ?>">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-2">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</main>
