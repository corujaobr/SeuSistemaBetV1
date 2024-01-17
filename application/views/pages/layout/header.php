<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="utf-8"/>
      <title><?php echo $config[0]->nome ?> <?php if($nomepagina): ?>- <?php echo $nomepagina ?><?php endif; ?></title>
      <meta content="<?php echo $config[0]->nome ?> <?php if($nomepagina): ?> - <?php echo $nomepagina ?> <?php endif; ?>" property="og:title"/>
      <meta content="<?php echo $config[0]->nome ?> <?php if($nomepagina): ?> - <?php echo $nomepagina ?> <?php endif; ?>" property="twitter:title"/>
      <meta property="og:description" content="<?php echo $config[0]->descricao ?>">
      <meta property="twitter:description" content="<?php echo $config[0]->descricao ?>">
      <meta content="width=device-width, initial-scale=1" name="viewport"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <link rel="manifest" href="<?= base_url(); ?>manifest.json">
      <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
      <link href="<?php echo $config[0]->favicon ?>" rel="shortcut icon" type="image/x-icon"/>
      <link href="<?php echo $config[0]->favicon ?>" rel="apple-touch-icon"/>
      <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
      <meta name="theme-color" content="#141417" />
      <link rel="stylesheet" href="<?= base_url(); ?>public/css/webflow-style-head-v2.css">
      <script async src="<?= base_url(); ?>public/js/cmsfilter.js"></script>
      <script async src="<?= base_url(); ?>public/js/cmssort.js"></script>
      <script async src="<?= base_url(); ?>public/js/cmsload.js"></script>
      <script defer src="<?= base_url(); ?>public/js/scrolldisable.js"></script>
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
      <link href="<?= base_url(); ?>app.css" rel="stylesheet" type="text/css"/>
      <link href="<?= base_url(); ?>public/css/app.css" rel="stylesheet" type="text/css"/> 
       
	  <script src="https://kit.fontawesome.com/6728d0711b.js" crossorigin="anonymous"></script>
   </head>
   <body>
      <div id="<?= base_url(); ?>" class="base_url"></div>
      <section id="page-wrapper" class="page-wrapper">
         <nav id="menu" class="content-navbar">
            <div class="navbar_wrapper">
               <div class="navbar-left">
                  <div class="w-dyn-list">
                     <div role="list" class="w-dyn-items">
                        <div role="listitem" class="w-dyn-item">
                           <a href="<?= base_url(); ?>" class="navbar_brand w-inline-block">
                              <div class="brand_type-wrapper"><img loading="lazy" alt="" src="<?php echo $config[0]->logo ?>" class="ico-brand-type header"/></div>
                           </a>
                           <link rel="prerender" href="<?= base_url(); ?>"/>
                        </div>
                     </div>
                  </div>
               </div>
			<?php if ($this->session->logged == false): ?> 
                <div class="navbar-buttons-login-wrapper">
					<a fs-scrolldisable-element="disable" href00="#" class="btn-small w-button" data-toggle="modal" data-target="#entrarModal">Entrar</a>
				  	<a fs-scrolldisable-element="disable" href="#" class="btn-small btn-color-1 w-button" data-toggle="modal" data-target="#cadastroModal">Cadastrar</a>
				</div>
			<?php else: ?>
				<div class="navbar-logged" style="display: block;">
               <div class="navbar-buttons-balance-wrapper">
                  <div data-hover="true" data-delay="0" class="w-dropdown">
                     <div class="balance-info w-dropdown-toggle" id="w-dropdown-toggle-0" aria-controls="w-dropdown-list-0" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">
                        <div class="gray txt-label">Banca</div>
                        <div class="txt-balance-original">
                           <div class="flex-horizontal white">
                              <h4 class="green mr-8">R$</h4>
                              <h4 id="balance"><?php echo $this->session->saldo; ?></h4>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a href="#" class="btn-small btn-color-1 w-button" data-toggle="modal" data-target="#modalDeposito"><span class="icon-20 no-mobile">+</span> <span>Depositar</span></a>
                  <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                     <div class="eng-letter-name no-mobile">
                        <div class="letter-name"></div>
                     </div>
                     </button>
                     <div class="dropdown-menu">
                     <nav class="drop-list-menu w-dropdown-list w--open" id="w-dropdown-list-1" aria-labelledby="w-dropdown-toggle-1">
                        <a href="<?= base_url(); ?>usuarios/minhaconta" aria-current="page" class="eng-info-account w-inline-block w--current" tabindex="0">
                           <div class="icon-16 fixed-width-24"></div>
                           <div class="info-account">
                              <div user-username="" class="txt-label white no-wrap"><?php echo $this->session->nome; ?></div>
                              <div user-email="" class="txt-label no-wrap"><?php echo $this->session->email; ?></div>
                           </div>
                        </a>
                        <a fs-scrolldisable-element="disable" href="#" class="link-drop w-inline-block" data-toggle="modal" data-target="#modalDeposito" tabindex="0">
                           <div class="icon-16 fixed-width-24"></div>
                           <div>Depositar</div>
                        </a>
                        <a fs-scrolldisable-element="disable" href="#" class="link-drop w-inline-block" data-toggle="modal" data-target="#modalSaque" tabindex="0">
                           <div class="icon-16 fixed-width-24"></div>
                           <div>Sacar</div>
                        </a>
                        <a open-window-rollover="" href="#" class="link-drop w-inline-block" data-ix="display-none" tabindex="0" style="display: none;">
                           <div class="icon-16 fixed-width-24"></div>
                           <div>Histórico</div>
                        </a>
                        <a id="logout-btn" href="<?= base_url(); ?>usuarios/logout" class="link-drop color-1 w-inline-block" tabindex="0">
                           <div class="icon-16 fixed-width-24"></div>
                           <div>Sair</div>
                        </a>
                     </nav>
                     </div>
                     </div>
            </div>
			<?php endif; ?>
            </div>
         </nav>
         <div class="main-wrapper">
            <div class="left-side-bar" id="left-side-bar">
               <div class="left-side-bar_page-padding">
                  <div class="left-side_sticky-wrapper">
                     <div class="eng-superior-menu">
                        <div class="left-side-bar_navigation-wrapper">
                           <div class="eng-sublinks-nav">
                              <a href="#" class="btn-small btn-color-1 mobile w-inline-block" data-ix="window-deposit">
                                 <div class="content-btn">
                                    <div class="icon-20">+</div>
                                    <div>Depositar</div>
                                 </div>
                              </a>
                              <a href="<?= base_url(); ?>" class="sublink-nav w-inline-block">
                                 <div class="content-sublink-menu">
                                    <div class="icon-20 fixed-width"></div>
                                    <div>Início</div>
                                 </div>
                              </a>
                              <?php if ($this->session->logged == true): ?> 
                              <a href="<?= base_url(); ?>usuarios/minhaconta" class="sublink-nav w-inline-block">
                                 <div class="content-sublink-menu">
                                    <div class="icon-20 fixed-width"></div>
                                    <div>Minha Conta</div>
                                 </div>
                              </a>
                              <a href="<?= base_url(); ?>usuarios/logout" class="sublink-nav w-inline-block">
                                 <div class="content-sublink-menu">
                                    <div class="icon-20 fixed-width"></div>
                                    <div>Sair</div>
                                 </div>
                              </a>
                              <?php endif; ?>

                              <a href="<?= base_url(); ?>usuarios/indique" class="sublink-nav w-inline-block">
                                 <div class="content-sublink-menu">
                                    <div class="icon-20 fixed-width"></div>
                                    <div>Indique e Ganhe</div>
                                 </div>
                              </a>
                              <a href="<?= base_url(); ?>cassino" class="sublink-nav w-inline-block">
                                 <div class="content-sublink-menu">
                                    <div class="icon-20 fixed-width"></div>
                                    <div>Todos os jogos</div>
                                 </div>
                              </a>
                              
                           </div>
                           <div class="line-divisor-nav"></div>
                           <div class="eng-sublinks-nav">
                              <div data-hover="false" data-delay="0" class="dropdown-menu w-dropdown">
                                 <div class="dropdown-toogle-menu w-dropdown-toggle" data-ix="dropdown-menu">
                                    <a href="#" class="sublink-nav with-arrow btn-color-1 w-inline-block">
                                       <div class="content-sublink-menu space-between">
                                          <div class="eng-left-sublink-menu">
                                             <div class="icon-20 fixed-width"></div>
                                             <div>Populares</div>
                                          </div>
                                          <div class="arrow-drop-menu active"></div>
                                       </div>
                                    </a>
                                 </div>
                                 <nav class="dropdown-list-menu w-dropdown-list" data-ix="initiate-dropdown-list">
                                    <div class="w-dyn-list">
                                       <div role="list" class="list-links-menu mt-8 w-dyn-items">
                                          <div role="listitem" class="w-dyn-item">
                                             <a href="<?= base_url(); ?>games/ver/PGSOFT/fortune-ox" class="link-menu w-inline-block">
                                                <div class="content-sublink-menu">
                                                   <img src="https://static.springbuilder.site/fs/userFiles-v2/moovbet-18748220/images/4977-fortune-ox-16934358641096.webp" loading="lazy" alt="" class="icon-sublink-game"/>
                                                   <div class="text-size-small short">Fortune Ox</div>
                                                </div>
                                             </a>
                                          </div>
                                          <div role="listitem" class="w-dyn-item">
                                             <a href="<?= base_url(); ?>games/ver/PGSOFT/fortune-tiger" class="link-menu w-inline-block">
                                                <div class="content-sublink-menu">
                                                   <img src="https://assets.website-files.com/6483631a773f6af2b4edabee/64891b10c0a2086ed39a2db2_6489193dd93afd96335f9202_6483d7003cbfcd23c72d4095_648357caafb883b2444bd689_fortune_tiger_icon.webp" loading="lazy" alt="" class="icon-sublink-game"/>
                                                   <div class="text-size-small short">Fortune Tiger</div>
                                                </div>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="list-links-menu mt-8">
                                       <a href="<?= base_url(); ?>cassino" class="link-menu w-inline-block">
                                          <div class="content-sublink-menu space-between">
                                             <div>Ver todos</div>
                                             <div class="icon-12 txt-yellow"></div>
                                          </div>
                                       </a>
                                    </div>
                                 </nav>
                              </div>
                              <a href="<?= base_url(); ?>cassino" class="sublink-nav btn-color-1 w-inline-block">
                                 <div class="content-sublink-menu">
                                    <div class="icon-20 fixed-width"></div>
                                    <div>Roletas</div>
                                 </div>
                              </a>
                              <a href="<?= base_url(); ?>cassino" aria-current="page" class="sublink-nav btn-color-1 w-inline-block w--current">
                                 <div class="content-sublink-menu">
                                    <div class="icon-20 fixed-width"></div>
                                    <div>Cassino</div>
                                 </div>
                              </a>
                              <a href="<?= base_url(); ?>cassino/aovivo" class="sublink-nav btn-color-1 w-inline-block">
                                 <div class="content-sublink-menu">
                                    <div class="icon-20 fixed-width"></div>
                                    <div>Cassino Ao vivo</div>
                                 </div>
                              </a>
                           </div>
                           <div class="line-divisor-nav"></div>
                           <div class="eng-sublinks-nav">
                              <a open-support-btn="" href="<?php echo $config[0]->suporte ?> " class="sublink-nav w-inline-block">
                                 <div class="content-sublink-menu">
                                    <div class="icon-20 fixed-width"></div>
                                    <div>Suporte</div>
                                 </div>
                              </a>
                           </div>
                           <div class="eng-copyright-menu mt-16">
                              <div class="eng-support-menu">
                                 <div class="eng-social-menu">
                                   
                                 <?php if($config[0]->telegram ): ?>
                                    <a href="<?php echo $config[0]->telegram ?>" target="_blank" class="link-social w-inline-block">
                                       <div class="icon-18-brand"></div>
                                    </a>

                                 <?php endif; ?> 
                                 <?php if($config[0]->instagram ): ?>
                                    <a href="<?php echo $config[0]->instagram ?>" target="_blank" class="link-social w-inline-block">
                                       <div class="icon-18-brand"></div>
                                    </a>

                                 <?php endif; ?> 
                                 <?php if($config[0]->facebook ): ?>
                                    <a href="<?php echo $config[0]->facebook ?>" target="_blank" class="link-social w-inline-block">
                                       <div class="icon-18-brand"></div>
                                    </a>

                                 <?php endif; ?> 
                                 <?php if($config[0]->whatsapp ): ?>
                                    <a href="<?php echo $config[0]->whatsapp ?>" target="_blank" class="link-social w-inline-block">
                                       <div class="icon-18-brand"></div>
                                    </a>

                                 <?php endif; ?> 
                                   
                                    
                                 </div>
                              </div>
                              <div class="txt-label copyright"><?php echo $config[0]->nome ?>  © 2023. All right reserved.</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

   <div class="navbar-mobile custom-navbar">
      <a href="#" class="link-menu-mobile w-inline-block" data-toggle="modal" data-target="#exampleModal">
         <div class="icon-16 mb-2"></div>
         <div class="white">Menu</div>
      </a>
      <a href="<?= base_url(); ?>cassino/aovivo" class="link-menu-mobile w-inline-block">
         <div class="icon-16 mb-2"></div>
         <div class="white">Ao vivo</div>
      </a>

      <a href="<?= base_url(); ?>cassino" class="link-menu-mobile w-inline-block">
         <div class="icon-16 mb-2"></div>
         <div class="white">Cassino</div>
      </a>
      <?php if ($this->session->logged == true): ?>  
         <a href="<?= base_url(); ?>usuarios/minhaconta" class="link-menu-mobile w-inline-block">
            <div class="icon-16 mb-2"></div>
            <div class="white">Conta</div>
         </a>
         <a href="<?= base_url(); ?>usuarios/logout" class="link-menu-mobile w-inline-block" data-ix="open-window-search">
            <div class="icon-16 mb-2"></div>
            <div class="white">Sair</div>
         </a>
      <?php endif; ?>
   </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="content-sidebar-mobile">
            <div class="left-side-bar_page-padding">
               <div class="left-side_sticky-wrapper">
                  <div class="eng-superior-menu">
                     <div class="left-side-bar_navigation-wrapper">
                        <div class="eng-sublinks-nav">
                           <div class="container">
                              <a href="<?= base_url(); ?>" class="navbar_brand w-inline-block">
                                 <div class="brand_type-wrapper"><img loading="lazy" alt="" src="<?php echo $config[0]->logo ?>" class="ico-brand-type header"/></div>
                              </a>
                              <div fs-scrolldisable-element="enable" class="eng-close-windows" data-dismiss="modal">
                                 <div class="content-btn">
                                    <div class="icon-16"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="eng-sublinks-nav mt-4">
                           <?php if ($this->session->logged == false): ?> 
                           <div class="navbar-buttons-login-wrapper">
                              <a fs-scrolldisable-element="disable" href00="#" class="btn-small w-button" data-toggle="modal" data-target="#entrarModal">Entrar</a>
                              <a fs-scrolldisable-element="disable" href="#" class="btn-small btn-color-1 w-button" data-toggle="modal" data-target="#cadastroModal">Cadastrar</a>
                           </div>
                           <?php else: ?>
                           <div class="navbar-logged" style="display: block;">
                              <div class="navbar-buttons-balance-wrapper">
                                 <div data-hover="true" data-delay="0" class="w-dropdown">
                                    <div class="balance-info w-dropdown-toggle" id="w-dropdown-toggle-0" aria-controls="w-dropdown-list-0" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">
                                       <div class="gray txt-label">Banca</div>
                                       <div class="txt-balance-original">
                                          <div class="flex-horizontal white">
                                             <h4 class="green mr-8">R$</h4>
                                             <h4 id="balance"><?php echo $this->session->saldo; ?></h4>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <a href="#" class="btn-small btn-color-1 w-button"><span class="icon-20 no-mobile">+</span> <span>Depositar</span></a>
                              </div>
                           </div>
                           <?php endif; ?>
                           <a href="<?= base_url(); ?>" class="sublink-nav w-inline-block">
                                 <div class="content-sublink-menu">
                                    <div class="icon-20 fixed-width"></div>
                                    <div>Início</div>
                                 </div>
                              </a>
                              <?php if ($this->session->logged == true): ?> 
                              <a href="<?= base_url(); ?>usuarios/minhaconta" class="sublink-nav w-inline-block">
                                 <div class="content-sublink-menu">
                                    <div class="icon-20 fixed-width"></div>
                                    <div>Minha Conta</div>
                                 </div>
                              </a>
                              <a href="<?= base_url(); ?>usuarios/logout" class="sublink-nav w-inline-block">
                                 <div class="content-sublink-menu">
                                    <div class="icon-20 fixed-width"></div>
                                    <div>Sair</div>
                                 </div>
                              </a>
                              <?php endif; ?>

                              <a href="<?= base_url(); ?>usuarios/indique" class="sublink-nav w-inline-block">
                                 <div class="content-sublink-menu">
                                    <div class="icon-20 fixed-width"></div>
                                    <div>Indique e Ganhe</div>
                                 </div>
                              </a>
                              <a href="<?= base_url(); ?>cassino" class="sublink-nav w-inline-block">
                                 <div class="content-sublink-menu">
                                    <div class="icon-20 fixed-width"></div>
                                    <div>Todos os jogos</div>
                                 </div>
                              </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalSaque" tabindex="-1" aria-labelledby="modalSaqueLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="card windows">
      <h3 class="white">Realize o seu saque</h3>
      <div class="gray-3 mb-24">Faça o saque agora e aproveite seus lucros!</div>
      <div class="form w-form">
      <form method="post" action="<?= base_url(); ?>ezze/criarSaque">
            <div class="gray-3">Quantia (Mínimo de <span tenant-min-withdraw="">100</span> BRL)</div>
            <div class="eng-text-field"><input type="number" class="input no-padding w-input" maxlength="256" name="value" placeholder="Inisira um valor" id="value" required=""></div>
            <div class="eng-text-field mt-2">
               <select id="type" name="type" class="input no-padding select w-select">
                  <option value="">Tipo de Chave</option>
                  <option value="CPF">CPF</option>
                  <option value="EMAIL">E-mail</option>
                  <option value="TELEFONE">Telefone</option>
                  <option value="CHAVE_ALEATORIA">Chave aleatória</option>
               </select>
            </div>
            <div class="eng-text-field mt-2">
               <input type="text" class="input no-padding w-input" maxlength="256" name="key" placeholder="Chave PIX" withdrawal-pix-key="" id="key" required="">
               <div class="eng-icon-field-img"><img alt="" loading="lazy" src="https://assets-global.website-files.com/6483631a773f6af2b4edabab/6483631a773f6af2b4edabb3_pix-icon.svg" class="icon-field-img-2"></div>
            </div>
            <div class="ang-alert">
               <div class="options-form">
                  <div>Saques permitidos apenas para contas bancárias de sua titularidade</div>
               </div>
            </div>
         </form>
      </div>
      <button type="submit" class="mt-16 btn-small btn-color-1 w-inline-block">
         <div class="content-btn">
            <div>Sacar</div>
         </div>
      </button>
      <div fs-scrolldisable-element="enable" class="eng-close-windows" data-dismiss="modal">
         <div class="content-btn">
            <div class="icon-16"></div>
         </div>
      </div>
   </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalDeposito" tabindex="-1" aria-labelledby="modalDepositoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="window-register" style="transform-style: preserve-3d; transition: transform 200ms ease 0s, opacity 200ms ease 0s; opacity: 1; transform: translateX(0px) translateY(0px) translateZ(0px); display: block;">
   <div class="align-center-windows">
         <div class="card windows">
            <h2 class="mb-8">Faça agora seu depósito no pix</h2>
            <div class="gray mb-24">Falta pouco para a diversão!</div>
            <div fs-scrolldisable-element="enable" class="eng-close-windows" data-dismiss="modal">
               <div class="content-btn">
                  <div class="icon-16"></div>
               </div>
            </div>
            <div class="form w-form">
               <form id="enviarPagamento" method="post" action="<?= base_url(); ?>ezze/criarQrCode">
                  <div class="gray">Valor do depósito (Depósito mínimo de <span tenant-min-deposit="">R$5 </span>BRL)</div>
                  <div class="eng-text-field">
                     <input type="text" class="input w-input" maxlength="256" name="field" data-name="" placeholder="Insira um valor" id="valor" name="valor">
                     <div class="icon-field"></div>
                  </div>
                  <div class="eng-grid-form">
                     <a deposit-pix-amount-option-1="" class="btn-small full w-button"  onclick="$('#valor').val(20);">R$ 20</a>
                     <a deposit-pix-amount-option-2="" class="btn-small full w-button"  onclick="$('#valor').val(40);">R$ 40</a>
                     <a deposit-pix-amount-option-3="" class="btn-small full w-button"  onclick="$('#valor').val(60);">R$ 60</a>
                  </div>
                  <button type="submit" id="enviarBotao" class="btn-small btn-color-1 full w-inline-block">
                        Depositar
                  </button>
                  <div class="eng-alert">
                     <div class="alert flex">
                        <div class="icon-16 txt-green mr-16"></div>
                        <div class="txt-label align-left">Nossos servidores de pagamentos suportados são de altíssimo nível de segurança e confiável.</div>
                     </div>
                  </div>
               </form>
         </div>
         </div>
         </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal para exibir o QR code -->
