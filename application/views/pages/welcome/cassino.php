

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

      <section class="main_slots-wrapper">
         <div class="eng-title mb-8">
            <div class="left-title">
               <h4 class="icon-20 txt-yellow"></h4>
               <h4 class="white">Cassino</h4>
            </div>
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
      
      <div class="main_providers-wrapper mb-32">
         <div class="eng-title">
            <div class="left-title">
               <h4 class="icon-20 txt-yellow"></h4>
               <h4 class="white">Provedores</h4>
            </div>
            <a href="/providers" class="link-more-games w-inline-block">
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
