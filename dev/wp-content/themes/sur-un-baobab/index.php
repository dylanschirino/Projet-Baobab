<?php

/*
Template Name: Homepage
*/

get_header();


?>
<main>
  <section class="mainimage">
    <h2 aria-level="2" class="mainimage__title">
      <?php echo bloginfo();?>
    </h2>
    <a class="mainimage__button" href="<?php echo the_field('home_url');?>" title="Accéder à la vidéo sur youtube"><?php _e('Voir la vidéo','b');?></a>
  </section>

  <section class="whosbaobab">
    <div class="whosbaobab__maincontainer" id="apparition">
      <div class="whosbaobab__container">
        <h3 aria-level="3" class="container__title"><?php _e('Qui sommes nous','b');?></h3>
        <p class="container__text">
          <?php echo the_field('description_baobab');?>
        </p>
        <a href="<?php echo the_permalink('65'); ?>" title="Accéder à la page projet" class="container__link"><?php _e('Nous connaitre','b');?></a>
      </div>

      <article class="whosbaobab__soutien">
        <div class="whosbaobab__container whosbaobab__container--right">
          <h3 aria-level="3" class="container__title container__title--red"><?php _e('Faire un don','b');?></h3>
          <p class="container__text container__text--red">
            <?php echo the_field('pourquoi_donner');?>
          </p>
          <a href="<?php echo the_permalink('69');?>" title="Accéder à la page projet" class="container__link container__link--red"><?php _e('Faire un don','b');?></a>
        </div>
      </article>
    </div>
  </section>

  <section class="lastactu">
    <h3 class="lastactu__title" aria-level="3"><?php _e('Actualité','b');?></h3>

    <article class="actu">
      <a class="actu__link" href="actu/viewactu.html" title="Accéder à la fiche de l'actualité"><img class="actu__image" src="img/imgactu.jpg" width="297" height="240" alt="image actualité">
      </a>
      <div class="actu__info">
        <h4 class="actu__title" aria-level="4">
          Projection de Safidin’i Pela à Tuléar</h4>
          <ul class="actu__list">
            <li class="actu__element">8 avril 2016 /</li>
            <li class="actu__element actu__element--green">ressources /</li>
            <li class="actu__element">auteur&nbsp;:&nbsp;helena</li>
          </ul>
          <p class="actu__text">
            La première projection du dessin animé Safidin’i Pela est prévue ce samedi 31 octobre 2015 à 9h au cinéma Le Tropic de Tuléar. Le film sera projeté en vezo sous-titré en français.
          </p>
          <a class="actu__button" href="actu/viewactu.html" title="Accéder à a fiche">
            Lire la suite
          </a>
        </div>
      </article>

      <article class="actu">
        <a class="actu__link" href="actu/viewactu.html" title="Accéder à la fiche de l'actualité"><img class="actu__image" src="img/imgactu.jpg" width="297" height="240" alt="image actualité">
        </a>
        <div class="actu__info">
          <h4 class="actu__title" aria-level="4">
            Sur Un Baobab a un an !</h4>
            <ul class="actu__list">
              <li class="actu__element">8 avril 2016</li>
              <li class="actu__element actu__element--green">ressources</li>
              <li class="actu__element">auteur&nbsp;:&nbsp;helena</li>
            </ul>
            <p class="actu__text">
              Il y a juste un an, François et moi partions seuls pour Madagascar avec pour unique certitude l’envie commune de réaliser un projet où se rejoignent nos passions pour l’éducation et le cinéma d’animation...
            </p>
            <a class="actu__button" href="actu/viewactu.html" title="Accéder à a fiche">
              Lire la suite
            </a>
          </div>
        </article>
      </section>

      <section class="doityourself">
        <h3 aria-level="3" class="doityourself__title" id="apparition">
          <?php echo the_field('tutoriel_title');?>
        </h3>
        <div class="doityourself__container">

        <a href="ministudio.html" class="doityourself__link" title="Accéder au tutoriel Dessine ton histoire">
          <?php if( get_field('image_dessine') ):
              $image = get_field('image_dessine');
          ?>
          <img class="doityourself__image" src="<?php echo $image['url'];?>" width="345" height="345" alt="dessine ton histoire image">
            <?php endif;?>
          <?php _e('Dessine ton histoire','b');?>
        </a>
        <a href="ministudio.html" class="doityourself__link">
          <?php if( get_field('image_ministudio') ):
              $image_mini = get_field('image_ministudio');
          ?>
          <img class="doityourself__image" src="<?php echo $image_mini['url'];?>" width="345" height="345" alt="dessine ton histoire image">
        <?php endif;?>
          <?php _e('Cree ton mini studio','b');?>
        </a>
      </div>
    </section>

    <section class="decoration">
      <h3 aria-level="3" class="decoration__title" id="apparition">
        <?php _e('Une creation collective','b');?>
        <small class="decoration__title--small"><?php _e('avec','b');?></small> <strong class="decoration__title--strong"> <?php _e('9 enfants','b');?></strong> <small class="decoration__title--small"><?php _e('et','b');?></small> <strong class="decoration__title--strong">
        <?php _e('adolescent','b');?>
        </strong>
        <?php _e('de tuléar','b');?>&nbsp;, <strong class="decoration__title--strong"><?php _e('Madagascar','b');?></strong>
      </h3>
      <?php if( get_field('image_detourer') ):
          $image_detourer = get_field('image_detourer');
      ?>
      <img class="decoration__image" id="deplacement" src="<?php echo $image_detourer['url'];?>" width="585" height="430" alt="image d'un homme sur une moto en carton">
    <?php endif;?>
    </section>
  </main>

  <?php get_footer();?>