<div class="modal fade" id="qrCodeModal" tabindex="-1" role="dialog" aria-labelledby="qrCodeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="window-register" style="transform-style: preserve-3d; transition: transform 200ms ease 0s, opacity 200ms ease 0s; opacity: 1; transform: translateX(0px) translateY(0px) translateZ(0px); display: block;">
   <div class="align-center-windows">
         <div class="card windows">
            <div class="eng-title-qr mb-16">
               <div class="eng-icon-pix"><img src="https://assets.website-files.com/6483631a773f6af2b4edabab/6483631a773f6af2b4edabca_pix-icon%201.svg" loading="lazy" alt="" class="img-title-window"></div>
               <h3 class="white">Valor do pedido</h3>
               <p class="h3 txt-yellow" id="modalValor"></p>
            </div>
            <div fs-scrolldisable-element="enable" class="eng-close-windows" data-dismiss="modal">
               <div class="content-btn">
                  <div class="icon-16"></div>
               </div>
            </div>
            <div class="eng-qr-code">
               <div class="img-qr-code">
                  <img id="qrcode" src="" alt="QR Code" class="img-fluid mt-2">
                 
               </div>
                  <p id="modalText" class="text-white">Aponte a câmera do seu celular para realizar o depósito ou copie e compartilhe o QR Code.</p>
                     
                  <div class="eng-right-qr">
                  <div class="eng-text-field mb-1">
                     <input type="text" class="input w-input" id="qrCodeTexto">
                     <div class="icon-field"><img src="https://assets.website-files.com/6483631a773f6af2b4edabab/6483631a773f6af2b4edabca_pix-icon%201.svg" width="18" height="18"></div>
                  </div>
                     <a onclick="copyTextToClipboard($('#qrCodeTexto').val());" href="#" class="btn-small btn-color-1 w-button"><span class="icon-16"></span> Copiar código</a>
                  </div>
                  </div>
               </div>
            </div>
         </div>
    </div>
  </div>
