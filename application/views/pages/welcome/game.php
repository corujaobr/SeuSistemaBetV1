<style>
    .GameFrame{
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border-radius: 15px; 
          border: 1px; 
          margin-bottom: 10px;
      
    }

    #scroll-wrapper {
    -webkit-overflow-scrolling: touch;
    overflow-y: scroll;
}
  </style>


<div class="eng-iframe-slot">
      <div iframe-wrapper="" class="iframe-slot">
      <iframe class="GameFrame scroll-wrapper" data-hj-allow-iframe="true"  width="100%" height="100%" style="width: 100% !important; height: 665px !important;" id="gameFrame"></iframe>

      </div>
      <div class="eng-loading-slot">
         <div class="w-dyn-list">
            <div role="list" class="w-dyn-items">
               <div role="listitem" class="eng-logo-anim w-dyn-item"><img loading="eager" src="<?php echo $config[0]->logo ?>" alt="" class="logo-anim"/></div>
            </div>
         </div>
      </div>
   </div>


<script>
   const apiUrl = "<?php echo site_url('fiverscan/pegarLinkJogo/'.$provedora.'/'.$game); ?>";
        const iframe = document.getElementById('gameFrame'); // Substitua 'seuIframeId' pelo ID do seu iframe

        fetch(apiUrl)
          .then(response => {
            if (!response.ok) {
              throw new Error('Network response was not ok');
            }
            return response.json();
          })
          .then(data => {
            const gameURL = data.gameURL;
            iframe.src = gameURL;
          })
          .catch(error => console.error('Error:', error));
</script>

    </div>
  </div>
</div>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?= base_url(); ?>public/js/main-v3.js"></script>
		<script type="text/javascript" src="<?= base_url(); ?>public/js/webflow-footer-v2.js"></script>
		<link rel="stylesheet" href="<?= base_url(); ?>public/css/webflow-style-footer-v2.css">

</body>
</html>