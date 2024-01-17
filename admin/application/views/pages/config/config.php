<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 border-bottom">
        <h1 class="h2">Configurações Gerais</h1>
    </div> 
    <div class="container mt-3">
    <?php if ($this->session->flashdata('msg')): ?> 

    <div class="alert alert-<?= $this->session->flashdata('tipo'); ?> text-center"" role="alert">
        <?= $this->session->flashdata('msg'); ?>
    </div>

    <?php endif; ?>

    <div class="card">
        <div class="card-body">
            <form method="post" action="<?php echo site_url('dashboard/configSave'); ?>">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $config[0]->nome ?>">
                </div>
                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição</label>
                    <textarea class="form-control" id="descricao" name="descricao" rows="4"><?php echo $config[0]->descricao ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="logo" class="form-label">Logo</label>
                    <div class="input-group">
                        <div class="d-grid gap-2 d-md-block">
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#editarLogo"><i class="fas fa-image"></i> Editar cabeçario</button>
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#editarLogo2"><i class="fas fa-image"></i> Editar rodapé</button>
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#editarLogo3"><i class="fas fa-image"></i> Editar Favicon</button>
                        </div>                 
                    </div>
                </div>
                <!-- Repita o bloco abaixo para os outros campos de rede social -->
                <div class="mb-3">
                    <label for="telegram" class="form-label">Telegram</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="telegram" name="telegram" value="<?php echo $config[0]->telegram ?>">
                        <span class="input-group-text"><i class="fab fa-telegram"></i></span>
                    </div>
                </div>
                <!-- Fim do bloco repetido -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $config[0]->email ?>">
                </div>
                <div class="mb-3">
                    <label for="facebook" class="form-label">Facebook</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="facebook" name="facebook" value="<?php echo $config[0]->facebook ?>">
                        <span class="input-group-text"><i class="fab fa-facebook"></i></span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="facebook" class="form-label">Instagram</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="instagram" name="instagram" value="<?php echo $config[0]->instagram ?>">
                        <span class="input-group-text"><i class="fa-brands fa-instagram"></i></span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="facebook" class="form-label">WhatsApp</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="<?php echo $config[0]->whatsapp ?>">
                        <span class="input-group-text"><i class="fa-brands fa-whatsapp"></i></span>
                    </div>
                </div>
                <hr>
                <div class="mb-3">
                <label for="googleAnalytics" class="form-label">Google Analytics</label>
                    <div class="input-group">
                        <textarea class="form-control" id="googleAnalytics" name="googleAnalytics" rows="4"><?php echo $config[0]->googleAnalytics ?></textarea>
                    </div>
                </div>
                <hr>
                <h5 class="text-uppercase font-size-12 font-weight-bold">Configurações de Saque</h5>
                <div class="mb-3">
                    <label for="minplay" class="form-label">Mínimo de Jogadas para saque</label>
                    <input type="number" class="form-control" id="minplay" name="minplay" value="<?php echo $config[0]->minplay ?>">
                </div>

                <div class="mb-3">
                    <label for="minplay" class="form-label">Saque mínimo</label>
                    <input type="number" class="form-control" id="minsaque" name="minsaque" value="<?php echo $config[0]->minsaque ?>">
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    </div>
</main>


<!-- Modal -->
<div class="modal fade" id="editarLogo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Logo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('dashboard/configSave'); ?>">
            <div class="mb-3">
                <label for="logo" class="form-label">Logo Atual</label>
                <!-- Substitua a URL abaixo pela URL da imagem atual -->
                <img src="<?php echo $config[0]->logo ?>" class="img-thumbnail" alt="Logo Atual">
            </div>
            <div class="mb-3">
                <label for="novaLogo" class="form-label">Nova Logo</label>
                <div class="input-group">
                    <input type="file" class="form-control" id="novaLogo" name="novaLogo">
                </div>
            </div>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editarLogo2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Logo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('dashboard/configSave'); ?>">
            <div class="mb-3">
                <label for="logo" class="form-label">Logo Atual</label>
                <!-- Substitua a URL abaixo pela URL da imagem atual -->
                <img src="<?php echo $config[0]->rodapelogo ?>" class="img-thumbnail" alt="Logo Atual">
            </div>
            <div class="mb-3">
                <label for="novaLogo" class="form-label">Nova Logo</label>
                <div class="input-group">
                    <input type="file" class="form-control" id="novaLogo" name="novaRodapeLogo">
                </div>
            </div>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editarLogo3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Logo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('dashboard/configSave'); ?>">
            <div class="mb-3">
                <label for="logo" class="form-label">Logo Atual</label>
                <!-- Substitua a URL abaixo pela URL da imagem atual -->
                <img src="<?php echo $config[0]->favicon ?>" class="img-thumbnail" alt="Logo Atual">
            </div>
            <div class="mb-3">
                <label for="novoFavicon" class="form-label">Nova Logo</label>
                <div class="input-group">
                    <input type="file" class="form-control" id="novoFavicon" name="novoFavicon">
                </div>
            </div>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
      </div>
    </div>
  </div>
</div>