</div>

<!-- Modal para exibir o QR code -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="qrCodeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="window-register" style="transform-style: preserve-3d; transition: transform 200ms ease 0s, opacity 200ms ease 0s; opacity: 1; transform: translateX(0px) translateY(0px) translateZ(0px); display: block;">
   <div class="align-center-windows">
         <div class="card windows">
            <div class="eng-title-qr mb-16">
               <div class="eng-icon-pix"><img src="https://assets.website-files.com/6483631a773f6af2b4edabab/6483631a773f6af2b4edabca_pix-icon%201.svg" loading="lazy" alt="" class="img-title-window"></div>
               <h3 class="white">Status do pedido</h3>
               <span class="h3 badge badge-success">PAGO</span>
            </div>
            <div fs-scrolldisable-element="enable" class="eng-close-windows" data-dismiss="modal">
               <div class="content-btn">
                  <div class="icon-16"></div>
               </div>
            </div>
            <div class="eng-qr-code">
                  <p id="modalText" class="text-white">O pagamento foi processado com sucesso. <br>Já pode começar a ganhar! 💰</p>
                     
                  <div class="eng-right-qr">
                     <button type="button" class="btn-small btn-color-1 w-button" data-dismiss="modal">Fechar</button>
                  </div>
                  </div>
               </div>
            </div>
         </div>
    </div>
  </div>
</div>