<div class="main-content home">
<div class="container-medium">
   <div class="main-sublinks-wrapper">
      <div data-w-tab="geral" class="tab-pane w-tab-pane w--tab-active" id="w-tabs-0-data-w-pane-0" role="tabpanel" aria-labelledby="w-tabs-0-data-w-tab-0">
         <div class="card">
            <div class="div-block-2">
               <div class="div-block">
                  <div class="icon-24 color-1"></div>
                  <div>
                     <h4 user-username="" class="white"><?php echo $usuario[0]->nome ?></h4>
                     <div user-email=""><?php echo $usuario[0]->email ?></div>
                     <a class="white" href="<?php echo site_url('usuarios/editarconta/'); ?>">Editar</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="w-layout-grid grid-4 mt-24">
            <div id="w-node-_0ea1822e-c190-6053-e5ab-02b116f0916b-b4edabe8" class="card degrade">
               <div class="icon-24 mb-20 color-1"></div>
               <div>Saldo total</div>
               <h3 class="white">R$ <span balance-w-bonus=""><?php echo $this->session->saldo ?></span></h3>
            </div>
            <div id="w-node-_0ea1822e-c190-6053-e5ab-02b116f09174-b4edabe8" class="card degrade">
               <div class="icon-24 mb-20 color-2"></div>
               <div>Saldo real</div>
               <h3 class="white">R$ <span balance-w-bonus=""><?php echo $this->session->saldo ?></span></h3>
            </div>
            <div id="w-node-_0ea1822e-c190-6053-e5ab-02b116f0917d-b4edabe8" class="card degrade">
               <div class="icon-24 mb-20 color-3"></div>
               <div>Saldo bônus</div>
               <h3 active-referrals="" class="white">-</h3>
            </div>
            <div id="w-node-_0ea1822e-c190-6053-e5ab-02b116f09186-b4edabe8" class="card degrade">
               <div class="icon-24 mb-20 color-4"></div>
               <div>Indicações</div>
               <h3 active-referrals="" class="white">-</h3>
            </div>
         </div>
      </div>
   </div>
   <!-- Fechando a div com a classe main-sublinks-wrapper -->
</div>