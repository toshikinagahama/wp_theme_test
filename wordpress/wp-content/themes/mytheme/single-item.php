<!DOCTYPE html>
<html lang="en">
<head>
  <?php get_header(); ?>
</head>

<body>

    <?php get_template_part( 'includes/nav') ?>


  <?php while(have_posts()): the_post(); ?>

  <!-- Page Header -->
  <?php
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id);
  ?>
  <header class="masthead" style="background-image: url('<?php echo $img[0]; ?>')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1><?php the_title(); ?></h1>
            <span class="meta">Posted by
                <?php the_author(); ?>
                on <?php the_time("Y-m-d"); ?>
              </span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <?php the_content(); ?>

        <dl>
            <dt>カテゴリー</dt>
            <?php
            $terms = get_the_terms(get_the_ID(), 'item_category');
            foreach ($terms as $term):
            ?>
            <dd><a href="<?php echo get_term_link($term->slug, 'item_category'); ?>"><?php echo htmlspecialchars($term->name); ?></a></dd>
            <?php
            endforeach;
            ?>
            <dt>価格</dt>
            <dd><?php echo number_format(get_field('価格')); ?>円</dd>
            <dt>発売日</dt>
            <dd><?php the_field('発売日'); ?></dd>
        </dl>
        </div>
      </div>
    </div>
  </article>

  <hr>
<?php endwhile; ?>

  <?php get_template_part('includes/footer') ?>

  <?php get_footer(); ?>
    <?php wp_footer(); ?>

</body>

</html>
