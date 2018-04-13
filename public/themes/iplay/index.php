<?php get_header(); ?>

<?php
if($posts = get_posts(['post_type' => 'hero']))
    $post = $posts[rand(0, count($posts)-1)];
else
    die;
?>

<main>
    <section class="hero">
        <!-- <div class="sidebar"><div class="line"></div><p>UNITING THE WORLD OF SPORTS</p><div class="line"></div></div> -->
        <div class="heroboxcontainer">
        <div class="hero-text herobox">
            <img src="themes/iplay/assets/images/thumb.svg" alt="">
            <h3>Visste du att:</h3>
            <h3><?php echo $post->post_title ?> finns på Iplay?</h3>
            <p>Följ dina favoritatleter på Iplay — Ett socialt nätverk för sportfans och professionella atleter!  Ladda ner appen till din smartphone för att hitta din favoritatlet, din coach eller ditt lag på Iplay!</p>
            <div>
                <a href="#" class="store-link google-play">Google Play <i class="fab fa-google-play"></i></a>
                <a href="#" class="store-link app-store">App Store <i class="fab fa-apple"></i></a>
            </div>
        </div>
        <div class="hero-img herobox">
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
      <!-- <div class="sidebar"><div class="line"></div><p>UNITING THE WORLD OF SPORTS</p><div class="line"></div></div>

    <div class="swiper-container">
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <h2>Iplay för:</h2>

    <div class="swiper-button-next"></div>

    <div class="swiper-wrapper">
        <div class="swiper-slide"><h1>Tränaren</h1><img src="themes/iplay/assets/images/swipegubbe.svg"></div>
        <div class="swiper-slide"><h1>Atleten</h1><img src="themes/iplay/assets/images/swipegubbe.svg" alt=""></div>
        <div class="swiper-slide"><h1>Fansen</h1><img src="themes/iplay/assets/images/swipegubbe.svg" alt=""></div>
    </div>

</div> -->
    </section>
    <section class="superusers">
      <div class="sidebar2"><div class="line2"></div><p>UNITING THE WORLD OF SPORTS</p><div class="line2"></div></div>
      <div class="supercontainer">
        <div class="super1">
          <p class="pusers">Super users</p>
          <div class="headathletes">
          <h2>Nils Petterson</h2>
          <h2>Victor Thomas</h2>
          <h2>John Guidetti</h2>
          <h2>Bella Gulldén</h2>
          <h2>Lucas Nilsson</h2>
          </div>
          <div class="filltext">
          <p>Följ dina favoritatleter på Iplay - Ett socialt näteverk för sportfans och atleter!</p>
          <p>Ladda ner appen till din smartphone för att hitta din favoritatlet, din coach eller ditt lag på Iplay!</p>
          </div>
        </div>
        <div class="super2">
          <div class="circle">
            <img class="athlete" src="themes/iplay/assets/images/johnguidetti.png">
          </div>
        </div>
    </div>
      <!-- <img src="themes/iplay/assets/images/addpic.png"> -->
    </section>
    <section class="footer">
      <img class="mappic" src="themes/iplay/assets/images/mappic.png">
      <div class="footerbar">
      <div class="fotobject object1"><div class="logo"></div><div class="logo"></div><div class="logo"></div><div class="logo"></div><div class="logo"></div><div class="logo"></div></div>
      <div class="fotobject object2"><p>Take a tour</p><p>Superusers</p><p>Team</p><p>About</p><p>Contact</p><p>Press</p><p>Blog</p></div>
      <div class="fotobject object3"><p>© 2016 All rights reserved. IPY Holding AB</p></div>
    </div>
    </section>
</main>


<?php get_footer(); ?>
