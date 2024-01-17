<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="main-content">
   
<div class="container mt-5">

        <div class="d-flex align-items-center">
            <h1 class="mb-4 font">Editar administrador</h1>    
            <a class="btn btn-primary btn-lg ms-auto" href="<?php echo site_url('admin/create'); ?>">Novo</a>
        </div>

        <div class="card bg-card-black">
            <div class="card-body">
                <form method="post" action="<?php echo site_url('admin/update/'.$admins->id); ?>">
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" name="email" class="form-control" value="<?php echo $admins->email; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Nome:</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $admins->nome; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>IP:</label>
                        <input type="text" name="ip" class="form-control" value="<?php echo $admins->IP; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mt-3">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>