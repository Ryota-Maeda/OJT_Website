<?php get_header(); ?>


  <main class="main-box">
    <div>
      <!-- 左上 -->
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="top-left" class="top-left">
    </div>

    <?php if (get_header_image()): ?>
      <div class="main-image">
        <img src="<?php header_image(); ?>" alt="main" class="top-image">
      </div>
    <?php else: ?>
      <img src="<?php echo get_template_directory_uri(); ?>/img/visual_1_pc.png" alt="main" class="top-image">
    <?php endif;?>

    <div class="bottom-right">
      <!-- 右下 -->
      <img src="<?php echo get_template_directory_uri(); ?>/img/visual_text_pc.png" alt="bottom-right">
    </div>

    <!-- 文言 -->
    <p class="main-text">進化し続ける「街」アメリカンビレッジマガジン</p>
  </main>

  <section>
    <?php if (have_posts()): ?>
      <h2 class="subtitle">Latest Articles</h2>
      <ul class="articles">
        <?php while(have_posts()): the_post(); ?>
          <li class="article">
            <a href="<?php the_permalink(); ?>"  class="article-img">
              <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('thumbnail'); ?>
              <?php else: ?>
                <img class="article-img" src="<?php echo get_template_directory_uri(); ?>/img/dog.jpg" alt="">
              <?php endif; ?>
            </a>
            <div class="article-text">
              <p class="article-date"><?php the_time("Y/m/d/"); ?></p>
              <p class="article-title"><?php the_title(); ?></p>
              <p class="read-more"><a href="<?php the_permalink(); ?>">READ MORE</a></p>
            </div>
          </li>
        <?php endwhile; ?>

        <?php else: ?>
          <p>最近の投稿はありません。</p>
        <?php endif; ?>
      </ul>
  </section>

<?php get_footer(); ?>