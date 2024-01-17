<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="main-content">
   
<div class="container mt-5">

        <div class="d-flex align-items-center">
            <h1 class="mb-4 font">Editar usuário</h1>    
            <a class="btn btn-primary ms-auto" href="#" data-bs-toggle="modal" data-bs-target="#adicionarSaldoModal">
                <i class="fa-solid fa-plus"></i>
                Adicionar saldo
            </a>
        </div>

        <div class="card bg-card-black">
            <div class="card-body">
                <form method="post" action="<?php echo site_url('usuarios/update/'.$user->id); ?>">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $user->nome; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuário</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $user->usuario; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nascimento" class="form-label">Data de Nascimento</label>
                        <input type="text" class="form-control" id="nascimento" name="nascimento" value="<?php echo $user->nascimento; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $user->cpf; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $user->telefone; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $user->email; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="afiliado" class="form-label">Afiliado</label>
                        <input type="text" class="form-control" id="afiliado" name="afiliado" value="<?php echo $user->afiliado; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">Endereço</label>
                        <textarea class="form-control" id="endereco" name="endereco" rows="3"><?php echo $user->endereco; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="cep" class="form-label">CEP</label>
                        <textarea class="form-control" id="cep" name="cep" rows="1"><?php echo $user->cep; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="chave_pix" class="form-label">Chave PIX</label>
                        <input type="text" class="form-control" id="chave_pix" name="chave_pix" value="<?php echo $user->chave_pix; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="saldo" class="form-label">Saldo</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-dollar-sign"></i></span>
                            <input type="text" class="form-control" id="saldo" value="<?php echo $financeiro->saldo ?>" readonly>
                            
                        </div>
                    </div>
                   
                    <button type="submit" class="btn btn-primary btn-block">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>
</main>

<!-- Modal -->
<div class="modal fade" id="adicionarSaldoModal" tabindex="-1" aria-labelledby="adicionarSaldoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adicionarSaldoModalLabel">Adicionar Saldo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <!-- Formulário para adicionar saldo -->
        <form method="post" action="<?php echo site_url('usuarios/updateSaldo/'.$user->id); ?>">
        <div class="mb-3">
            <label for="saldo" class="form-label">Valor a adicionar</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-dollar-sign"></i></span>
                <input type="text" class="form-control" id="saldo" name="saldo">
            </div>
        </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Adicionar Saldo</button> 
    </form>
      </div>
    </div>
  </div>
</div>