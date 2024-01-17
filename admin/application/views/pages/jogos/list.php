<style>
.card{
      border-radius: 15px !important;
      border: 1px;
      margin-bottom: 10px;
  }
  .card img{
      border-radius: 15px !important;
      border: 1px;
      margin-bottom: 10px;
  }


</style>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="container mt-5">

        <div class="d-flex align-items-center">
            <h3 class="mb-4 font">Lista de Jogos</h3>    
        </div>
        


        <?php if ($this->session->flashdata('msg')): ?>
            <div class="alert alert-<?= $this->session->flashdata('tipo'); ?> font" role="alert">
                <?= $this->session->flashdata('msg'); ?>
            </div>
        <?php endif; ?>
        
        <?php if (empty($games)): ?>
            <div class="card text-center bg-card-black">
                <div class="card-body mt-5 mb-5">
                    <h2 class="font mb-5" >Nenhum registro encontrado.</h2>
                </div>
            </div>
        <?php else: ?>
          <div class="card bg-card-black">
            <div class="card-body">
                <div class="container">
                <div class="row">      
                <?php foreach ($games as $game): ?>  
                
                    <div class="col-md-4 mb-3">
                        <a href="<?= base_url('jogos/edit/'.$game->id) ?>">
                            <div class="card bg-dark text-white">
                                <img src="<?= $game->banner ?>" class="card-img img-fluid" alt="<?= $game->game_name ?>">
                            </div>
                        </a>
                    </div>


                 
                <?php endforeach; ?>
                </div>
                </div>
            </div>
            <br>
            <nav class="mb-3">
                <?php echo $this->pagination->create_links(); ?>
            </nav>
        </div>
        <?php endif; ?>
    </div>
    </div>
</main>