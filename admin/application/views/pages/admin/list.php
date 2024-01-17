<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="container mt-5">

        <div class="d-flex align-items-center">
            <h1 class="mb-4 font">Lista de Administradores</h1>    
            <a class="btn btn-primary btn-lg ms-auto" href="<?php echo site_url('admin/create'); ?>">Criar novo Administrador</a>
        </div>
        


        <?php if ($this->session->flashdata('msg')): ?>
            <div class="alert alert-<?= $this->session->flashdata('tipo'); ?> font" role="alert">
                <?= $this->session->flashdata('msg'); ?>
            </div>
        <?php endif; ?>
        
        <?php if (empty($admins)): ?>
            <div class="card text-center bg-card-black">

                <div class="card-body mt-5 mb-5">
                    
                    <h2 class="font mb-5" >Nenhum registro encontrado.</h2>
                

                
                    <a href="<?php echo site_url('admin/create'); ?>" class="btn btn-primary btn-lg">Criar novo Administrador</a>
                </div>
            </div>
        <?php else: ?>
          <div class="card bg-card-black">
            <div class="card-body">
                <div class="container">
                <?php foreach ($admins as $admin): ?>  
                    <div class="row justify-content-md-center border-bottom mt-2">
                            <div class="col col-lg-10">
                                <h5 class="mb-1"><?php echo $admin->nome; ?> 
                                <p class="mb-1"><?php echo $admin->email; ?></p> 
                            </div>
                            <div class="col text-end">
                                <a class="btn btn-light" href="<?php echo site_url('admin/edit/'.$admin->id); ?>" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil-ruler"><path d="m15 5 4 4"/><path d="M13 7 8.7 2.7a2.41 2.41 0 0 0-3.4 0L2.7 5.3a2.41 2.41 0 0 0 0 3.4L7 13"/><path d="m8 6 2-2"/><path d="m2 22 5.5-1.5L21.17 6.83a2.82 2.82 0 0 0-4-4L3.5 16.5Z"/><path d="m18 16 2-2"/><path d="m17 11 4.3 4.3c.94.94.94 2.46 0 3.4l-2.6 2.6c-.94.94-2.46.94-3.4 0L11 17"/></svg></a>
                            </div>
                    </div>

                 
                <?php endforeach; ?>
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