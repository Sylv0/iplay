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
                <h3 class="dyk">Visste du att:</h3>
                <h3 class="ison"><?php echo $post->post_title ?> finns på Iplay?</h3>
                <p>Följ dina favoritatleter på Iplay — Ett socialt nätverk för sportfans och professionella atleter!</p>
                <p>Ladda ner appen till din smartphone för att hitta din favoritatlet, din coach eller ditt lag på Iplay!</p>
                <div>
                    <a href="#" class="store-link google-play">Google Play <i class="fab fa-google-play"></i></a>
                    <a href="#" class="store-link app-store">App Store <i class="fab fa-apple"></i></a>
                </div>
            </div>
            <div class="hero-img herobox">
                <img src="<?= get_field('hero_img', $post)['url']; ?>" alt="Player <?= $post->post_title; ?>" class="hero_img">
            </div>
            <div class="hero-phone herobox">
                <img src="themes/iplay/assets/images/iphone.png" alt="Phone" class="phone">
                <img src="<?= get_field('phone_img', $post->ID)['url']; ?>" alt="Image in phone" class="phone-img">
            </div>
        </div>
    </section>
    <section class="users">
      <div class="sidebar1"><div class="line2"></div><p>UNITING THE WORLD OF SPORTS</p><div class="line2"></div></div>
      <div class="scrollindicator1"><div class="scrollline"></div><div class="dot"></div><div class="dot"></div><div class="dot"></div><div class="dot"></div><div class="dot"></div><div class="scrollline"></div></div>
      <div class="userscontainer">
        <div class="users1">
          <h2>Följ dina favoritatleter på Iplay redan idag!</h2><p>Ett socialt nätverk för sportfans och professionella atleter! Ladda ner appen till din smartphone för att hitta din favoritatlet, din coach eller ditt lag på Iplay!</p>
        </div>
        <div class="users2">
          <div class="">
            <h2>Iplay för:</h2>
          </div>
          <div class="hero-image-sub-carousel">
            <img class="hero-image-badge login-img" data-position="1" src="themes/iplay/assets/images/swipegubbe.svg" alt="">
            <img class="hero-image-badge profile-img" data-position="2" src="themes/iplay/assets/images/swipegubbe.svg" alt="">
            <img class="hero-image-badge post-img" data-position="3" src="themes/iplay/assets/images/swipegubbe.svg" alt="">
        </div>
          <div class="knowphone">
          <div class="knowmore2">
            <p class="userknow">Vill du veta mer?</p>
          </div>
          <img class="greenphone" src="themes/iplay/assets/images/greenphone.svg" alt="">
        </div>
        </div>
        <div class="users3">
          <h2>Följ dina favoritatleter på Iplay redan idag!</h2><p>Ett socialt nätverk för sportfans och professionella atleter! Ladda ner appen till din smartphone för att hitta din favoritatlet, din coach eller ditt lag på Iplay!</p>
        </div>
      </div>
    </section>
    <section class="cta">
      <div class="addpic">
        <img src="themes/iplay/assets/images/iplaylogo_white_small.png" alt="">
        <h2 class="loveidrott">Sociala medier för dig som<br> verkligen älskar idrott!</h2>
        <div class="icons1">
        <div class="knowmore1">
        <p class="icontext">Google Play</p><i class="fab fa-google-play ctaicon"></i>
      </div>
      <div class="knowmore1">
        <p class="icontext">App Store</p><i class="fab fa-apple ctaicon"></i>
      </div>
    </div>
    </div>
    </section>
    <section class="superusers">
      <div class="sidebar2"><div class="line2"></div><p>UNITING THE WORLD OF SPORTS</p><div class="line2"></div></div>
      <div class="scrollindicator"><div class="scrollline"></div><div class="dot"></div><div class="dot"></div><div class="dot"></div><div class="dot"></div><div class="dot"></div><div class="scrollline"></div></div>
      <div class="supercontainer">
        <div class="super1">
          <p class="pusers">Super users</p>
          <div class="headathletes">
          <h1 data-athlete="nils" class="list-item">Nils Petterson</h1>
          <h1 data-athlete="victor"class="list-item">Victor Thomas</h1>
          <h1 data-athlete="john"class="list-item">John Guidetti</h1>
          <h1 data-athlete="bella"class="list-item">Bella Gulldén</h1>
          </div>
          <div class="filltext">
          <p>Följ dina favoritatleter på Iplay - Ett socialt näteverk för sportfans och atleter!</p>
          <p>Ladda ner appen till din smartphone för att hitta din favoritatlet, din coach eller ditt lag på Iplay!</p>
          </div>
          <div class="knowmore"><span>Vill du veta mer?<span><span class="knapp-icon"></div>
        </div>
        <div class="super2">
          <div class="circle">
            <img class="athlete athlete--active" data-athlete="john" src="themes/iplay/assets/images/johnguidetti.png">
            <img class="athlete victor" data-athlete="victor" src="themes/iplay/assets/images/victorthomas.png">
            <img class="athlete bella" data-athlete="bella" src="themes/iplay/assets/images/bella.png">
            <img class="athlete nils" data-athlete="nils" src="themes/iplay/assets/images/nils.png">
          </div>
          <div class="icons">
            <div class="icon">
              <i class="fab fa-apple "></i>
            </div>
            <div class="icon">
              <i class="fab fa-google-play"></i>
            </div>
          </div>
        </div>
    </div>
    </section>
    <section class="footer">
        <img class="mappic" src="themes/iplay/assets/images/mappic.png">
        <div class="footerbar">
            <div class="fotobject object1">
                <div class="logo"><i class="fab fa-twitter"></i></div>
                <div class="logo"><i class="fab fa-facebook"></i></div>
                <div class="logo"><i class="fab fa-instagram"></i></div>
                <div class="logo"><i class="fab fa-linkedin"></i></div>
                <div class="logo"><i class="fab fa-google-play"></i></div>
                <div class="logo"><i class="fab fa-apple"></i></div>
            </div>
            <div class="fotobject object2"><p>Take a tour</p><p>Super users</p><p>Team</p><p>About</p><p>Contact</p><p>Press</p><p>Blog</p></div>
            <div class="fotobject object3"><p>© 2016 All rights reserved. IPY Holding AB</p></div>
        </div>
    </section>
</main>


<?php get_footer(); ?>
