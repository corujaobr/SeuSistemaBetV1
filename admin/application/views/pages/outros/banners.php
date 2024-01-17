<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container">
        
        <div class="d-flex align-items-center">
            <h1 class="mb-4 font">Lista de Banners</h1>    
            <a class="btn btn-primary ms-auto" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Adicionar Banner</a>
        </div>
        <?php if ($this->session->flashdata('msg')): ?>
            <div class="alert alert-<?= $this->session->flashdata('tipo'); ?> font" role="alert">
                <?= $this->session->flashdata('msg'); ?>
            </div>
        <?php endif; ?>

        <table class="table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Banner</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop para exibir os banners do banco de dados -->
                <?php
                // Substitua com a lógica para recuperar os banners do banco de dados
                foreach ($banners as $banner) {
                    echo "<tr>";
                    echo "<td>" . $banner->titulo . "</td>";
                    echo "<td>" . $banner->image . "</td>";
                    echo '<td> <a class="btn btn-danger" href="'.base_url().'tema/deletarBanner/'. $banner->id . '">Deletar</button></td>';
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</main>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Novo Banner</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('tema/salvarBanner'); ?>">
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="mb-3">
                <label for="novaLogo" class="form-label">Banner</label>
                <div class="input-group">
                    <input type="file" class="form-control" id="image" name="image">
                </div>
            </div>
        <div class="mb-3">
            <label for="link" class="form-label">Link</label>
            <input type="text" class="form-control" id="link" name="link">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
      </div>
    </div>
  </div>
</div>