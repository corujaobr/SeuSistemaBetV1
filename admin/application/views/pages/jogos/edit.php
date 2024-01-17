
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="container">
    <h1>Editar Jogo</h1>
    <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('jogos/update/'.$game->id); ?>">
        <div class="mb-3">
            <label for="game_code" class="form-label">Código do Jogo</label>
            <input type="text" class="form-control" id="game_code" name="game_code" value="<?php echo $game->game_code; ?>" required>
        </div>
        <div class="mb-3">
            <label for="game_name" class="form-label">Nome do Jogo</label>
            <input type="text" class="form-control" id="game_name" name="game_name" value="<?php echo $game->game_name; ?>" required>
        </div>
        <div class="mb-3">
                <label for="logo" class="form-label">Banner Atual</label>
                <br>
                <img src="<?php echo $game->banner ?>" class="img-thumbnail" alt="Logo Atual">
        </div>
        <div class="mb-3">
                <label for="banner" class="form-label">Banner</label>
                <div class="input-group">
                    <input type="file" class="form-control" id="banner" name="banner">
                </div>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status" required>
                <option value="1" selected>Ativo</option>
                <option value="0">Inativo</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="provider" class="form-label">Fornecedor</label>
            <input type="text" class="form-control" id="provider" name="provider" value="<?php echo $game->provider; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </form>
</div>
</main>