<?php get_header(); ?>

<?php if(have_posts()) {?>
    <?php while(have_posts()) { ?>
      <?php the_post(); ?>
      <h2>
      <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title() ?></a>
      </h2>
      <div>
      Posted on <a href="<?php echo get_permalink() ?>"></a>
      </div>
      <?php } ?>
<?php } else { ?>
    <p>No posts here, no siree, nothing to see at all, honestly, it's true.</p>
<?php } ?>

<?php get_footer(); ?>