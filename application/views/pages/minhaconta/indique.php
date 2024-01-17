<div class="main-content">
   <div class="container-medium mb-24">
      <div class="mb-24-2">
         <h3 class="white">Indique e Ganhe</h3>
      </div>
      <div class="card-affiliate horizontal mb-16">
         <div class="item-card-affiliate">
            <img src="https://assets-global.website-files.com/6483631a773f6af2b4edabab/651ff9c472a75899e996ef0a_users.svg" loading="lazy" alt="" class="icon-medium">
            <div class="content-card-affiliates">
               <h4>Referências</h4>
               <h4 invited-users-quantity="">0</h4>
            </div>
         </div>
         <div class="item-card-affiliate">
            <img src="https://assets-global.website-files.com/6483631a773f6af2b4edabab/651ff9c472a75899e996ef0a_users.svg" loading="lazy" alt="" class="icon-medium">
            <div class="content-card-affiliates">
               <h4>Ativos</h4>
               <h4 invited-active-users-quantity="">0</h4>
            </div>
         </div>
         <div class="item-card-affiliate">
            <img src="https://assets-global.website-files.com/6483631a773f6af2b4edabab/651ff9c472a75899e996ef0b_USD.svg" loading="lazy" alt="" class="icon-medium">
            <div class="content-card-affiliates">
               <h4>Total retirado (BRL)</h4>
               <h4 user-sum-withdrawals="">-</h4>
            </div>
         </div>
         <div class="item-card-affiliate">
            <img src="https://assets-global.website-files.com/6483631a773f6af2b4edabab/651ff9c472a75899e996ef0b_USD.svg" loading="lazy" alt="" class="icon-medium">
            <div class="content-card-affiliates">
               <h4>Total ganho (BRL)</h4>
               <h4 invited-users-sum-commissions="">0.00</h4>
            </div>
         </div>
      </div>
      <div class="eng-cards-afiliates">
         <div class="card-affiliate">
            <div class="item-card-affiliate">
               <div class="content-card-affiliates">
                  <h4 class="mb-16-2">Meu link de referência</h4>
                  <div class="gray-4 mb-16">Aproveite essa oportunidade para ganhar dinheiro extra enquanto compartilha a diversão da plataforma com seus amigos.</div>
                  <div class="form-rocket w-form">
                
                  <div class="content-select-field mt-24">
                     <?php if ($usuario[0]->usuario !== null): ?>
                        <div class="eng-select-field full">
                              <input type="text" class="input w-input" maxlength="256" name="name-2" data-name="Name 2" placeholder="Carregando..." value="<?= base_url(); ?>?ref=<?php echo $usuario[0]->usuario ?>" >
                        </div>
                        <a href="#" class="btn-small w-inline-block">
                              <div>Copiar</div>
                        </a>
                     <?php else: ?>
                        <div class="gray-4 mt-16">Finalize sua cadastro para obter o link!</div>
                     <?php endif; ?>
                  </div>

                  </div>
               </div>
            </div>
         </div>
         <div class="card-affiliate">
            <div class="item-card-affiliate">
               <div class="eng-step">
                  <h3>1</h3>
               </div>
               <div class="content-card-affiliates">
                  <h4 class="mb-16-2"><span class="white">Compartilhe</span> com amigos</h4>
                  <div class="gray-4">Compartilhe seu link ou código de referência com seus amigos</div>
               </div>
            </div>
            <div class="item-card-affiliate">
               <div class="eng-step">
                  <h3>2</h3>
               </div>
               <div class="content-card-affiliates">
                  <h4 class="mb-16-2">Ganhe <span class="white">R$ 10</span></h4>
                  <div class="gray-4">Você recebe sobre o primeiro depósito na hora</div>
               </div>
            </div>
            <div class="item-card-affiliate">
               <div class="eng-step">
                  <h3>3</h3>
               </div>
               <div class="content-card-affiliates">
                  <h4 class="mb-16-2">Suba de nível e receba!</h4>
                  <div class="gray-4">Aumente seus ganhos a cada novo cadastro no seu link</div>
               </div>
            </div>
         </div>
      </div>
   </div>
   