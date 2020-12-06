<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?php echo get_template_directory_uri(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?php echo get_template_directory_uri(); ?>/css/clean-blog.min.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

    <?php get_template_part( 'includes/nav') ?>


  <!-- Page Header -->
  <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>カテゴリー別商品一覧</h1>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
          <?php while(have_posts()): the_post(); ?>
            <div class="post-preview">
            <a href="<?php the_permalink(); ?>">
                <h2 class="post-title">
                <?php the_title(); ?>
                </h2>
                <h3 class="post-subtitle">
                    <?php the_excerpt(); ?>
                </h3>
            </a>
            <p class="post-meta">Posted by
                <?php the_author(); ?>
                on <?php the_time("Y-m-d"); ?></p>
            </div>
            <hr>
            <?php endwhile; ?>

        <!-- Pager -->
        <div class="clearfix">
            <?php echo paginate_links(); ?>
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <?php get_template_part('includes/footer') ?>

  <?php get_footer(); ?>
</body>

</html>
