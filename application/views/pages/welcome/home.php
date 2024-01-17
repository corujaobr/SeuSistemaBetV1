
<style>
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #000; /* Cor de fundo preto */
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

               #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #000; /* Cor de fundo preto */
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            opacity: 1; /* Inicialmente opaco */
            transition: opacity 1s; /* Adiciona uma transição suave */
        }

        #loader {
            border: 8px solid #f3f3f3;
            border-top: 8px solid #3498db;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 2s linear infinite;
        }

       #logo {
            max-width: 350px; /* Defina o tamanho da sua logo */
        }
    </style>

<div id="preloader">
        <img id="logo" src="<?php echo $config[0]->logo ?>" alt="Sua Logo">
</div>
<!-- Começa Aqui -->

<div class="main-content home">
   <div class="container-medium">


   				
   			<?php if ($this->session->flashdata('msg')): ?> 					
                <div class="col-md-12 mt-3 mb-3">    
                    <div class="alert alert-<?= $this->session->flashdata('tipo'); ?> font alert-dismissible fade show" role="alert">
								 <?= $this->session->flashdata('msg'); ?>
					</div>
                </div>
	        <?php endif; ?>

           <div class="main_banner-wrapper mb-24">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
            // Substitua com a lógica para recuperar os banners do banco de dados
            $active = true; // Variável para controlar o item ativo

            foreach ($banners as $banner) {
                // Verifique se este é o primeiro banner para torná-lo ativo
                $class = $active ? 'active' : '';

                echo '<div class="carousel-item ' . $class . '">';
                echo '<img src="' . $banner->image . '" class="d-block w-100" alt="...">';
                echo '</div>';

                // Desative a variável $active após o primeiro banner
                $active = false;
            }
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
</div>





           

      <div class="main-sublinks-wrapper">
         <div class="eng-sublinks-2">
            <a href="<?= base_url(); ?>cassino/aovivo" class="sublink w-inline-block" data-ix="hover-stroke-sublink">
               <div class="eng-stroke-icon-sublink mb-8">
                  <div class="eng-icon-sublink">
                     <div class="icon-20"></div>
                  </div>
                  <div class="stroke-icon-sublink"></div>
               </div>
               <div class="white">Roletas ao vivo</div>
            </a>
            <a href="<?= base_url(); ?>cassino" class="sublink w-inline-block" data-ix="hover-stroke-sublink">
               <div class="eng-stroke-icon-sublink mb-8">
                  <div class="eng-icon-sublink">
                     <div class="icon-20"></div>
                  </div>
                  <div class="stroke-icon-sublink"></div>
               </div>
               <div class="white">Cassino</div>
            </a>
            <a href="<?= base_url(); ?>cassino/aovivo" class="sublink w-inline-block" data-ix="hover-stroke-sublink">
               <div class="eng-stroke-icon-sublink mb-8">
                  <div class="eng-icon-sublink">
                     <div class="icon-20"></div>
                  </div>
                  <div class="stroke-icon-sublink"></div>
               </div>
               <div class="white">Cassino ao vivo</div>
            </a>
            <a href="<?= base_url(); ?>cassino/aovivo" class="sublink w-inline-block" data-ix="hover-stroke-sublink">
               <div class="eng-stroke-icon-sublink mb-8">
                  <div class="eng-icon-sublink">
                     <div class="icon-20"></div>
                  </div>
                  <div class="stroke-icon-sublink"></div>
               </div>
               <div class="white">Blackjack</div>
            </a>
            <a href="<?= base_url(); ?>cassino" class="sublink w-inline-block" data-ix="hover-stroke-sublink">
               <div class="eng-stroke-icon-sublink mb-8">
                  <div class="eng-icon-sublink">
                     <div class="icon-20"></div>
                  </div>
                  <div class="stroke-icon-sublink"></div>
               </div>
               <div class="white">Bacará</div>
            </a>
            <a href="<?= base_url(); ?>cassino" class="sublink w-inline-block" data-ix="hover-stroke-sublink">
               <div class="eng-stroke-icon-sublink mb-8">
                  <div class="eng-icon-sublink">
                     <div class="icon-20"></div>
                  </div>
                  <div class="stroke-icon-sublink"></div>
               </div>
               <div class="white">Football Studio</div>
            </a>
            <a href="<?= base_url(); ?>cassino" class="sublink w-inline-block" data-ix="hover-stroke-sublink">
               <div class="eng-stroke-icon-sublink mb-8">
                  <div class="eng-icon-sublink">
                     <div class="icon-20"></div>
                  </div>
                  <div class="stroke-icon-sublink"></div>
               </div>
               <div class="white">Game Shows</div>
            </a>
            <a href="<?= base_url(); ?>cassino" class="sublink w-inline-block" data-ix="hover-stroke-sublink">
               <div class="eng-stroke-icon-sublink mb-8">
                  <div class="eng-icon-sublink">
                     <div class="icon-20"></div>
                  </div>
                  <div class="stroke-icon-sublink"></div>
               </div>
               <div class="white">Crash Games</div>
            </a>
         </div>
      </div>
      <section id="best" class="main_slots-wrapper">
         <div class="eng-title mb-8">
            <div class="left-title">
               <h4 class="txt-yellow"><i class="fa-solid fa-fire fa-lg"></i></h4>
               <h4 class="white">Populares</h4>
            </div>
            <a href="/allgames?category=Popular" class="link-more-games w-inline-block">
               <div>Ver todos</div>
               <div class="icon-12 txt-yellow"></div>
            </a>
         </div>
         <div class="w-dyn-list">
            <div fs-cmsfilter-duration="50" fs-cmsload-mode="infinite" class="eng-slots-int _6 w-dyn-items" fs-cmsfilter-tagformat="category" fs-cmsfilter-element="list" role="list" fs-cmssort-element="list" fs-cmsload-element="list" fs-cmsfilter-showquery="true">

            <?php foreach ($populares as $p): ?>
               <div role="listitem" class="item-game w-dyn-item">
                  <a href="<?php echo base_url('games/ver/'.$p->provider.'/'.$p->game_code); ?>" class="link-game w-inline-block" data-ix="hover-play-game">
                     <img loading="eager" img-slot-game="" src="<?php echo $p->banner; ?>" alt="" class="slot-game">
                     <div fs-cmsfilter-field="name" fs-cmssort-field="name" class="name-game"><?php echo $p->game_name; ?></div>
                     <div fs-cmsfilter-field="name" fs-cmssort-field="name" class="name-game"><?php echo $p->provider; ?></div>
                     <div class="eng-light-effetct w-condition-invisible" data-ix="light-effect-slot"><img src="https://assets.website-files.com/6483631a773f6af2b4edabab/64c2a7770457de14173a580e_reflect.webp" loading="eager" sizes="(max-width: 479px) 9vw, (max-width: 767px) 18.3671875px, (max-width: 991px) 2vw, (max-width: 1279px) 18.3671875px, 1vw" srcset="https://assets.website-files.com/6483631a773f6af2b4edabab/64c2a7770457de14173a580e_reflect-p-500.png 500w, https://assets.website-files.com/6483631a773f6af2b4edabab/64c2a7770457de14173a580e_reflect-p-800.png 800w, https://assets.website-files.com/6483631a773f6af2b4edabab/64c2a7770457de14173a580e_reflect.webp 1148w" alt="" class="reflect-slot" style="transform-style: preserve-3d; opacity: 0; transform: translateX(-150%) translateY(0px) translateZ(0px);"></div>
                     <div class="light-effect-slot w-condition-invisible"></div>
                     <div class="light-effect-slot-blur w-condition-invisible"></div>
                  </a>
               </div>

             <?php endforeach; ?>
               
            </div>
            <div role="navigation" aria-label="List" class="w-pagination-wrapper pagination"></div>
         </div>
      </section>
      <div class="main_games-wrapper">
         <div class="eng-sublinks mb-32">
            <a href="<?= base_url(); ?>games/ver/PGSOFT/fortune-gods" class="btn-small w-inline-block">
               <div class="no-wrap">Fortune Gods</div>
            </a>
            <a href="<?= base_url(); ?>games/ver/PGSOFT/fortune-mouse" class="btn-small w-inline-block">
               <div class="no-wrap">Fortune Mouse</div>
            </a>
            <a href="<?= base_url(); ?>games/ver/PGSOFT/fortune-ox" class="btn-small w-inline-block">
               <div class="no-wrap">Fortune Ox</div>
            </a>
            <a href="<?= base_url(); ?>games/ver/PGSOFT/fortune-tiger" class="btn-small w-inline-block">
               <div class="no-wrap">Fortune Tiger</div>
            </a>
         </div>
      </div>
      <section class="main_slots-wrapper">
         <div class="eng-title mb-8">
            <div class="left-title">
               <h4 class="icon-20 txt-yellow"></h4>
               <h4 class="white">Cassino</h4>
            </div>
            <a href="<?= base_url(); ?>cassino" class="link-more-games w-inline-block">
               <div>Ver todos</div>
               <div class="icon-12 txt-yellow"></div>
            </a>
         </div>
         <div class="w-dyn-list">
            <div fs-cmsfilter-duration="50" fs-cmsload-mode="infinite" class="eng-slots-int _6 w-dyn-items" fs-cmsfilter-tagformat="category" fs-cmsfilter-element="list" role="list" fs-cmssort-element="list" fs-cmsload-element="list" fs-cmsfilter-showquery="true">
            
            <?php foreach ($jogos as $p): ?>
               <div role="listitem" class="item-game w-dyn-item">
                  <a href="<?php echo base_url('games/ver/'.$p->provider.'/'.$p->game_code); ?>" class="link-game w-inline-block" data-ix="hover-play-game">
                     <img loading="eager" img-slot-game="" src="<?php echo $p->banner; ?>" alt="" class="slot-game">
                     <div fs-cmsfilter-field="name" fs-cmssort-field="name" class="name-game"><?php echo $p->game_name; ?></div>
                     <div fs-cmsfilter-field="name" fs-cmssort-field="name" class="name-game"><?php echo $p->provider; ?></div>
                  </a>
             
               </div>
            <?php endforeach; ?> 
            </div>
         </div>
      </section>
      
      <section id="casino" class="main_slots-wrapper">
         <div class="eng-title mb-8">
            <div class="left-title">
               <h4 class="icon-20 txt-yellow"></h4>
               <h4 class="white">Cassino ao vivo</h4>
            </div>
            <a href="<?= base_url(); ?>cassino/aovivo" class="link-more-games w-inline-block">
               <div>Ver todos</div>
               <div class="icon-12 txt-yellow"></div>
            </a>
         </div>
         <div class="w-dyn-list">
            <div fs-cmsfilter-duration="50" fs-cmsload-mode="infinite" class="eng-slots-int _6 w-dyn-items" fs-cmsfilter-tagformat="category" fs-cmsfilter-element="list" role="list" fs-cmssort-element="list" fs-cmsload-element="list" fs-cmsfilter-showquery="true">
            <?php foreach ($aovivo as $p): ?>
               <div role="listitem" class="item-game w-dyn-item">
                  <a href="<?php echo base_url('games/ver/'.$p->provider.'/'.$p->game_code); ?>" class="link-game w-inline-block" data-ix="hover-play-game">
                     <img loading="eager" img-slot-game="" src="<?php echo $p->banner; ?>" alt="" class="slot-game">
                     <div fs-cmsfilter-field="name" fs-cmssort-field="name" class="name-game"><?php echo $p->game_name; ?></div>
                     <div fs-cmsfilter-field="name" fs-cmssort-field="name" class="name-game"><?php echo $p->provider; ?></div>
                  </a>
                  <div class="coming-soon-alert w-condition-invisible">Em breve!</div>
               </div>
            <?php endforeach; ?>
               
            </div>
         </div>
      </section>
      <div class="main_providers-wrapper mb-32">
         <div class="eng-title">
            <div class="left-title">
               <h4 class="icon-20 txt-yellow"></h4>
               <h4 class="white">Provedores</h4>
            </div>
            <a href="<?= base_url(); ?>cassino" class="link-more-games w-inline-block">
               <div>Ver todos</div>
               <div class="icon-12 txt-yellow"></div>
            </a>
         </div>
         <div class="providers_marquee-animate">
            <div class="providers_marquee-wrapper">
               <div class="w-dyn-list" data-ix="slide-providers" style="transition: transform 45000ms linear 0s; transform: translateX(-100%) translateY(0px);">
                  <div role="list" class="slide_providers-wrapper w-dyn-items">
                     <div role="listitem" class="w-dyn-item"><a href="/providers/hacksaw" class="eng-item-provider w-inline-block"><img loading="eager" alt="" src="https://assets.website-files.com/6483631a773f6af2b4edabee/64d0f7c4aa7b77d2dafad666_hacksaw_logo.webp" class="logo-provider"></a></div>
                     <div role="listitem" class="w-dyn-item"><a href="/providers/originale" class="eng-item-provider w-inline-block"><img loading="eager" alt="" src="https://assets.website-files.com/6483631a773f6af2b4edabee/64c2a7062d9b857b8b922c90_originale-logo%2010.19.05.svg" class="logo-provider"></a></div>
                     <div role="listitem" class="w-dyn-item"><a href="/providers/smartsoft" class="eng-item-provider w-inline-block"><img loading="eager" alt="" src="https://assets.website-files.com/6483631a773f6af2b4edabee/648482e1a3dcf2053b25ce86_6467c127e7ec8a63d5fe8fc0_6462efc30b20c32f44268638_64306dda92ccec2bad06c2cf_smartsoft_logo.webp" class="logo-provider"></a></div>
                     <div role="listitem" class="w-dyn-item"><a href="/providers/spribe" class="eng-item-provider w-inline-block"><img loading="eager" alt="" src="https://assets.website-files.com/6483631a773f6af2b4edabee/648482e15324ef534b53be9c_6467c1282e70575069ff92dc_6462efc30b20c32f44268658_64305dad5c31585f86bde61e_spribe-logo.svg" class="logo-provider"></a></div>
                     <div role="listitem" class="w-dyn-item"><a href="/providers/turbogames" class="eng-item-provider w-inline-block"><img loading="eager" alt="" src="https://assets.website-files.com/6483631a773f6af2b4edabee/648482e1d2d5dd77dbd85fcd_6467c129c29c3a41815fc13a_6464ff293c2fce9b02765c54_turbo_games_logo.webp" class="logo-provider"></a></div>
                     <div role="listitem" class="w-dyn-item"><a href="/providers/pgsoft" class="eng-item-provider w-inline-block"><img loading="eager" alt="" src="https://assets.website-files.com/6483631a773f6af2b4edabee/648482e06bff1a3a6f0c4142_6483573cb9f4c96d173ae194_pgsoft_logo.webp" class="logo-provider"></a></div>
                     <div role="listitem" class="w-dyn-item"><a href="/providers/pragmatic" class="eng-item-provider w-inline-block"><img loading="eager" alt="" src="https://assets.website-files.com/6483631a773f6af2b4edabee/648482e03bdb661f627e3a69_6467c128c29c3a41815fc059_6462efc30b20c32f4426868e_64304b388d4e76c1ec12f4b6_pragmaticplay.webp" class="logo-provider"></a></div>
                     <div role="listitem" class="w-dyn-item"><a href="/providers/onlyplay" class="eng-item-provider w-inline-block"><img loading="eager" alt="" src="https://assets.website-files.com/6483631a773f6af2b4edabee/648482e0841d2b143a9b25c5_6467c127511e8adc134ba77b_6462efc30b20c32f442686b4_onlyplay_logo.webp" class="logo-provider"></a></div>
                     <div role="listitem" class="w-dyn-item"><a href="/providers/belatra" class="eng-item-provider w-inline-block"><img loading="eager" alt="" src="https://assets.website-files.com/6483631a773f6af2b4edabee/648482e0cc8b3453297680ab_6467c1274f92cff27285e5c0_6462efc30b20c32f44268691_64306dce9b3f2e5b1f274168_belatra_logo.webp" class="logo-provider"></a></div>
                     <div role="listitem" class="w-dyn-item"><a href="/providers/ezugi" class="eng-item-provider w-inline-block"><img loading="eager" alt="" src="https://assets.website-files.com/6483631a773f6af2b4edabee/648482e0841d2b143a9b2513_6467c12720bde25bd0b5676f_6462efc30b20c32f44268616_64306dee11af0d16597fa258_ezugi_logo.webp" class="logo-provider"></a></div>
                     <div role="listitem" class="w-dyn-item"><a href="/providers/bgaming" class="eng-item-provider w-inline-block"><img loading="eager" alt="" src="https://assets.website-files.com/6483631a773f6af2b4edabee/648482e06bff1a3a6f0c4050_6467c12770ea9fec4cefad60_6462efc30b20c32f442686b3_64306de1141c5b7d71f7013e_bgaming_logo.webp" class="logo-provider"></a></div>
                     <div role="listitem" class="w-dyn-item"><a href="/providers/evolution" class="eng-item-provider w-inline-block"><img loading="eager" alt="" src="https://assets.website-files.com/6483631a773f6af2b4edabee/648482e06bff1a3a6f0c404d_6467c12761aea91fe8104131_6462efc30b20c32f4426868f_evolution_logo.webp" class="logo-provider"></a></div>
                     <div role="listitem" class="w-dyn-item"><a href="/providers/caleta" class="eng-item-provider w-inline-block"><img loading="eager" alt="" src="https://assets.website-files.com/6483631a773f6af2b4edabee/648482e08dbd81f644609f61_6467c127c29c3a41815fbf0c_64668b5673c1e16f3017f61f_caleta_logo.webp" class="logo-provider"></a></div>
                     <div role="listitem" class="w-dyn-item"><a href="/providers/evoplay" class="eng-item-provider w-inline-block"><img loading="eager" alt="" src="https://assets.website-files.com/6483631a773f6af2b4edabee/648482e0d2d5dd77dbd85f05_6467c1275a178810791a07a4_6462efc30b20c32f44268690_64306dc511af0d5c527f9bc8_evoplay_logo.webp" class="logo-provider"></a></div>
                  </div>
               </div>
               <div class="w-dyn-list" data-ix="slide-providers" style="transition: transform 45000ms linear 0s; transform: translateX(-100%) translateY(0px);">
                  <div role="list" class="slide_providers-wrapper w-dyn-items">
                     <div role="listitem" class="w-dyn-item"><a href="/providers/hacksaw" class="eng-item-provider w-inline-block"><img loading="eager" alt="" src="https://assets.website-files.com/6483631a773f6af2b4edabee/64d0f7c4aa7b77d2dafad666_hacksaw_logo.webp" class="logo-provider"></a></div>
                     <div role="listitem" class="w-dyn-item"><a href="/providers/originale" class="eng-item-provider w-inline-block"><img loading="eager" alt="" src="https://assets.website-files.com/6483631a773f6af2b4edabee/64c2a7062d9b857b8b922c90_originale-logo%2010.19.05.svg" class="logo-provider"></a></div>
                     <div role="listitem" class="w-dyn-item"><a href="/providers/smartsoft" class="eng-item-provider w-inline-block"><img loading="eager" alt="" src="https://assets.website-files.com/6483631a773f6af2b4edabee/648482e1a3dcf2053b25ce86_6467c127e7ec8a63d5fe8fc0_6462efc30b20c32f44268638_64306dda92ccec2bad06c2cf_smartsoft_logo.webp" class="logo-provider"></a></div>
                     <div role="listitem" class="w-dyn-item"><a href="/providers/spribe" class="eng-item-provider w-inline-block"><img loading="eager" alt="" src="https://assets.website-files.com/6483631a773f6af2b4edabee/648482e15324ef534b53be9c_6467c1282e70575069ff92dc_6462efc30b20c32f44268658_64305dad5c31585f86bde61e_spribe-logo.svg" class="logo-provider"></a></div>
                     <div role="listitem" class="w-dyn-item"><a href="/providers/turbogames" class="eng-item-provider w-inline-block"><img loading="eager" alt="" src="https://assets.website-files.com/6483631a773f6af2b4edabee/648482e1d2d5dd77dbd85fcd_6467c129c29c3a41815fc13a_6464ff293c2fce9b02765c54_turbo_games_logo.webp" class="logo-provider"></a></div>
                     <div role="listitem" class="w-dyn-item"><a href="/providers/pgsoft" class="eng-item-provider w-inline-block"><img loading="eager" alt="" src="https://assets.website-files.com/6483631a773f6af2b4edabee/648482e06bff1a3a6f0c4142_6483573cb9f4c96d173ae194_pgsoft_logo.webp" class="logo-provider"></a></div>
                     <div role="listitem" class="w-dyn-item"><a href="/providers/pragmatic" class="eng-item-provider w-inline-block"><img loading="eager" alt="" src="https://assets.website-files.com/6483631a773f6af2b4edabee/648482e03bdb661f627e3a69_6467c128c29c3a41815fc059_6462efc30b20c32f4426868e_64304b388d4e76c1ec12f4b6_pragmaticplay.webp" class="logo-provider"></a></div>
                     <div role="listitem" class="w-dyn-item"><a href="/providers/onlyplay" class="eng-item-provider w-inline-block"><img loading="eager" alt="" src="https://assets.website-files.com/6483631a773f6af2b4edabee/648482e0841d2b143a9b25c5_6467c127511e8adc134ba77b_6462efc30b20c32f442686b4_onlyplay_logo.webp" class="logo-provider"></a></div>
                     <div role="listitem" class="w-dyn-item"><a href="/providers/belatra" class="eng-item-provider w-inline-block"><img loading="eager" alt="" src="https://assets.website-files.com/6483631a773f6af2b4edabee/648482e0cc8b3453297680ab_6467c1274f92cff27285e5c0_6462efc30b20c32f44268691_64306dce9b3f2e5b1f274168_belatra_logo.webp" class="logo-provider"></a></div>
                     <div role="listitem" class="w-dyn-item"><a href="/providers/ezugi" class="eng-item-provider w-inline-block"><img loading="eager" alt="" src="https://assets.website-files.com/6483631a773f6af2b4edabee/648482e0841d2b143a9b2513_6467c12720bde25bd0b5676f_6462efc30b20c32f44268616_64306dee11af0d16597fa258_ezugi_logo.webp" class="logo-provider"></a></div>
                     <div role="listitem" class="w-dyn-item"><a href="/providers/bgaming" class="eng-item-provider w-inline-block"><img loading="eager" alt="" src="https://assets.website-files.com/6483631a773f6af2b4edabee/648482e06bff1a3a6f0c4050_6467c12770ea9fec4cefad60_6462efc30b20c32f442686b3_64306de1141c5b7d71f7013e_bgaming_logo.webp" class="logo-provider"></a></div>
                     <div role="listitem" class="w-dyn-item"><a href="/providers/evolution" class="eng-item-provider w-inline-block"><img loading="eager" alt="" src="https://assets.website-files.com/6483631a773f6af2b4edabee/648482e06bff1a3a6f0c404d_6467c12761aea91fe8104131_6462efc30b20c32f4426868f_evolution_logo.webp" class="logo-provider"></a></div>
                     <div role="listitem" class="w-dyn-item"><a href="/providers/caleta" class="eng-item-provider w-inline-block"><img loading="eager" alt="" src="https://assets.website-files.com/6483631a773f6af2b4edabee/648482e08dbd81f644609f61_6467c127c29c3a41815fbf0c_64668b5673c1e16f3017f61f_caleta_logo.webp" class="logo-provider"></a></div>
                     <div role="listitem" class="w-dyn-item"><a href="/providers/evoplay" class="eng-item-provider w-inline-block"><img loading="eager" alt="" src="https://assets.website-files.com/6483631a773f6af2b4edabee/648482e0d2d5dd77dbd85f05_6467c1275a178810791a07a4_6462efc30b20c32f44268690_64306dc511af0d5c527f9bc8_evoplay_logo.webp" class="logo-provider"></a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <script>
        window.addEventListener('load', function () {
            var preloader = document.getElementById('preloader');
            var content = document.getElementById('content');

            setTimeout(function() {
                preloader.style.display = 'none';
                content.style.display = 'block';
            }, 5000);
        });
    </script>