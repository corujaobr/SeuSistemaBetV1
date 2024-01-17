<div class="main-content home">
<div class="container-medium">
<div style="opacity: 1; transition: opacity 300ms ease 0s;">
            <div class="card">
               <h4 class="white">Editar dados pessoais</h4>
               <div class="mt-16 w-form">
                  <form class="form-account"  method="post" action="<?php echo site_url('usuarios/update/'.$usuario[0]->id); ?>" enctype="multipart/form-data">
                     <div id="w-node-_624768ac-c61c-6860-4c61-7f1542b5b1aa-b4edabe8" class="eng-text-field">
                        <label for="name" class="txt-label with-input">E-mail</label>
                        <input type="email" class="input no-padding with-label w-input" maxlength="256" value="<?php echo $usuario[0]->email ?>" name="email">
                     </div>
                     <div id="w-node-_8697b792-c818-f3e3-de26-a332bdfd3ab8-b4edabe8" class="eng-text-field">
                        <label for="name-2" class="txt-label with-input">CPF</label>
                        <input type="text" class="input no-padding with-label w-input" maxlength="256" value="<?php echo $usuario[0]->cpf ?>" name="cpf">
                    </div>

                    <div id="w-node-_8231a0ea-9c0d-fe1e-d41e-ad6e6b645483-b4edabe8" class="eng-text-field full">
                        <label for="name-2" class="txt-label with-input">Nome completo</label>
                        <input type="text" class="input no-padding with-label w-input" maxlength="256" value="<?php echo $usuario[0]->nome ?>" name="nome">
                    </div>

                    <div id="w-node-_2e9cc3d1-271b-e041-117a-5e8c7934149b-b4edabe8" class="eng-text-field full">
                        <label for="name-2" class="txt-label with-input">Data de Nascimento</label>
                        <input type="text" class="input no-padding with-label w-input" maxlength="256" value="<?php echo $usuario[0]->nascimento ?>" name="nascimento">
                    </div>

                    <div id="w-node-_1c7c80ce-220e-0b31-a69b-bbcd50a8b084-b4edabe8" class="eng-text-field full">
                        <label for="name-2" class="txt-label with-input">Nome de Usuário</label>
                        <input type="text" class="input no-padding with-label w-input" maxlength="256" value="<?php echo $usuario[0]->usuario ?>" name="usuario">
                    </div>

                    <div id="w-node-_your-new-node-id" class="eng-text-field">
                        <label for="name-4" class="txt-label with-input">Telefone</label>
                        <input type="text" class="input no-padding with-label w-input" maxlength="15" value="<?php echo $usuario[0]->telefone ?>" name="telefone">
                    </div>

                    <div id="w-node-_another-new-node-id" class="eng-text-field full">
                        <label for="name-5" class="txt-label with-input">Endereço</label>
                        <input type="text" class="input no-padding with-label w-input" maxlength="256" value="<?php echo $usuario[0]->endereco ?>" name="endereco">
                    </div>

                    <div id="w-node-_one-more-new-node-id" class="eng-text-field">
                        <label for="name-6" class="txt-label with-input">CEP</label>
                        <input type="text" class="input no-padding with-label w-input" maxlength="256" value="<?php echo $usuario[0]->cep ?>" name="cep">
                    </div>

                    <div id="w-node-_final-new-node-id" class="eng-text-field full">
                        <label for="name-7" class="txt-label with-input">Chave PIX</label>
                        <input type="text" class="input no-padding with-label w-input" maxlength="256" value="<?php echo $usuario[0]->chave_pix ?>" name="chave_pix">
                    </div>

                    <button type="submit" class="btn-small btn-color-1">Atualizar Cadastro</button>
                  </form>
               </div>

</div>
</div>