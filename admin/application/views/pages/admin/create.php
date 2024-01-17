<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">


<div class="main-content">
   
<div class="container mt-5">
        <div class="d-flex align-items-center">
            <h1 class="mb-4 font">Criar novo administrador</h1>    
            <a class="btn btn-primary btn-lg ms-auto" href="<?php echo site_url('admin/create'); ?>">Novo</a>
        </div>
        <div class="card bg-card-black">
            <div class="card-body">
                <form method="post" action="<?php echo site_url('admin/store'); ?>">
                    <div class="form-group">
                        <label>E-mail:</label>
                        <input type="text" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Senha:</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nome:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                  
                    <button type="submit" class="btn btn-primary btn-block mt-3">Criar</button>
                </form>
            </div>
        </div>
    </div>
      </div>
   </div>
</div>