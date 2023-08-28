<?php get_header(); ?>

<main class="main">

    <div class="container">
        <?php while (have_posts()) :
            the_post(); ?>
            <h1><?= the_title(); ?></h1>

            <?= the_content(); ?>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>