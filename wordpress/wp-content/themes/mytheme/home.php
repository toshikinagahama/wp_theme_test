<?php
/*
 *
 * Template Name: Home Template
 *
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>
    <?php get_template_part( 'includes/nav') ?>
    <div style="margin: 20px"></div>
    <!-- スライダーのメインコンテナの div 要素 -->
    <div class="swiper-container"> 
      <!-- ラッパーの（スライドを囲む） div 要素 -->
      <div class="swiper-wrapper"> 
        <!-- それぞれのスライドの div 要素 -->
        <div class="swiper-slide"><img src="http://localhost:8000/wp-content/uploads/2020/12/2019-04-27_18-27-37_000-5-scaled.jpeg" alt="" style="width: 100%; height: 400px; object-fit: cover"></div>
        <div class="swiper-slide"><img src="http://localhost:8000/wp-content/uploads/2020/12/2019-04-29_09-11-56_000.jpeg" alt="" style="width: 100%; height: 400px; object-fit: cover"></div>
        <div class="swiper-slide"><img src="http://localhost:8000/wp-content/uploads/2020/12/2019-04-30_07-53-45_000-scaled.jpeg" alt="" style="width: 100%; height: 400px; object-fit: cover"></div>
      </div>
      <div class="swiper-pagination"></div>
    </div>

  <!-- Page Header -->
  <!-- <header class="masthead" style="background-image: url('<?php the_post_thumbnail_url(); ?>">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
      </div>
    </div>
  </header> -->

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
      </div>
    </div>
  </div>

  <hr>

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
  var mySwiper = new Swiper ('.swiper-container', {
    loop: true,
    pagination: {        //ページネーション
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    speed: 2000,
    effect: "fade",
    autoplay: {         //自動で動かす
      delay: 5000,
      disableOnInteraction: true
    },
  });
  </script>

  <?php get_template_part('includes/footer') ?>

  <?php get_footer(); ?>
</body>

</html>
