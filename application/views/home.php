<?php defined('SYSPATH') OR die('No direct script access.') ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
  <head>
    <meta charset="UTF-8">
    <title>Maison Bourdon &ndash; <?php echo __('Sunglasses Made in Montréal') ?></title>
    <meta name="description" content="Maison Bourdon &ndash; <?php echo __('Sunglasses Made in Montréal') ?>">
    <meta name="keywords" content="Maison Bourdon, Montréal, <?php echo __('sunglasses') ?>, <?php echo __('handmade') ?>, <?php echo __('design') ?>">
    <meta name="author" content="Maison Bourdon">
    <link rel="icon" type="image/x-icon" href="<?php echo $URL_base ?>assets/images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes= "60x60" href="<?php echo $URL_base ?>assets/images/apple-touch-icons/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $URL_base ?>assets/images/apple-touch-icons/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $URL_base ?>assets/images/apple-touch-icons/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $URL_base ?>assets/images/apple-touch-icons/touch-icon-ipad-retina.png">
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:100,300">
    <link rel="stylesheet" type="text/css" href="<?php echo $URL_base ?>assets/css/site.css">
    <!--[if IE]><script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.min.js"></script><![endif]-->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('.flexslider').flexslider({
          controlNav: "thumbnails",
          slideshow: false
        });
        $.scrollIt({
          topOffset: -86
        });
        $('#banner').easyFader({
          slideDur: 6000,
          fadeDur: 800
        });
        $(window).scroll(function(){
          if($(window).scrollTop() >= $('header').outerHeight()) {
            $("header").addClass("header_small");
          } else {
            $("header").removeClass("header_small");
          }
        });
      });
    </script>
  </head>
  <body>
    <header>
      <h1>Maison Bourdon</h1>
      <nav id="menu">
        <ul>
          <li><a data-scroll-nav="0" class="active"><?php echo __('home') ?></a></li>
          <li><a data-scroll-nav="1"><?php echo __('system') ?></a></li>
          <li><a data-scroll-nav="2"><?php echo __('models') ?></a></li>
          <li><a data-scroll-nav="3"><?php echo __('colors') ?></a></li>
          <li><a data-scroll-nav="4"><?php echo __('order') ?></a></li>
          <li><a data-scroll-nav="5"><?php echo __('infos') ?></a></li>
        </ul>
      </nav>
      <p><?php echo __('Sunglasses Made in Montréal') ?></p>
      <span id="quebec_flag"></span>
      <nav class="social">
        <ul>
          <li><a href="https://www.facebook.com/pages/Maison-Bourdon/171123336377241" class="facebook" title="facebook"><span>Facebook</span> <i class="fa fa-facebook-square fa-2x"></i></a></li>
          <li><a href="https://twitter.com/maisonbourdon" class="twitter" title="twitter"><span>Twitter</span> <i class="fa fa-twitter fa-2x"></i></a></li>
          <li><a href="http://www.pinterest.com/maisonbourdon/" class="pinterest" title="pinterest"><span>Pinterest</span> <i class="fa fa-pinterest fa-2x"></i></a></li>
          <li><a href="http://www.youtube.com/watch?v=aL4ZbnsryVc" class="youtube" title="youtube"><span>YouTube</span> <i class="fa fa-youtube fa-2x"></i></a></li>
        </ul>
      </nav>
      <a href="<?php echo $URL_base; if ($lang == 'en') echo 'fr/'; else echo 'en/' ?>"><?php if ($lang == 'en') echo 'français'; else echo 'English' ?></a>
    </header>
    <div id="banner" class="fader" data-scroll-index="0">
      <img class="slide" src="<?php echo $URL_base ?>assets/images/banners/banner_6.jpg" alt="banner 6">
      <img class="slide" src="<?php echo $URL_base ?>assets/images/banners/banner_7.jpg" alt="banner 7">
      <img class="slide" src="<?php echo $URL_base ?>assets/images/banners/banner_1.jpg" alt="banner 1">
      <div class="fader_controls">
        <ul class="pager_list"></ul>
      </div>
    </div>
    <div id="system" data-scroll-index="1">
      <h2><?php echo __('Our System') ?></h2>
      <p><?php echo __('Customize your sunglasses and place an order!') ?></p>
      <ol>
        <li><a data-scroll-goto="2"><?php echo __('Choose a model') ?></a></li>
        <li><a data-scroll-goto="3"><?php echo __('Choose your colors') ?></a></li>
        <li><a data-scroll-goto="4"><?php echo __('Place your order') ?></a></li>
      </ol>
    </div>
    <div id="glasses" data-scroll-index="2">
      <h2><?php echo __('Choose a model') ?></h2>
      <div id="model_one" class="model">
        <div class="slide">
          <div class="flexslider_wrapper">
            <div class="flexslider">
              <h3>MB01</h3>
              <ul class="slides">
                <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB01_front_brown.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB01_front_brown.jpg" alt="MB01 photo 1"></li>
                <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB01_front_black.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB01_front_black.jpg" alt="MB01 photo 2"></li>
                <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB01_side_black.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB01_side_black.jpg" alt="MB01 photo 3"></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="model_two" class="model">
        <div class="slide">
          <div class="flexslider_wrapper">
            <div class="flexslider">
              <h3>MB02</h3>
              <ul class="slides">
                <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB02_front_black.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB02_front_black.jpg" alt="MB02 photo 1"></li>
                <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB02_front_white.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB02_front_white.jpg" alt="MB02 photo 2"></li>
                <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB02_side_black.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB02_side_black.jpg" alt="MB02 photo 3"></li>
                <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB02_side_white-black.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB02_side_white-black.jpg" alt="MB02 photo 4"></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="model_three" class="model">
        <div class="slide">
          <div class="flexslider_wrapper">
            <div class="flexslider">
              <h3>MB03</h3>
              <ul class="slides">
                <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB03_front_black-white.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB03_front_black-white.jpg" alt="MB03 photo 1"></li>
                <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB03_front_white-black.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB03_front_white-black.jpg" alt="MB03 photo 2"></li>
                <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB03_side_black.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB03_side_black.jpg" alt="MB03 photo 3"></li>
                <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB03_side_black-white.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB03_side_black-white.jpg" alt="MB03 photo 4"></li>
                <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB03_side_white-black.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB03_side_white-black.jpg" alt="MB03 photo 5"></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="model_four" class="model">
        <div class="slide">
          <div class="flexslider_wrapper">
            <div class="flexslider">
              <h3>MB04</h3>
              <ul class="slides">
                <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB04_front_black.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB04_front_black.jpg" alt="MB04 photo 1"></li>
                <li data-thumb="<?php echo $URL_base ?>assets/images/lunettes/MB04_side_black.jpg"><img src="<?php echo $URL_base ?>assets/images/lunettes/MB04_side_black.jpg" alt="MB04 photo 2"></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="colors" data-scroll-index="3">
      <h2><?php echo __('Choose your colors') ?></h2>
      <ol>
        <li><?php echo __('Lenses') ?>
          <ul>
            <li><img src="<?php echo $URL_base ?>assets/images/swatches/lenses/grey.jpg" alt="teinte grise unie" width="100" height="57"> <span><?php echo __('unified grey tint') ?></span></li>
            <li><img src="<?php echo $URL_base ?>assets/images/swatches/lenses/brown.jpg" alt="teinte brune unie" width="100" height="57"> <span><?php echo __('unified brown tint') ?></span></li>
            <li><img src="<?php echo $URL_base ?>assets/images/swatches/lenses/grey_graded.jpg" alt="teinte grise dégradée" width="100" height="57"> <span><?php echo __('graded grey tint') ?></span></li>
            <li><img src="<?php echo $URL_base ?>assets/images/swatches/lenses/brown_graded.jpg" alt="teinte brune dégradée" width="100" height="57"> <span><?php echo __('graded brown tint') ?></span></li>
          </ul>
        </li>
        <li><?php echo __('Frame') ?>
          <ul>
            <li><img src="<?php echo $URL_base ?>assets/images/swatches/colors/designo_mystic_white.gif" alt="designo mystic white" width="40" height="40"> <span><?php echo __('designo mystic white') ?></span></li>
            <li><img src="<?php echo $URL_base ?>assets/images/swatches/colors/seal_grey_metallic.gif" alt="seal grey metallic" width="40" height="40"> <span><?php echo __('seal grey metallic') ?></span></li>
            <li><img src="<?php echo $URL_base ?>assets/images/swatches/colors/ivy_green_metallic.gif" alt="ivy green metallic" width="40" height="40"> <span><?php echo __('ivy green metallic') ?></span></li>
            <li><img src="<?php echo $URL_base ?>assets/images/swatches/colors/dolomite_brown.gif" alt="dolomite brown" width="40" height="40"> <span><?php echo __('dolomite brown') ?></span></li>
            <li><img src="<?php echo $URL_base ?>assets/images/swatches/colors/jet_black_metallic.gif" alt="jet black metallic" width="40" height="40"> <span><?php echo __('jet black metallic') ?></span></li>
          </ul>
        </li>
        <li><?php echo __('Rivet hinges') ?>
          <ul>
            <li><img src="<?php echo $URL_base ?>assets/images/swatches/colors/chrome.gif" alt="chrome" width="40" height="40"> <span><?php echo __('chrome') ?></span></li>
            <li><img src="<?php echo $URL_base ?>assets/images/swatches/colors/gold.gif" alt="gold" width="40" height="40"> <span><?php echo __('gold') ?></span></li>
            <li><img src="<?php echo $URL_base ?>assets/images/swatches/colors/gun_metal.gif" alt="gun_metal" width="40" height="40"> <span><?php echo __('gun metal') ?></span></li>
          </ul>
        </li>
      </ol>
    </div>
    <div id="order" data-scroll-index="4">
      <h2><?php echo __('Place your order') ?></h2>
      <p class="price"><?php echo __('All our models are') ?> <span class="dollar_sign">&dollar;</span><span class="price">150</span> <abbr title="<?php echo __('canadian dollar') ?>">CAD</abbr> <small> + <?php echo __('taxes') ?></small></p>
      <p class="note"><?php echo __('To place an order, send us an email or phone our offices with your choices.') ?></p>
      
      <h3><?php echo __('Contact') ?></h3>
      <div class="vcard">
        <p class="tel"><span><?php echo __('Phone') ?><span class="sep">:</span></span> <i class="fa fa-phone-square fa-2x"></i>  +1 (514) 452-7649</p>
        <p class="email"><span><?php echo __('Email') ?><span class="sep">:</span></span> <i class="fa fa-envelope fa-2x"></i>  <a href="mailto:infos@maisonbourdon.com">infos@maisonbourdon.com</a></p>
      </div>
    </div>
    <div id="infos" data-scroll-index="5">
      <h2><?php echo __('Who are we?') ?></h2>
      <div id="infos_container">
        <div class="image">
          <img src="<?php echo $URL_base ?>assets/images/photos/montage.jpg" width="480" alt="montage">
        </div>
        <div class="description">
          <p><?php echo __('Maison Bourdon is a small Montréal design boutique specializing in sunglasses since 2013. Its founder, Jean-François Bourdon, is proud to offer est Québec product of quality where the conception and creation is entirely done in Québec.') ?></p>
          <p><?php echo __('Many sunglass models are currently available, for women and men, in a wide variety of colors. Every frame is created in plastic, painted with a car paint, and garnered with assorted lenses from professional optic laboratories. All materials respect canadian norms of health and safety.') ?></p>
        </div>
      </div>
      <ul id="gallery">
        <li><img src="<?php echo $URL_base ?>assets/images/gallery/thumbs/poses.jpg" width="300" alt="gallery photo 1"></li>
        <li><img src="<?php echo $URL_base ?>assets/images/gallery/thumbs/interview.jpg" width="300" alt="gallery photo 2"></li>
        <li><img src="<?php echo $URL_base ?>assets/images/gallery/thumbs/brick.jpg" width="300" alt="gallery photo 3"></li>
        <li><img src="<?php echo $URL_base ?>assets/images/gallery/thumbs/penseur.jpg" width="300" alt="gallery photo 4"></li>
        <li><img src="<?php echo $URL_base ?>assets/images/gallery/thumbs/regardeur.jpg" width="300" alt="gallery photo 5"></li>
        <li><img src="<?php echo $URL_base ?>assets/images/gallery/thumbs/girl.jpg" width="300" alt="gallery photo 6"></li>
      </ul>
      <nav id="social">
        <ul>
          <li><a href="https://www.facebook.com/pages/Maison-Bourdon/171123336377241" id="facebook" title="facebook"><span>Facebook</span><i class="fa fa-facebook-square fa-4x"></i></a></li>
          <li><a href="https://twitter.com/maisonbourdon" id="twitter" title="twitter"><span>Twitter</span><i class="fa fa-twitter fa-4x"></i></a></li>
          <li><a href="http://www.pinterest.com/maisonbourdon/" id="pinterest" title="pinterest"><span>Pinterest</span><i class="fa fa-pinterest fa-4x"></i></a></li>
          <li><a href="http://www.youtube.com/watch?v=aL4ZbnsryVc" id="youtube" title="youtube"><span>YouTube</span><i class="fa fa-youtube fa-4x"></i></a></li>
        </ul>
      </nav>
    </div>
    <footer>
      <p><span class="copyright">&#169;</span> 2014 <a href="http://maisonbourdon.com">Maison Bourdon</a> <span class="separator">&bull;</span> <?php echo __('photos') ?> <span class="arrow">&#10141;</span> Hugues Villeneuve <span class="separator">&bull;</span> <?php echo __('icons') ?> <span class="arrow">&#10141;</span> <a href="http://fortawesome.github.io/Font-Awesome/">Font Awesome</a> <span class="separator">&bull;</span> <a href="<?php echo $URL_base ?>assets/guarantee/guarantee.pdf"><?php echo __('Maison Bourdon Guarantee') ?></a></p>
    </footer>
    <script type="text/javascript">
      <!-- Load Site Javascript -->
      document.writeln("<script type='text/javascript' src='<?php echo $URL_base ?>assets/js/site.min.js'><" + "/script>");
      <!-- Piwik -->
      var _paq = _paq || [];
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u=(("https:" == document.location.protocol) ? "https" : "http") + "://maisonbourdon.com/stats/";
        _paq.push(['setTrackerUrl', u+'piwik.php']);
        _paq.push(['setSiteId', 1]);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
        g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <noscript><p><img src="http://maisonbourdon.com/stats/piwik.php?idsite=1" style="border:0;" alt="piwikinvisibleimage"></p></noscript>
    <!-- End Piwik Code -->
  </body>
</html>
