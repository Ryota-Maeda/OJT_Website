<?php get_header(); ?>


    <div>
      <?php if (get_header_image()): ?>
        <img src="<?php header_image(); ?>" alt="" class="top-image">
      <?php else: ?>
      <img src="<?php echo get_template_directory_uri(); ?>/img" alt="main" class="top-image">
      <?php endif;?>
    </div>

    <section>
      <?php if (have_posts()): ?>
        <h2 class="subtitle">Latest</h2>

        <ul class="articles">
          <?php while(have_posts()): the_post(); ?>
            <li class="article">
              <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('thumbnail'); ?>
                <?php else: ?>
                  <img class="article-img" src="<?php echo get_template_directory_uri(); ?>/img/dog.jpg" alt="">
                <?php endif; ?>
              </a>

              <p class="article-content"><?php the_excerpt(); ?></p>
              <p class="read-more"><a href="<?php the_permalink(); ?>">Read More</a></p>
            </li>
          <?php endwhile; ?>

      <?php else: ?>
      <p>最近の投稿はありません。</p>
      <?php endif; ?>

        </ul>
    </section>

    <section>

     <h2 class="cotact-title">Contact</h2>

     <form action="" class="cotact-main">

      <input type="text" placeholder="お名前" class="contact-text">
      <input type="text" placeholder="メールアドレス" class="contact-text">
      <textarea name="t_name1" placeholder="&#13;&#10;&#13;&#10;&#13;&#10;お問い合わせ内容" class="contact-text"></textarea>

       <button>送信</button>

     </form>

    </section>

<?php get_footer(); ?>