<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">


<div class="main-content">
   
<div class="container mt-5">
        <div class="d-flex align-items-center">
            <h1 class="mb-4 font">Criar novo usuário</h1>    
            <a class="btn btn-primary btn-lg ms-auto" href="<?php echo site_url('usuarios/create'); ?>">Novo</a>
        </div>
        <div class="card bg-card-black">
                <div class="card-body">
                <form method="post" action="<?php echo site_url('usuarios/store'); ?>">
                    <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuário</label>
                    <input type="text" class="form-control" id="usuario" name="usuario">
                </div>
                <div class="mb-3">
                    <label for="nascimento" class="form-label">Data de Nascimento</label>
                    <input type="text" class="form-control" id="nascimento" name="nascimento" required>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" required>
                </div>
                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf">
                </div>
                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="afiliado" class="form-label">Afiliado</label>
                    <input type="text" class="form-control" id="afiliado" name="afiliado">
                </div>
                <div class="mb-3">
                    <label for="endereco" class="form-label">Endereço</label>
                    <textarea class="form-control" id="endereco" name="endereco" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="cep" class="form-label">CEP</label>
                    <textarea class="form-control" id="cep" name="cep" rows="1"></textarea>
                </div>
                <div class="mb-3">
                    <label for="chave_pix" class="form-label">Chave PIX</label>
                    <input type="text" class="form-control" id="chave_pix" name="chave_pix">
                </div>
                    <button type="submit" class="btn btn-primary btn-block">Criar</button>
                </form>
            </div>
        </div>
    </div>
      </div>
   </div>
</div>