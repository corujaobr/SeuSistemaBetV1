  <!-- Inclua a biblioteca jscolor.js para o seletor de cores -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jscolor/2.4.5/jscolor.min.js"></script>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 border-bottom">
        <h1 class="h2">Configuração de Tema (Cores)</h1>
      </div> 
      <div class="container mt-3">
      <?php if ($this->session->flashdata('msg')): ?> 

      <div class="alert alert-<?= $this->session->flashdata('tipo'); ?> text-center"" role="alert">
        <?= $this->session->flashdata('msg'); ?>
      </div>

      <?php endif; ?>

     
      <form method="post" action="<?php echo site_url('tema/save'); ?>">
            <div class="mb-3">
                <label for="cor_padrao" class="form-label">Cor Padrão</label>
                <input type="text" class="form-control jscolor" id="cor_padrao" name="cor_padrao" value="<?php echo $config[0]->cor_padrao ?>">
            </div>
            <div class="mb-3">
                <label for="custom_css" class="form-label">Custom CSS</label>
                <textarea class="form-control" id="custom_css" name="custom_css" rows="6"><?php echo $config[0]->custom_css ?></textarea>
            </div>
            <div class="mb-3">
                <label for="texto" class="form-label">Cor do texto</label>
                <input type="text" class="form-control jscolor" id="texto" name="texto" value="<?php echo $config[0]->texto ?>">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

</main>
