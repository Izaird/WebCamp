<footer class="site_footer">
  <div class="contenedor clearfix">
    <div class="footer_informacion">
      <h3>Sobre <span>gdlgwebcamp</span></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vehicula congue lacinia. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam varius, enim pellentesque posuere malesuada, ipsum
        erat efficitur massa, in sollicitudin nisl eros nec diam. Pellentesque sit amet dolor neque. Aliquam et nulla sit amet leo rutrum tincidunt. Phasellus iaculis malesuada tincidunt. Suspendisse tincidunt ligula a nulla blandit sollicitudin.
        Proin arcu urna, laoreet at magna sit amet, ullamcorper suscipit erat.</p>
    </div>

    <div class="ultimos_tweets">

      <h3>Últimos <span>tweets</span></h3>

      <ul>
        <li>Nulla arcu lacus, malesuada a molestie sed, dictum ac felis. Sed aliquet mattis dictum. Duis elementum urna vel ligula luctus molestie. Nam ullamcorper tortor eget tellus hendrerit accumsan.</li>

        <li>Nulla arcu lacus, malesuada a molestie sed, dictum ac felis. Sed aliquet mattis dictum. Duis elementum urna vel ligula luctus molestie. Nam ullamcorper tortor eget tellus hendrerit accumsan.</li>

        <li>Nulla arcu lacus, malesuada a molestie sed, dictum ac felis. Sed aliquet mattis dictum. Duis elementum urna vel ligula luctus molestie. Nam ullamcorper tortor eget tellus hendrerit accumsan.</li>
      </ul>
    </div>
    <div class="menu">
      <h3>Redes <span>Sociales</span></h3>
      <nav class="redes_sociales">

        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-pinterest-p"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>

      </nav>
    </div>
  </div>

  <p class="copyright">Todos los derechos Reservados GDLGWEBCAMP 2018.</p>

<div style="display:none;">
  <!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://facebook.us19.list-manage.com/subscribe/post?u=8a83c0704c7787c4cfc916a96&amp;id=379b5af301" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h2>Subscribete al Newsletter y no te pierdas nada de este evento</h2>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Correo electronico  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="Correo electronico requerido" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8a83c0704c7787c4cfc916a96_379b5af301" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
</div>
</footer>

<script src="js/vendor/modernizr-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>
  window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')
</script>
<script src="js/plugins.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/jquery.lettering.js"></script>
<script src="js/jquery.waypoints.js"></script>


 <?php
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    if($pagina == 'invitados'|| $pagina=='index'){
      echo '<script src="js/jquery.colorbox.js"></script>';
    }
    elseif($pagina=='conferencia'){
      echo '<script src="js/lightbox.js"></script>';
    }
  ?>


<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
  window.ga = function() {
    ga.q.push(arguments)
  };
  ga.q = [];
  ga.l = +new Date;
  ga('create', 'UA-XXXXX-Y', 'auto');
  ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us19.list-manage.com","uuid":"8a83c0704c7787c4cfc916a96","lid":"379b5af301","uniqueMethods":true}) })</script>
</body>

</html>
