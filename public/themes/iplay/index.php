<?php get_header(); ?>

<?php
if($posts = get_posts(['post_type' => 'hero']))
    $post = $posts[rand(0, count($posts)-1)];
else
    die;
?>

<main>
    <section class="hero">
        <div class="heroboxcontainer">
        <div class="hero-text herobox">
            <img src="themes/iplay/assets/images/thumb.svg" alt="">
            <h3>Visste du att:</h3>
            <h3><?php echo $post->post_title ?> finns på Iplay?</h3>
            <p>Följ dina favoritatleter på Iplay — Ett socialt nätverk för sportfans och professionella atleter!  Ladda ner appen till din smartphone för att hitta din favoritatlet, din coach eller ditt lag på Iplay!</p>
            <a href="#" class="store-link google-play">Google Play</a>
            <a href="#" class="store-link app-store">App Store</a>
        </div>
        <div class="herobox">
          <img src="<?= get_field('hero_img', $post)['url']; ?>" alt="Player <?= $post->post_title; ?>" class="hero_img">
        </div>
        <div class="hero-phone herobox">
            <img src="<?= get_field('phone_img', $post->ID)['url']; ?>" alt="">
        </div>
      </div>
    </section>
    <section class="users">
      <p>Följ dina favoritatleter på Iplay redan idag! Ett socialt nätverk för sportfans och professionella atleter! Ladda ner appen till din smartphone för att hitta din favoritatlet, din coach eller ditt lag på Iplay!</p>
    </section>
    <section class="cta">
      <!-- Slider main container -->
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">Slide 1</div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        ...
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
</div>
    </section>
    <section class="superusers">

    </section>
</main>

<?php get_footer(); ?>
