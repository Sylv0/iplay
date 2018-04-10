<?php get_header(); ?>

<?php
if($posts = get_posts(['post_type' => 'hero']))
    $post = $posts[rand(0, sizeof($posts)-1)];
else
    die;
?>

<main>
    <section class="hero">
        <img src="<?= get_field('hero_img', $post)['url']; ?>" alt="Player <?= $post->post_title; ?>" class="hero_img">
        <div class="hero-text">
            <h3>Visste du att:</h3>
            <h3><?php echo $post->post_title ?> finns på Iplay?</h3>
            <p>Följ dina favoritatleter på Iplay — Ett socialt nätverk för sportfans och professionella atleter!  Ladda ner appen till din smartphone för att hitta din favoritatlet, din coach eller ditt lag på Iplay!</p>
            <a href="#" class="store-link google-play"></a>
            <a href="#" class="store-link app-store"></a>
        </div>
        <div class="hero-phone">
            <img src="<?= get_field('phone_img', $post->ID)['url']; ?>" alt="">
        </div>
    </section>
</main>

<?php get_footer(); ?>
