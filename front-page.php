<?php
/**
 * @package WordPress
 * @subpackage Mondo_Zen_Theme
 */

get_header("front-page"); ?>

	<div class="container">


  <div class="parallax">
    <div id="group1" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <div class="hidden_title title">Base Layer</div>

        <div class="callbacks_container">
      <?php 
            $post = get_page_by_title("Home_slider"); 
            $content = apply_filters('the_content', $post->post_content); 
            echo $content; 
          ?>
      </div>


      </div>
    </div>
    <?php if(catExists("__affichage_equipement-urbain_miroirs_vitrines__")) : ?>
    <div id="group2" class="parallax__group">
      	<div class="parallax__layer parallax__layer--base">
        	<div class="title">AFFİCHAGE  -  ÉQUİPEMENTS  URBAİNS  -  MİROİRS  -  VİTRİNES</div>
    	</div>
      <div class="parallax__layer parallax__layer--fore">
        <div class="listcontainer">
	        <a href="http://www.lmsecurite.fr/catalogues%20%20procity%20%20mobilier%20%20urbain.htm">
            <div class="item"><img src="http://www.lmsecurite.fr/equipement%20%20urbain/procity%20%20catalogues%20%20mobilier%20%20urbain/procity%20%20catalogue%20%20mobilier%20%20urbain%20%20et%20%20espace%20%20vert.jpg"/>
	        	<div class="item_title">Catalogues procity</div>
	         </div>
         </a>
	        <?php echo do_shortcode('[wpshop_get_categories base_cat_slug="__affichage_equipement-urbain_miroirs_vitrines__"]') ?>
    	</div>
      </div>
      <div class="parallax__layer parallax__layer--back">
        <div class="hidden_title title">Background Layer</div>
      </div>
      <div class="parallax__layer parallax__layer--deep">

      	<img src="http://jphusson-amenagement-collectivite.fr/wp-content/uploads/2013/02/banc-bois-metal-design-2.jpg" class="img_fullw"/>
        <div class="hidden_title title">Deep Background Layer</div>
        
      </div>
    </div>
  <?php endif; ?>
     <?php if(catExists("condamnation_identification_imprimantes_signaletique")) : ?>
    <div id="group3" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <div class="title">CONDAMNATİON - İDENTİFİCATİON - İMPRİMANTES - SİGNALÉTİQUE</div>
        <img src="http://www.lmsecurite.fr/imprimantes%20%20brady/imprimante%20%20brady%20%20bbp85/imprimante%20%20brady%20%20bbp85.jpg" class="img_fullw"/>
      </div>
      <div class="parallax__layer parallax__layer--fore">
        <div class="hidden_title title">Foreground Layer</div>
        <div class="listcontainer">
          <?php echo do_shortcode('[wpshop_get_categories base_cat_slug="condamnation_identification_imprimantes_signaletique"]') ?>
	     </div>
      </div> 
    </div>
  <?php endif; ?>
    <?php if(catExists("__prevention_protection_secours__")) : ?>
    <div id="group4" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <div class="title">PRÉVENTİON - PROTECTİON - SECOURS - SÉCURİTÉ </div>
      </div>
      <div class="parallax__layer parallax__layer--fore">
        <div class="hidden_title title">Foreground Layer</div>
          <div class="listcontainer">
          <?php echo do_shortcode('[wpshop_get_categories base_cat_slug="__prevention_protection_secours__"]') ?>
          </div>
      </div>
      <div class="parallax__layer parallax__layer--back">
        <div class="hidden_title title">Background Layer</div>
      		<img src="http://www.lmsecurite.fr/armoires%20%20et%20%20vestiaires%20%20sechants%20%20wintersteiger%20%20drytech/team40%20%20wintersteiger%20%20drytech%20%20armoire%20%20vestiaire%20%20s%C3%A9chant%20%20pour%20%20groupe.jpg" class="img_fullw"/>
      </div>

    </div>
    <?php endif; ?>
    <?php if(catExists("__signalisation_vehicules_routiere__")) : ?>
    <div id="group5" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <div class="title">SİGNALİSATİON  DES  VÉHİCULES  ET  ROUTİĔRE</div>
        <img src="http://www.bzho.com/MOBILIER/panneau.jpg" class="img_fullw" />
      </div>
      <div class="parallax__layer parallax__layer--fore">
        <div class="hidden_title title">Foreground Layer</div>
        <div class="listcontainer">
          <?php echo do_shortcode('[wpshop_get_categories base_cat_slug="__signalisation_vehicules_routiere__"]') ?>
        </div>
      </div>

    </div>
  <?php endif; ?>
    <div id="group6" class="parallax__group">
       <div class="parallax__layer parallax__layer--base">
        <div class="title">CONTACTS</div>
      </div>

        <div class="parallax__layer parallax__layer--back">
          <div class="contact_text">
          <?php 
            $post = get_page_by_title("Contacts"); 
            $content = apply_filters('the_content', $post->post_content); 
            echo $content; 
          ?>
        </div>
        </div>

      
      <div class="parallax__layer parallax__layer--fore">
        <div class="title hidden_title">Background Layer555555</div>
     	  <div class="contact">

          <a href="http://www.lmsecurite.fr/titre_fichiers/flyer%20%20lmsecurite.pdf">
            <img border="0" src="http://www.lmsecurite.fr/titre_fichiers/flyer%20%20lmsecurite%20%20recto.jpg" width="168" height="238">
            <img border="0" src="http://www.lmsecurite.fr/titre_fichiers/carte%20%20lm.jpg" width="360" height="235">
            <img border="0" src="http://www.lmsecurite.fr/titre_fichiers/flyer%20%20lmsecurite%20%20verso.jpg" width="165" height="235">
          </a>
        </div>
      </div>

    </div>
  </div>
</div>

<?php get_footer("front-page"); ?>