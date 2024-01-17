<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 border-bottom">
        <h1 class="h2">Configuração API de Jogos</h1>
      </div> 
      <div class="container mt-3">
      <?php if ($this->session->flashdata('msg')): ?> 

      <div class="alert alert-<?= $this->session->flashdata('tipo'); ?> text-center"" role="alert">
        <?= $this->session->flashdata('msg'); ?>
      </div>

      <?php endif; ?>

     
      <form method="post" action="<?php echo site_url('Fiverscan/save'); ?>">
            <div class="mb-3">
                <label for="url" class="form-label">URL</label>
                <input type="text" class="form-control" id="url" name="url" value="<?php echo $config[0]->url ?>">
            </div>
            <div class="mb-3">
                <label for="client_id" class="form-label">Agent Code</label>
                <textarea class="form-control" id="agent_code" name="agent_code" rows="3"><?php echo $config[0]->agent_code ?></textarea>
            </div>
            <div class="mb-3">
                <label for="client_secret" class="form-label">Token</label>
                <textarea class="form-control" id="agent_token" name="agent_token" rows="3"><?php echo $config[0]->agent_token ?></textarea>
            </div>

            <div class="mb-3">
                <label for="ativo" class="form-label">Status</label>
                <input type="text" class="form-control" id="ativo" name="ativo" value="<?php echo $config[0]->ativo ?>">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

</main>
